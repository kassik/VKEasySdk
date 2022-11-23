<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Keyboard\Buttons;

class LinkButton implements ButtonInterface {

    private array $action = [];

    public function __construct(string $label, string $link, array $payload = []) {
        $this->action = [
            'action' => [
                'type' => 'open_link',
                'label' => mb_strimwidth($label, 0, 35, "..."),
                'link' => $link,
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