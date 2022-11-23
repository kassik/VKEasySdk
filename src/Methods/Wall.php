<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Wall extends BaseMethod {

    /**
     * Добавляет запись на стене пользователя или сообщества в список **Мне нравится**, а также создает копию понравившейся записи на стене текущего пользователя при необходимости.
     * https://dev.vk.com/method/wall.addLike
     * @param array $params
     * @return VkResponse
    */
    public function addLike(array $params): VkResponse {
        return $this->vk->send("wall.addLike", $params);
    }
    
    /**
     * Проверяет ссылку для указания источника.
     * https://dev.vk.com/method/wall.checkCopyrightLink
     * @param array $params
     * @return VkResponse
    */
    public function checkCopyrightLink(array $params): VkResponse {
        return $this->vk->send("wall.checkCopyrightLink", $params);
    }
    
    /**
     * Выключает комментирование записи
     * https://dev.vk.com/method/wall.closeComments
     * @param array $params
     * @return VkResponse
    */
    public function closeComments(array $params): VkResponse {
        return $this->vk->send("wall.closeComments", $params);
    }
    
    /**
     * Добавляет комментарий к записи на стене.
     * https://dev.vk.com/method/wall.createComment
     * @param array $params
     * @return VkResponse
    */
    public function createComment(array $params): VkResponse {
        return $this->vk->send("wall.createComment", $params);
    }
    
    /**
     * Удаляет запись со стены.
     * https://dev.vk.com/method/wall.delete
     * @param array $params
     * @return VkResponse
    */
    public function delete(array $params): VkResponse {
        return $this->vk->send("wall.delete", $params);
    }
    
    /**
     * Удаляет комментарий к записи на стене.
     * https://dev.vk.com/method/wall.deleteComment
     * @param array $params
     * @return VkResponse
    */
    public function deleteComment(array $params): VkResponse {
        return $this->vk->send("wall.deleteComment", $params);
    }
    
    /**
     * Удаляет запись на стене пользователя из списка **Мне нравится**.
     * https://dev.vk.com/method/wall.deleteLike
     * @param array $params
     * @return VkResponse
    */
    public function deleteLike(array $params): VkResponse {
        return $this->vk->send("wall.deleteLike", $params);
    }
    
    /**
     * Редактирует запись на стене.
     * https://dev.vk.com/method/wall.edit
     * @param array $params
     * @return VkResponse
    */
    public function edit(array $params): VkResponse {
        return $this->vk->send("wall.edit", $params);
    }
    
    /**
     * Позволяет отредактировать скрытую запись.
     * https://dev.vk.com/method/wall.editAdsStealth
     * @param array $params
     * @return VkResponse
    */
    public function editAdsStealth(array $params): VkResponse {
        return $this->vk->send("wall.editAdsStealth", $params);
    }
    
    /**
     * Редактирует комментарий на стене.
     * https://dev.vk.com/method/wall.editComment
     * @param array $params
     * @return VkResponse
    */
    public function editComment(array $params): VkResponse {
        return $this->vk->send("wall.editComment", $params);
    }
    
    /**
     * Возвращает список записей со стены пользователя или сообщества.
     * https://dev.vk.com/method/wall.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("wall.get", $params);
    }
    
    /**
     * Возвращает список записей со стен пользователей или сообществ по их идентификаторам.
     * https://dev.vk.com/method/wall.getById
     * @param array $params
     * @return VkResponse
    */
    public function getById(array $params): VkResponse {
        return $this->vk->send("wall.getById", $params);
    }
    
    /**
     * Получает информацию о комментарии на стене.
     * https://dev.vk.com/method/wall.getComment
     * @param array $params
     * @return VkResponse
    */
    public function getComment(array $params): VkResponse {
        return $this->vk->send("wall.getComment", $params);
    }
    
    /**
     * Возвращает список комментариев к записи на стене.
     * https://dev.vk.com/method/wall.getComments
     * @param array $params
     * @return VkResponse
    */
    public function getComments(array $params): VkResponse {
        return $this->vk->send("wall.getComments", $params);
    }
    
    /**
     * Получает информацию о пользователях, которые добавили указанную запись в свой список **Мне нравится**.
     * https://dev.vk.com/method/wall.getLikes
     * @param array $params
     * @return VkResponse
    */
    public function getLikes(array $params): VkResponse {
        return $this->vk->send("wall.getLikes", $params);
    }
    
    /**
     * Возвращает адрес сервера для загрузки фотографии на стену пользователя.
     * https://dev.vk.com/method/wall.getPhotoUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getPhotoUploadServer(array $params): VkResponse {
        return $this->vk->send("wall.getPhotoUploadServer", $params);
    }
    
    /**
     * Позволяет получать список репостов заданной записи.
     * https://dev.vk.com/method/wall.getReposts
     * @param array $params
     * @return VkResponse
    */
    public function getReposts(array $params): VkResponse {
        return $this->vk->send("wall.getReposts", $params);
    }
    
    /**
     * Включает комментирование записи
     * https://dev.vk.com/method/wall.openComments
     * @param array $params
     * @return VkResponse
    */
    public function openComments(array $params): VkResponse {
        return $this->vk->send("wall.openComments", $params);
    }
    
    /**
     * Закрепляет запись на стене (запись будет отображаться выше остальных).
     * https://dev.vk.com/method/wall.pin
     * @param array $params
     * @return VkResponse
    */
    public function pin(array $params): VkResponse {
        return $this->vk->send("wall.pin", $params);
    }
    
    /**
     * Позволяет создать запись на стене, предложить запись на стене публичной страницы, опубликовать существующую отложенную запись.
     * https://dev.vk.com/method/wall.post
     * @param array $params
     * @return VkResponse
    */
    public function post(array $params): VkResponse {
        return $this->vk->send("wall.post", $params);
    }
    
    /**
     * Позволяет создать скрытую запись, которая не попадает на стену сообщества и в дальнейшем может быть использована  для создания рекламного объявления типа «Запись в сообществе».
     * https://dev.vk.com/method/wall.postAdsStealth
     * @param array $params
     * @return VkResponse
    */
    public function postAdsStealth(array $params): VkResponse {
        return $this->vk->send("wall.postAdsStealth", $params);
    }
    
    /**
     * Позволяет пожаловаться на комментарий к записи.
     * https://dev.vk.com/method/wall.reportComment
     * @param array $params
     * @return VkResponse
    */
    public function reportComment(array $params): VkResponse {
        return $this->vk->send("wall.reportComment", $params);
    }
    
    /**
     * Позволяет пожаловаться на запись.
     * https://dev.vk.com/method/wall.reportPost
     * @param array $params
     * @return VkResponse
    */
    public function reportPost(array $params): VkResponse {
        return $this->vk->send("wall.reportPost", $params);
    }
    
    /**
     * Копирует объект на стену пользователя или сообщества.
     * https://dev.vk.com/method/wall.repost
     * @param array $params
     * @return VkResponse
    */
    public function repost(array $params): VkResponse {
        return $this->vk->send("wall.repost", $params);
    }
    
    /**
     * Восстанавливает удалённую запись на стене пользователя или сообщества.
     * https://dev.vk.com/method/wall.restore
     * @param array $params
     * @return VkResponse
    */
    public function restore(array $params): VkResponse {
        return $this->vk->send("wall.restore", $params);
    }
    
    /**
     * Восстанавливает удаленный комментарий к записи на стене.
     * https://dev.vk.com/method/wall.restoreComment
     * @param array $params
     * @return VkResponse
    */
    public function restoreComment(array $params): VkResponse {
        return $this->vk->send("wall.restoreComment", $params);
    }
    
    /**
     * Позволяет искать записи на стене в соответствии с заданными критериями.
     * https://dev.vk.com/method/wall.search
     * @param array $params
     * @return VkResponse
    */
    public function search(array $params): VkResponse {
        return $this->vk->send("wall.search", $params);
    }
    
    /**
     * Отменяет закрепление записи на стене.
     * https://dev.vk.com/method/wall.unpin
     * @param array $params
     * @return VkResponse
    */
    public function unpin(array $params): VkResponse {
        return $this->vk->send("wall.unpin", $params);
    }
    
}