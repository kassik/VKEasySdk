<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Carousel\Elements;

class Text {

    private array $elements = [];

    private array $action = ['type' => 'open_link', 'link' => 'https://github.com/YoppiDev/VkEasySdk'];

    private string $title;

    private string $description;

    public function create(string $title, string $description) {
        $this->title = $title;
        $this->description = $description;

        return $this;
    }

    public function action(string $link): static {
        if(!empty($link)) {
            $this->action['link'] = $link;
        }

        return $this;
    }

    public function button(): static {
        return $this;
    }

    public function get(): array {
        $this->element = [
            'title' => $this->title,
            'description' => $this->description,
            'action' => json_encode($this->action, JSON_UNESCAPED_UNICODE)
        ];
    }

}