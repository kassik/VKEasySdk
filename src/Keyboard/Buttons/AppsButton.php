<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Keyboard\Buttons;

class AppsButton implements ButtonInterface {

    private array $action = [];

    public function __construct(string $label, int|string $app_id, int|string $owner_id, string $hash, array $payload = []) {
        $this->action = [
            'action' => [
                'type' => 'open_app',
                'label' => mb_strimwidth($label, 0, 35, "..."),
                'app_id' => $app_id,
                'owner_id' => $owner_id,
                'hash' => $hash,
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