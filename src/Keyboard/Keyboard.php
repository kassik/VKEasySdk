<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Keyboard;

use VkEasySdk\Keyboard\Buttons\AppsButton;
use VkEasySdk\Keyboard\Buttons\ButtonInterface;
use VkEasySdk\Keyboard\Buttons\CallbackButton;
use VkEasySdk\Keyboard\Buttons\LinkButton;
use VkEasySdk\Keyboard\Buttons\LocationButton;
use VkEasySdk\Keyboard\Buttons\PayButton;
use VkEasySdk\Keyboard\Buttons\TextButton;

class Keyboard {

    private array $keyboard = [];

    private int $row = 0;


    /**
     * @param bool $one_time - Скрывать ли клавиатуру после первого использования. Параметр срабатывает только для кнопок, отправляющих сообщение
     * @param bool $inline - Должна ли клавиатура отображаться внутри сообщения.
     */
    public function create(bool $one_time = false, bool $inline = false): static {
        $this->keyboard = [
            'one_time' => $one_time,
            'inline' => $inline,
            'buttons' => []
        ];

        return $this;
    }

    public function add(ButtonInterface $keyboard): static {
        $this->keyboard['buttons'][$this->row][] = $keyboard->get();

        return $this;
    }

    public function row(): static {
        $this->row++;
        return $this;
    }

    public function json(): string {
        $json = json_encode($this->keyboard, JSON_UNESCAPED_UNICODE);
        $this->row = 0;
        $this->keyboard = [];
        return $json;
    }

}