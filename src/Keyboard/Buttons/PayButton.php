<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Keyboard\Buttons;

class PayButton implements ButtonInterface {

    private array $action = [];

    public function __construct(string $hash, array $payload = []) {
        $this->action = [
            'action' => [
                'type' => 'vkpay',
                'hash' => $hash,
            ]
        ];

        if(!empty($payload)) {
            $this->action['action']['payload'] = json_encode($payload, JSON_UNESCAPED_UNICODE);
        }
    }

    public function get(): array {
        return $this->action;
    }
}