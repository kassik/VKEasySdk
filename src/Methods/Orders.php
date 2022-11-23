<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Orders extends BaseMethod {

    /**
     * Отменяет подписку.
     * https://dev.vk.com/method/orders.cancelSubscription
     * @param array $params
     * @return VkResponse
    */
    public function cancelSubscription(array $params): VkResponse {
        return $this->vk->send("orders.cancelSubscription", $params);
    }
    
    /**
     * Изменяет состояние заказа.
     * https://dev.vk.com/method/orders.changeState
     * @param array $params
     * @return VkResponse
    */
    public function changeState(array $params): VkResponse {
        return $this->vk->send("orders.changeState", $params);
    }
    
    /**
     * Возвращает список заказов.
     * https://dev.vk.com/method/orders.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("orders.get", $params);
    }
    
    /**
     * Возвращает стоимость голосов в валюте пользователя.
     * https://dev.vk.com/method/orders.getAmount
     * @param array $params
     * @return VkResponse
    */
    public function getAmount(array $params): VkResponse {
        return $this->vk->send("orders.getAmount", $params);
    }
    
    /**
     * Возвращает информацию об отдельном заказе.
     * https://dev.vk.com/method/orders.getById
     * @param array $params
     * @return VkResponse
    */
    public function getById(array $params): VkResponse {
        return $this->vk->send("orders.getById", $params);
    }
    
    /**
     * Получает информацию о подписке по её идентификатору.
     * https://dev.vk.com/method/orders.getUserSubscriptionById
     * @param array $params
     * @return VkResponse
    */
    public function getUserSubscriptionById(array $params): VkResponse {
        return $this->vk->send("orders.getUserSubscriptionById", $params);
    }
    
    /**
     * Получает список активных подписок пользователя.
     * https://dev.vk.com/method/orders.getUserSubscriptions
     * @param array $params
     * @return VkResponse
    */
    public function getUserSubscriptions(array $params): VkResponse {
        return $this->vk->send("orders.getUserSubscriptions", $params);
    }
    
    /**
     * Обновляет цену подписки для пользователя.
     * https://dev.vk.com/method/orders.updateSubscription
     * @param array $params
     * @return VkResponse
    */
    public function updateSubscription(array $params): VkResponse {
        return $this->vk->send("orders.updateSubscription", $params);
    }
    
}