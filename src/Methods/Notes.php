<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Notes extends BaseMethod {

    /**
     * Создает новую заметку у текущего пользователя.
     * https://dev.vk.com/method/notes.add
     * @param array $params
     * @return VkResponse
    */
    public function add(array $params): VkResponse {
        return $this->vk->send("notes.add", $params);
    }
    
    /**
     * Добавляет новый комментарий к заметке.
     * https://dev.vk.com/method/notes.createComment
     * @param array $params
     * @return VkResponse
    */
    public function createComment(array $params): VkResponse {
        return $this->vk->send("notes.createComment", $params);
    }
    
    /**
     * Удаляет заметку текущего пользователя.
     * https://dev.vk.com/method/notes.delete
     * @param array $params
     * @return VkResponse
    */
    public function delete(array $params): VkResponse {
        return $this->vk->send("notes.delete", $params);
    }
    
    /**
     * Удаляет комментарий к заметке.
     * https://dev.vk.com/method/notes.deleteComment
     * @param array $params
     * @return VkResponse
    */
    public function deleteComment(array $params): VkResponse {
        return $this->vk->send("notes.deleteComment", $params);
    }
    
    /**
     * Редактирует заметку текущего пользователя.
     * https://dev.vk.com/method/notes.edit
     * @param array $params
     * @return VkResponse
    */
    public function edit(array $params): VkResponse {
        return $this->vk->send("notes.edit", $params);
    }
    
    /**
     * Редактирует указанный комментарий у заметки.
     * https://dev.vk.com/method/notes.editComment
     * @param array $params
     * @return VkResponse
    */
    public function editComment(array $params): VkResponse {
        return $this->vk->send("notes.editComment", $params);
    }
    
    /**
     * Возвращает список заметок, созданных пользователем.
     * https://dev.vk.com/method/notes.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("notes.get", $params);
    }
    
    /**
     * Возвращает заметку по её `id`.
     * https://dev.vk.com/method/notes.getById
     * @param array $params
     * @return VkResponse
    */
    public function getById(array $params): VkResponse {
        return $this->vk->send("notes.getById", $params);
    }
    
    /**
     * Возвращает список комментариев к заметке.
     * https://dev.vk.com/method/notes.getComments
     * @param array $params
     * @return VkResponse
    */
    public function getComments(array $params): VkResponse {
        return $this->vk->send("notes.getComments", $params);
    }
    
    /**
     * Возвращает список заметок друзей пользователя.
     * https://dev.vk.com/method/notes.getFriendsNotes
     * @param array $params
     * @return VkResponse
    */
    public function getFriendsNotes(array $params): VkResponse {
        return $this->vk->send("notes.getFriendsNotes", $params);
    }
    
    /**
     * Восстанавливает удалённый комментарий.
     * https://dev.vk.com/method/notes.restoreComment
     * @param array $params
     * @return VkResponse
    */
    public function restoreComment(array $params): VkResponse {
        return $this->vk->send("notes.restoreComment", $params);
    }
    
}