<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Likes extends BaseMethod {

    /**
     * Добавляет указанный объект в список **Мне нравится** текущего пользователя.
     * https://dev.vk.com/method/likes.add
     * @param array $params
     * @return VkResponse
    */
    public function add(array $params): VkResponse {
        return $this->vk->send("likes.add", $params);
    }
    
    /**
     * Удаляет указанный объект из списка **Мне нравится** текущего пользователя
     * https://dev.vk.com/method/likes.delete
     * @param array $params
     * @return VkResponse
    */
    public function delete(array $params): VkResponse {
        return $this->vk->send("likes.delete", $params);
    }
    
    /**
     * Получает список идентификаторов пользователей, которые добавили заданный объект в свой список «Мне нравится».
     * https://dev.vk.com/method/likes.getList
     * @param array $params
     * @return VkResponse
    */
    public function getList(array $params): VkResponse {
        return $this->vk->send("likes.getList", $params);
    }
    
    /**
     * Проверяет, находится ли объект в списке **Мне нравится** заданного пользователя.
     * https://dev.vk.com/method/likes.isLiked
     * @param array $params
     * @return VkResponse
    */
    public function isLiked(array $params): VkResponse {
        return $this->vk->send("likes.isLiked", $params);
    }
    
}