<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\State;

trait State {

    /**
     * @var string
     */
    private string $file = __DIR__ . '/file/state.json';

    /**
     * @var int
     */
    private int $group_id;

    /***
     * @var int
     */
    private int $peer_id;

    /**
     * @var string
     */
    private string $key;

    /**
     * @param object $object
     */
    public function __construct(private readonly object $object) {
        if (!file_exists($this->file)) {
            $this->saveToFile('{}');
        }

        $this->key = $this::class;
        $this->group_id = $object->group_id;
        $this->peer_id = $object->message->peer_id;
    }

    /**
     * @return void
     */
    public function first(): void {
        $json[$this->group_id][$this->object->message->peer_id][$this->key] = [
            'state' => $this->states[0],
            'data' => []
        ];

        $this->saveToFile(json_encode($json));
    }

    /**
     * @param string $data
     * @return void
     */
    public function next(string $data = ''): void {
        $json = $this->readFile();

        if($json !== false) {
            $last = $json[$this->group_id][$this->peer_id][$this->key]['state'];
            $next = $this->getNext($this->getStates(), $last);

            if($next === false)
                return;

            $json[$this->group_id][$this->peer_id][$this->key]['state'] = $next;

            if(!empty($data)) {
                $json[$this->group_id][$this->peer_id][$this->key]['data'] =
                    $json[$this->group_id][$this->peer_id][$this->key]['data'] + [$last => $data];
            }

            $this->saveToFile($json);
        }
    }

    /**
     * @param string $data
     * @return void
     */
    public function finish(string $data = ''): void {
        $json = $this->readFile();

        if($json !== false) {
            $last = $json[$this->group_id][$this->peer_id][$this->key]['state'];

            if(!empty($data)) {
                $json[$this->group_id][$this->peer_id][$this->key]['data'] =
                    $json[$this->group_id][$this->peer_id][$this->key]['data'] + [$last => $data];
            }

            $json[$this->group_id][$this->peer_id][$this->key]['state'] = null;
            $this->saveToFile($json);
        }
    }

    /**
     * @param string $name
     * @return bool
     */
    public function isCurrent(string $name): bool {
        $json = $this->readFile();

        if($name == '*') {
            return true;
        } else {
            $state = $json[$this->group_id][$this->peer_id][$this->key]['state'];

            if(!is_null($state) && $name == $state) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return array
     */
    public function getStateData(): array {
        $json = $this->readFile();

        if($json !== false) {
            return $json[$this->group_id][$this->peer_id][$this->key]['data'];
        }

        return [];
    }

    /**
     * @param string|array $data
     * @return void
     */
    private function saveToFile(string|array $data): void {
        $data = is_array($data) ? json_encode($data) : $data;
        $return = file_put_contents($this->file, $data);

        if($return === false)
            trigger_error('Error writing to file ' . $this->file);
    }

    /**
     * @return array|bool
     */
    private function readFile(): array|bool {
        $return = file_get_contents($this->file);

        if($return === false) {
            trigger_error('File read error');
        }

        return json_decode($return, true);
    }

    /**
     * @param array $array
     * @param string|int $key
     * @return mixed
     */
    private function getNext(array $array, string|int $key): mixed {
        $offset = array_search($key, $array) + 1;
        $out = array_slice($array,  $offset , 1);
        return current($out);
    }


    abstract public function getStates();
}