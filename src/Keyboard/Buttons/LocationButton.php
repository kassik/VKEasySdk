<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Keyboard\Buttons;

class LocationButton implements ButtonInterface {

    private array $action = [];

    public function __construct(array $payload = []) {
        $this->action = [
            'action' => [
                'type' => 'location',
            ]
        ];

        if(!empty($payload)) {
            $this->action['action']['payload'] = json_encode($payload);
        }
    }

    public function get(): array {
        return $this->action;
    }
}