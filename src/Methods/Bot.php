<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use JetBrains\PhpStorm\Pure;
use VkEasySdk\Rules;
use VkEasySdk\VkClient;
use VkEasySdk\Wrappers\Http\VkRequest;
use VkEasySdk\Wrappers\Http\VkResponse;

class Bot extends VkClient {

    private string $access_token;

    private string|float $version;

    private object|array $response;


    public function __construct(string $access_token, object|array $response, string|float $version = 5.131) {
        parent::__construct($access_token, $version);

        $this->access_token = $access_token;
        $this->version = $version;
        $this->response = $response;
    }

    /**
     * Отправка сообщения
     *
     * @param string|null $message
     * @param array $attachments
     * @param string|null $keyboard
     * @param float|null $lat
     * @param float|null $long
     * @param int|null $reply_to
     * @param array $forward_messages
     * @param string|null $forward
     * @param int|null $sticker_id
     * @param string|null $template
     * @param string|null $payload
     * @param string|null $content_source
     * @param bool|null $dont_parse_links
     * @param bool|null $disable_mentions
     * @param string|null $intent
     * @param int|null $subscribe_id
     * @return VkResponse
     */
    public function answer(
        string $message = null,
        array $attachments = [],
        string $keyboard = null,
        float $lat = null,
        float $long = null,
        int $reply_to = null,
        array $forward_messages = [],
        string $forward = null,
        int $sticker_id = null,
        string $template = null,
        string $payload = null,
        string $content_source = null,
        bool $dont_parse_links = null,
        bool $disable_mentions = null,
        string $intent = null,
        int $subscribe_id = null
    ): VkResponse {
        $params = [
            'peer_id' => $this->response->message->peer_id,
            'random_id' => time() + rand(PHP_INT_MIN, PHP_INT_MAX),
            'read_state' => 1,
            'message' => $message,
            'access_token' => $this->access_token,
            'v' => $this->version
        ];

        $params['attachment'] = !is_null($attachments) ? implode(',', $attachments) : null;
        $params['keyboard'] = !is_null($keyboard) ? $keyboard : null;
        $params['lat'] = !is_null($lat) ? $lat : null;
        $params['long'] = !is_null($long) ? $long : null;
        $params['reply_to'] = !is_null($reply_to) ? $reply_to : null;
        $params['forward_messages'] = !is_null($forward_messages) ? implode(',', $forward_messages) : null;
        $params['forward'] = !is_null($forward) ? $forward : null;
        $params['sticker_id'] = !is_null($sticker_id) ? $sticker_id : null;
        $params['template'] = !is_null($template) ? $template : null;
        $params['payload'] = !is_null($payload) ? $payload : null;
        $params['content_source'] = !is_null($content_source) ? $content_source : null;
        $params['dont_parse_links'] = !is_null($dont_parse_links) ? (int) $dont_parse_links : null;
        $params['disable_mentions'] = !is_null($disable_mentions) ? (int) $disable_mentions : null;
        $params['intent'] = !is_null($intent) ? $intent : null;
        $params['subscribe_id'] = !is_null($subscribe_id) ? $subscribe_id : null;
        $params = array_filter($params);

        return $this->messages()->send($params);
    }

    /**
     * Ответ на сообщение
     *
     * @param string|null $message
     * @param array $attachments
     * @return VkResponse
     */
    public function reply(string $message = null, array $attachments = []): VkResponse {
        $forward = json_encode([
            'conversation_message_ids' => $this->response->message->conversation_message_id,
            'peer_id' => $this->response->message->peer_id,
            'is_reply' => true,
        ]);

        return $this->answer($message, $attachments, forward: $forward);
    }

    /**
     * Пересылает сообщения
     *
     * @param string|null $message - текст
     * @param array $attachments - прикрепления
     * @param array $forward_message_ids - массив с ids сообщений
     * @return VkResponse
     */
    public function forward(string $message = null, array $forward_message_ids = [], array $attachments = []): VkResponse {
        $forward = json_encode([
            'conversation_message_ids' => implode(',', $forward_message_ids),
            'peer_id' => $this->response->message->peer_id,
        ]);

        return $this->answer($message, $attachments, forward: $forward);
    }

    #[Pure] public function rules(): Rules {
        return new Rules($this->response, $this);
    }

    /**
     * Эмулирует набор сообщения указанное время
     *
     * @param int $seconds
     * @return void
     */
    public function typingAndWaits(int $seconds): void {
        $this->messages()->setActivity([
            'peer_id' => $this->response->message->peer_id,
            'type' => 'typing'
        ]);

        sleep($seconds);
    }

    /**
     * Эмулирует набор сообщения
     *
     * @return void
     */
    public function typing(): void {
        $this->messages()->setActivity([
            'peer_id' => $this->response->message->peer_id,
            'type' => 'typing'
        ]);
    }

    /**
     * Вернет данные от вк
     * @return void
     */
    public function getListener(): void {
        $this->debug($this->response);
    }

    /**
     * Для дебага
     *
     * @param $data
     * @return void
     */
    public function debug($data): void {
        var_dump($data);
        $this->answer(print_r($data, true));
    }

}