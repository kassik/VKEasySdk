<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Stories extends BaseMethod {

    /**
     * Позволяет скрыть из ленты новостей истории от выбранных источников.
     * https://dev.vk.com/method/stories.banOwner
     * @param array $params
     * @return VkResponse
    */
    public function banOwner(array $params): VkResponse {
        return $this->vk->send("stories.banOwner", $params);
    }
    
    /**
     * Удаляет историю.
     * https://dev.vk.com/method/stories.delete
     * @param array $params
     * @return VkResponse
    */
    public function delete(array $params): VkResponse {
        return $this->vk->send("stories.delete", $params);
    }
    
    /**
     * Возвращает истории, доступные для текущего пользователя.
     * https://dev.vk.com/method/stories.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("stories.get", $params);
    }
    
    /**
     * Возвращает список источников историй, скрытых из ленты текущего пользователя.
     * https://dev.vk.com/method/stories.getBanned
     * @param array $params
     * @return VkResponse
    */
    public function getBanned(array $params): VkResponse {
        return $this->vk->send("stories.getBanned", $params);
    }
    
    /**
     * Возвращает информацию об истории по её идентификатору.
     * https://dev.vk.com/method/stories.getById
     * @param array $params
     * @return VkResponse
    */
    public function getById(array $params): VkResponse {
        return $this->vk->send("stories.getById", $params);
    }
    
    /**
     * Позволяет получить адрес для [загрузки истории с фотографией](api/upload).
     * https://dev.vk.com/method/stories.getPhotoUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getPhotoUploadServer(array $params): VkResponse {
        return $this->vk->send("stories.getPhotoUploadServer", $params);
    }
    
    /**
     * Позволяет получить ответы на историю.
     * https://dev.vk.com/method/stories.getReplies
     * @param array $params
     * @return VkResponse
    */
    public function getReplies(array $params): VkResponse {
        return $this->vk->send("stories.getReplies", $params);
    }
    
    /**
     * Возвращает статистику истории.
     * https://dev.vk.com/method/stories.getStats
     * @param array $params
     * @return VkResponse
    */
    public function getStats(array $params): VkResponse {
        return $this->vk->send("stories.getStats", $params);
    }
    
    /**
     * Позволяет получить адрес для загрузки видеозаписи в историю.
     * https://dev.vk.com/method/stories.getVideoUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getVideoUploadServer(array $params): VkResponse {
        return $this->vk->send("stories.getVideoUploadServer", $params);
    }
    
    /**
     * Возвращает список пользователей, просмотревших историю.
     * https://dev.vk.com/method/stories.getViewers
     * @param array $params
     * @return VkResponse
    */
    public function getViewers(array $params): VkResponse {
        return $this->vk->send("stories.getViewers", $params);
    }
    
    /**
     * Скрывает все ответы автора за последние сутки на истории текущего пользователя.
     * https://dev.vk.com/method/stories.hideAllReplies
     * @param array $params
     * @return VkResponse
    */
    public function hideAllReplies(array $params): VkResponse {
        return $this->vk->send("stories.hideAllReplies", $params);
    }
    
    /**
     * Скрывает ответ на историю.
     * https://dev.vk.com/method/stories.hideReply
     * @param array $params
     * @return VkResponse
    */
    public function hideReply(array $params): VkResponse {
        return $this->vk->send("stories.hideReply", $params);
    }
    
    /**
     * Сохраняет историю. В **upload_results** нужно передать строку, которую возвращает [stories.getPhotoUploadServer](method/stories.getPhotoUploadServer) или [stories.getVideoUploadServer](method/stories.getVideoUploadServer)
     * https://dev.vk.com/method/stories.save
     * @param array $params
     * @return VkResponse
    */
    public function save(array $params): VkResponse {
        return $this->vk->send("stories.save", $params);
    }
    
    /**
     * Возвращает результаты поиска по историям.
     * https://dev.vk.com/method/stories.search
     * @param array $params
     * @return VkResponse
    */
    public function search(array $params): VkResponse {
        return $this->vk->send("stories.search", $params);
    }
    
    /**
     * Отправляет фидбек на историю.
     * https://dev.vk.com/method/stories.sendInteraction
     * @param array $params
     * @return VkResponse
    */
    public function sendInteraction(array $params): VkResponse {
        return $this->vk->send("stories.sendInteraction", $params);
    }
    
    /**
     * Позволяет вернуть пользователя или сообщество в список отображаемых историй в ленте.
     * https://dev.vk.com/method/stories.unbanOwner
     * @param array $params
     * @return VkResponse
    */
    public function unbanOwner(array $params): VkResponse {
        return $this->vk->send("stories.unbanOwner", $params);
    }
    
}