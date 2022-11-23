<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\State;

use VkEasySdk\Exceptions\VkStateException;

class FileState {

    private const FILE_PATH = __DIR__ . '/file/state.json';

    private array $states = [];

    private int $group_id;

    private string $name;

    public function __construct(private readonly object $object) {
        if (!file_exists(self::FILE_PATH)) {
            file_put_contents(self::FILE_PATH, '{}');
        }

        $this->group_id = $object->group_id;
    }

    public function add(string $name, array $state) {
        if(empty($name) || empty($state)) {
            throw new VkStateException('Attribute name or state incorrect');
        }
;
        $this->states = $state;
        $this->name = $name;
    }

    /**
     * Начало работы
     * @return void
     */
    public function first(): void {
        $json[$this->group_id][$this->object->message->peer_id][$this->name] = [
            'state' => $this->states[0],
            'data' => []
        ];

        file_put_contents(self::FILE_PATH, json_encode($json));
    }

    /**
     * Переход к следующему состоянию
     * @param string $data
     * @return void
     */
    public function next(string $data = ''): void {
        $json = $this->getStateKey();

        if(!is_null($json)) {
            $last = $json['state'];

            if(!empty($last)) {
                $next = $this->getNext($this->states, $last);

                if($next !== false) {
                    $json['state'] = $next;
                } else {
                    return;
                }

                if(!empty($data)) {
                    $json['data'] = $json['data'] + [$last => $data];
                }

                $this->saveState($json);
            } else {
                return;
            }
        } else {
            return;
        }
    }

    /**
     * Проверка на валидность состояния
     *
     * @param string $state
     * @return bool
     */
    public function isCurrent(string $state): bool {
        $data = $this->getStateKey();

        if($state == '*') {
            return true;
        } elseif(!is_null($data)) {
            if($state == $data['state'])
                return true;
        }

        return false;
    }

    /**
     * Завершение работы состояния
     * @param string $data
     * @return void
     */
    public function finish(string $data = ''): void {
        $json = $this->getStateKey();

        if(!is_null($json)) {
            $last = $json['state'];
            $json['state'] = null;

            if(!empty($data)) {
                $json['data'] = $json['data'] + [$last => $data];
            }

            $this->saveState($json);
        }
    }

    /**
     * Вернет текущее состояние
     *
     * @return array|null
     */
    public function getCurrentState(): ?array {
        $json = $this->getStateKey();

        if(!is_null($json)) {
            return $json['state'];
        }

        return null;
    }

    /**
     * Возвращает массив с данными
     *
     * @return array|null
     */
    public function getData(): ?array {
        $json = $this->getStateKey();

        if(!is_null($json)) {
            return $json['data'];
        }

        return null;
    }

    /**
     * Получает следующий элемент массива по ключу
     *
     * @param array $array
     * @param string|int $key
     * @return false|mixed
     */
    private function getNext(array $array, string|int $key): mixed {
        $offset = array_search($key, $array) + 1;
        $out = array_slice($array,  $offset , 1);
        return current($out);
    }

    private function getJson(): ?array {
        if($this->check_exist_file()) {
            $file = file_get_contents(self::FILE_PATH);
            return json_decode($file, true);
        }

        return null;
    }

    private function getStateKey(): ?array {
        $json = $this->getJson();

        if(!is_null($json)) {
            if(isset($json[$this->group_id][$this->object->message->peer_id][$this->name])) {
                return $json[$this->group_id][$this->object->message->peer_id][$this->name];
            }
        }

        return null;
    }

    public function saveState(array $data): void {
        if(!empty($data)) {
            $json[$this->group_id][$this->object->message->peer_id][$this->name] = $data;
            file_put_contents(self::FILE_PATH, json_encode($json));
        }
    }

    private function check_exist_file(): bool {
        return file_exists(self::FILE_PATH);
    }

}