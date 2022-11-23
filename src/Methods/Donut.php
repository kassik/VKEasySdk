<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Donut extends BaseMethod {

    /**
     * Возвращает список донов, которые подписаны на определенные сообщества, из числа друзей пользователя.
     * https://dev.vk.com/method/donut.getFriends
     * @param array $params
     * @return VkResponse
    */
    public function getFriends(array $params): VkResponse {
        return $this->vk->send("donut.getFriends", $params);
    }
    
    /**
     * Возвращает информацию о подписке VK Donut.
     * https://dev.vk.com/method/donut.getSubscription
     * @param array $params
     * @return VkResponse
    */
    public function getSubscription(array $params): VkResponse {
        return $this->vk->send("donut.getSubscription", $params);
    }
    
    /**
     * Возвращает информацию о подписках пользователя.
     * https://dev.vk.com/method/donut.getSubscriptions
     * @param array $params
     * @return VkResponse
    */
    public function getSubscriptions(array $params): VkResponse {
        return $this->vk->send("donut.getSubscriptions", $params);
    }
    
    /**
     * Возвращает информацию о том, подписан ли пользователь на платный контент (является доном).
     * https://dev.vk.com/method/donut.isDon
     * @param array $params
     * @return VkResponse
    */
    public function isDon(array $params): VkResponse {
        return $this->vk->send("donut.isDon", $params);
    }
    
}