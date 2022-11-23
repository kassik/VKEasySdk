<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk;

use VkEasySdk\Exceptions\VkCallbackException;
use VkEasySdk\Methods\Bot;

class VkCallback {

    /**
     * @var array события
     */
    private array $events = [];

    /**
     * @var string строка подтверждения
     */
    private string $confirmation;

    /**
     * @var string секретный ключ
     */
    private string $secret;

    private string $access_token;

    private int $group_id;


    public function __construct(string $access_token, string $confirmation, string $secret, int $group_id) {
        if(empty($confirmation)) {
            throw new VkCallbackException('Сonfirmation parameter is null');
        }
        
        $this->access_token = $access_token;
        $this->confirmation = $confirmation;
        $this->group_id = $group_id;
        $this->secret = $secret;
    }

    /**
     * События callback api
     *
     * @param string|array $types через массив можно указать сразу несколько событий, к примеру message_new и message_delete
     * @param callable $callback
     */
    public function event(string|array $types, callable $callback) {
        if(is_array($types)) {
            foreach ($types as $type) {
                $this->events[$type] = $callback;
            }
        } else {
            $this->events[$types] = $callback;
        }
    }

    /**
     * Слушатель событий Callback
     * @param $retry_requests_processing - отключает повторные запросы от vk, которые происходят когда сервер получил вместо ответа ok еще что-то, либо не получил его вовсе
     * @return bool|null
     * @throws Exceptions\VkJsonException
     * @throws VkCallbackException
     */
    public function listener($retry_requests_processing): ?bool {
        if($retry_requests_processing && ((function_exists('getallheaders') && isset(getallheaders()['X-Retry-Counter']) || isset($_SERVER['HTTP_X_RETRY_COUNTER'])))) {
            $this->send_ok();
            exit();
        }

        $webhook = file_get_contents('php://input');

        if(empty($webhook)) {
            exit();
        }

        if($webhook = Utils::jsonValidate($webhook)) {
            if ($this->secret != null
                && $this->secret != $webhook->secret
                && $this->group_id != $webhook->group_id) {
                throw new VkCallbackException('Secret key, not valid!');
            }

            if($webhook->type == 'confirmation') {
                echo($this->confirmation);
            } else {
                $bot = new Bot($this->access_token,$webhook->object);
                $webhook->object->group_id = $webhook->group_id;
                $return = isset($this->events[$webhook->type]) ? $this->events[$webhook->type] ($bot, $webhook->object, (int) $webhook->group_id): null;
                $this->send_ok();
                //echo 'ok';
                return $return;
            }
        }

        return null;
    }

    /**
     * Отправляет статус ok который требует от нас вк
     *
     * @return bool
     */
    public function send_ok(): bool {
        set_time_limit(0);
        ini_set('display_errors', 'Off');
        ob_end_clean();

        if (is_callable('fastcgi_finish_request')) {
            echo 'ok';
            session_write_close();
            fastcgi_finish_request();
            return true;
        }

        ignore_user_abort(true);
        ob_start();
        header('Content-Encoding: none');
        header('Content-Length: 2');
        header('Connection: close');
        echo 'ok';
        ob_end_flush();
        flush();
        return true;
    }


}