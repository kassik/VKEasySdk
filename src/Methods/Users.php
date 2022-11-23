<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Users extends BaseMethod {

    /**
     * Возвращает расширенную информацию о пользователях.
     * https://dev.vk.com/method/users.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("users.get", $params);
    }
    
    /**
     * Возвращает список идентификаторов пользователей, которые являются подписчиками пользователя.
     * https://dev.vk.com/method/users.getFollowers
     * @param array $params
     * @return VkResponse
    */
    public function getFollowers(array $params): VkResponse {
        return $this->vk->send("users.getFollowers", $params);
    }
    
    /**
     * Возвращает список идентификаторов пользователей и публичных страниц, которые входят в список подписок пользователя.
     * https://dev.vk.com/method/users.getSubscriptions
     * @param array $params
     * @return VkResponse
    */
    public function getSubscriptions(array $params): VkResponse {
        return $this->vk->send("users.getSubscriptions", $params);
    }
    
    /**
     * Позволяет пожаловаться на пользователя.
     * https://dev.vk.com/method/users.report
     * @param array $params
     * @return VkResponse
    */
    public function report(array $params): VkResponse {
        return $this->vk->send("users.report", $params);
    }
    
    /**
     * Возвращает список пользователей в соответствии с заданным критерием поиска.
     * https://dev.vk.com/method/users.search
     * @param array $params
     * @return VkResponse
    */
    public function search(array $params): VkResponse {
        return $this->vk->send("users.search", $params);
    }
    
}