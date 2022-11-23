<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Stats extends BaseMethod {

    /**
     * Возвращает статистику сообщества или приложения.
     * https://dev.vk.com/method/stats.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("stats.get", $params);
    }
    
    /**
     * Возвращает статистику для записи на стене.
     * https://dev.vk.com/method/stats.getPostReach
     * @param array $params
     * @return VkResponse
    */
    public function getPostReach(array $params): VkResponse {
        return $this->vk->send("stats.getPostReach", $params);
    }
    
    /**
     * Добавляет данные о текущем сеансе в статистику посещаемости приложения.
     * https://dev.vk.com/method/stats.trackVisitor
     * @param array $params
     * @return VkResponse
    */
    public function trackVisitor(array $params): VkResponse {
        return $this->vk->send("stats.trackVisitor", $params);
    }
    
}