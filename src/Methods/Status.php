<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Status extends BaseMethod {

    /**
     * Получает текст статуса пользователя или сообщества.
     * https://dev.vk.com/method/status.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("status.get", $params);
    }
    
    /**
     * Устанавливает новый статус текущему пользователю или сообществу.
     * https://dev.vk.com/method/status.set
     * @param array $params
     * @return VkResponse
    */
    public function set(array $params): VkResponse {
        return $this->vk->send("status.set", $params);
    }
    
}