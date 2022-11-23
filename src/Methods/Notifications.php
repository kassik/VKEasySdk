<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Notifications extends BaseMethod {

    /**
     * Возвращает список оповещений об ответах других пользователей на записи текущего пользователя.
     * https://dev.vk.com/method/notifications.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("notifications.get", $params);
    }
    
    /**
     * Сбрасывает счетчик непросмотренных оповещений об ответах других пользователей на записи текущего пользователя.
     * https://dev.vk.com/method/notifications.markAsViewed
     * @param array $params
     * @return VkResponse
    */
    public function markAsViewed(array $params): VkResponse {
        return $this->vk->send("notifications.markAsViewed", $params);
    }
    
    /**
     * Отправляет уведомление пользователю приложения Mini Apps.
     * https://dev.vk.com/method/notifications.sendMessage
     * @param array $params
     * @return VkResponse
    */
    public function sendMessage(array $params): VkResponse {
        return $this->vk->send("notifications.sendMessage", $params);
    }
    
}