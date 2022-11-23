<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Photos extends BaseMethod {

    /**
     * Подтверждает отметку на фотографии.
     * https://dev.vk.com/method/photos.confirmTag
     * @param array $params
     * @return VkResponse
    */
    public function confirmTag(array $params): VkResponse {
        return $this->vk->send("photos.confirmTag", $params);
    }
    
    /**
     * Позволяет скопировать фотографию в альбом "Сохраненные фотографии"
     * https://dev.vk.com/method/photos.copy
     * @param array $params
     * @return VkResponse
    */
    public function copy(array $params): VkResponse {
        return $this->vk->send("photos.copy", $params);
    }
    
    /**
     * Создает пустой альбом для фотографий.
     * https://dev.vk.com/method/photos.createAlbum
     * @param array $params
     * @return VkResponse
    */
    public function createAlbum(array $params): VkResponse {
        return $this->vk->send("photos.createAlbum", $params);
    }
    
    /**
     * Создает новый комментарий к фотографии.
     * https://dev.vk.com/method/photos.createComment
     * @param array $params
     * @return VkResponse
    */
    public function createComment(array $params): VkResponse {
        return $this->vk->send("photos.createComment", $params);
    }
    
    /**
     * Удаление фотографии на сайте.
     * https://dev.vk.com/method/photos.delete
     * @param array $params
     * @return VkResponse
    */
    public function delete(array $params): VkResponse {
        return $this->vk->send("photos.delete", $params);
    }
    
    /**
     * Удаляет указанный альбом для фотографий у текущего пользователя
     * https://dev.vk.com/method/photos.deleteAlbum
     * @param array $params
     * @return VkResponse
    */
    public function deleteAlbum(array $params): VkResponse {
        return $this->vk->send("photos.deleteAlbum", $params);
    }
    
    /**
     * Удаляет комментарий к фотографии.
     * https://dev.vk.com/method/photos.deleteComment
     * @param array $params
     * @return VkResponse
    */
    public function deleteComment(array $params): VkResponse {
        return $this->vk->send("photos.deleteComment", $params);
    }
    
    /**
     * Редактирует описание или геометку у фотографии.
     * https://dev.vk.com/method/photos.edit
     * @param array $params
     * @return VkResponse
    */
    public function edit(array $params): VkResponse {
        return $this->vk->send("photos.edit", $params);
    }
    
    /**
     * Редактирует данные альбома для фотографий.
     * https://dev.vk.com/method/photos.editAlbum
     * @param array $params
     * @return VkResponse
    */
    public function editAlbum(array $params): VkResponse {
        return $this->vk->send("photos.editAlbum", $params);
    }
    
    /**
     * Изменяет текст комментария к фотографии.
     * https://dev.vk.com/method/photos.editComment
     * @param array $params
     * @return VkResponse
    */
    public function editComment(array $params): VkResponse {
        return $this->vk->send("photos.editComment", $params);
    }
    
    /**
     * Возвращает список фотографий в альбоме.
     * https://dev.vk.com/method/photos.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("photos.get", $params);
    }
    
    /**
     * Возвращает список фотоальбомов пользователя или сообщества.
     * https://dev.vk.com/method/photos.getAlbums
     * @param array $params
     * @return VkResponse
    */
    public function getAlbums(array $params): VkResponse {
        return $this->vk->send("photos.getAlbums", $params);
    }
    
    /**
     * Возвращает количество доступных альбомов пользователя или сообщества.
     * https://dev.vk.com/method/photos.getAlbumsCount
     * @param array $params
     * @return VkResponse
    */
    public function getAlbumsCount(array $params): VkResponse {
        return $this->vk->send("photos.getAlbumsCount", $params);
    }
    
    /**
     * Возвращает все фотографии пользователя или сообщества в антихронологическом порядке.
     * https://dev.vk.com/method/photos.getAll
     * @param array $params
     * @return VkResponse
    */
    public function getAll(array $params): VkResponse {
        return $this->vk->send("photos.getAll", $params);
    }
    
    /**
     * Возвращает отсортированный в антихронологическом порядке список всех комментариев к конкретному альбому или ко всем альбомам пользователя.
     * https://dev.vk.com/method/photos.getAllComments
     * @param array $params
     * @return VkResponse
    */
    public function getAllComments(array $params): VkResponse {
        return $this->vk->send("photos.getAllComments", $params);
    }
    
    /**
     * Возвращает информацию о фотографиях по их идентификаторам.
     * https://dev.vk.com/method/photos.getById
     * @param array $params
     * @return VkResponse
    */
    public function getById(array $params): VkResponse {
        return $this->vk->send("photos.getById", $params);
    }
    
    /**
     * Позволяет получить адрес для [загрузки обложки чата](api/upload#Загрузка%20главной%20фотографии%20для%20чата).
     * https://dev.vk.com/method/photos.getChatUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getChatUploadServer(array $params): VkResponse {
        return $this->vk->send("photos.getChatUploadServer", $params);
    }
    
    /**
     * Возвращает список комментариев к фотографии.
     * https://dev.vk.com/method/photos.getComments
     * @param array $params
     * @return VkResponse
    */
    public function getComments(array $params): VkResponse {
        return $this->vk->send("photos.getComments", $params);
    }
    
    /**
     * 
     * https://dev.vk.com/method/photos.getMailUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getMailUploadServer(array $params): VkResponse {
        return $this->vk->send("photos.getMailUploadServer", $params);
    }
    
    /**
     * Возвращает адрес сервера для [загрузки﻿ фотографии подборки товаров](api/upload#Загрузка%20фотографии%20для%20товара) в сообществе.
     * https://dev.vk.com/method/photos.getMarketAlbumUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getMarketAlbumUploadServer(array $params): VkResponse {
        return $this->vk->send("photos.getMarketAlbumUploadServer", $params);
    }
    
    /**
     * Возвращает адрес сервера для [загрузки﻿ фотографии товара](api/upload#Загрузка%20фотографии%20для%20товара).
     * https://dev.vk.com/method/photos.getMarketUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getMarketUploadServer(array $params): VkResponse {
        return $this->vk->send("photos.getMarketUploadServer", $params);
    }
    
    /**
     * Возвращает адрес сервера для [загрузки﻿ фотографии в личное сообщение](api/upload#Загрузка%20фотографии%20в%20личное%20сообщение).
     * https://dev.vk.com/method/photos.getMessagesUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getMessagesUploadServer(array $params): VkResponse {
        return $this->vk->send("photos.getMessagesUploadServer", $params);
    }
    
    /**
     * Возвращает список фотографий, на которых есть непросмотренные отметки.
     * https://dev.vk.com/method/photos.getNewTags
     * @param array $params
     * @return VkResponse
    */
    public function getNewTags(array $params): VkResponse {
        return $this->vk->send("photos.getNewTags", $params);
    }
    
    /**
     * Получает адрес для [загрузки обложки сообщества](api/upload#Загрузка%20обложки%20сообщества).
     * https://dev.vk.com/method/photos.getOwnerCoverPhotoUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getOwnerCoverPhotoUploadServer(array $params): VkResponse {
        return $this->vk->send("photos.getOwnerCoverPhotoUploadServer", $params);
    }
    
    /**
     * Возвращает адрес сервера для [загрузки главной фотографии](api/upload#Загрузка%20главной%20фотографии%20пользователя%20или%20сообщества) на страницу пользователя или сообщества.
     * https://dev.vk.com/method/photos.getOwnerPhotoUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getOwnerPhotoUploadServer(array $params): VkResponse {
        return $this->vk->send("photos.getOwnerPhotoUploadServer", $params);
    }
    
    /**
     * Возвращает список фотографий со страницы пользователя или сообщества. 

Метод устарел, воспользуйтесь методом  с параметром `album_id` = `profile`.
     * https://dev.vk.com/method/photos.getProfile
     * @param array $params
     * @return VkResponse
    */
    public function getProfile(array $params): VkResponse {
        return $this->vk->send("photos.getProfile", $params);
    }
    
    /**
     * Возвращает список отметок на фотографии.
     * https://dev.vk.com/method/photos.getTags
     * @param array $params
     * @return VkResponse
    */
    public function getTags(array $params): VkResponse {
        return $this->vk->send("photos.getTags", $params);
    }
    
    /**
     * Возвращает адрес сервера для [загрузки фотографий](api/upload#Загрузка%20фотографий%20в%20альбом).
     * https://dev.vk.com/method/photos.getUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getUploadServer(array $params): VkResponse {
        return $this->vk->send("photos.getUploadServer", $params);
    }
    
    /**
     * Возвращает список фотографий, на которых отмечен пользователь
     * https://dev.vk.com/method/photos.getUserPhotos
     * @param array $params
     * @return VkResponse
    */
    public function getUserPhotos(array $params): VkResponse {
        return $this->vk->send("photos.getUserPhotos", $params);
    }
    
    /**
     * Возвращает адрес сервера для [загрузки﻿ фотографии на стену](api/upload#Загрузка%20фотографий%20на%20стену) пользователя или сообщества.
     * https://dev.vk.com/method/photos.getWallUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getWallUploadServer(array $params): VkResponse {
        return $this->vk->send("photos.getWallUploadServer", $params);
    }
    
    /**
     * Делает фотографию обложкой альбома.
     * https://dev.vk.com/method/photos.makeCover
     * @param array $params
     * @return VkResponse
    */
    public function makeCover(array $params): VkResponse {
        return $this->vk->send("photos.makeCover", $params);
    }
    
    /**
     * Переносит фотографию из одного альбома в другой.
     * https://dev.vk.com/method/photos.move
     * @param array $params
     * @return VkResponse
    */
    public function move(array $params): VkResponse {
        return $this->vk->send("photos.move", $params);
    }
    
    /**
     * Добавляет отметку на фотографию.
     * https://dev.vk.com/method/photos.putTag
     * @param array $params
     * @return VkResponse
    */
    public function putTag(array $params): VkResponse {
        return $this->vk->send("photos.putTag", $params);
    }
    
    /**
     * Удаляет отметку с фотографии.
     * https://dev.vk.com/method/photos.removeTag
     * @param array $params
     * @return VkResponse
    */
    public function removeTag(array $params): VkResponse {
        return $this->vk->send("photos.removeTag", $params);
    }
    
    /**
     * Меняет порядок альбома в списке альбомов пользователя.
     * https://dev.vk.com/method/photos.reorderAlbums
     * @param array $params
     * @return VkResponse
    */
    public function reorderAlbums(array $params): VkResponse {
        return $this->vk->send("photos.reorderAlbums", $params);
    }
    
    /**
     * Меняет порядок фотографии в списке фотографий альбома пользователя.
     * https://dev.vk.com/method/photos.reorderPhotos
     * @param array $params
     * @return VkResponse
    */
    public function reorderPhotos(array $params): VkResponse {
        return $this->vk->send("photos.reorderPhotos", $params);
    }
    
    /**
     * Позволяет пожаловаться на фотографию.
     * https://dev.vk.com/method/photos.report
     * @param array $params
     * @return VkResponse
    */
    public function report(array $params): VkResponse {
        return $this->vk->send("photos.report", $params);
    }
    
    /**
     * Позволяет пожаловаться на комментарий к фотографии.
     * https://dev.vk.com/method/photos.reportComment
     * @param array $params
     * @return VkResponse
    */
    public function reportComment(array $params): VkResponse {
        return $this->vk->send("photos.reportComment", $params);
    }
    
    /**
     * Восстанавливает удаленную фотографию.
     * https://dev.vk.com/method/photos.restore
     * @param array $params
     * @return VkResponse
    */
    public function restore(array $params): VkResponse {
        return $this->vk->send("photos.restore", $params);
    }
    
    /**
     * Восстанавливает удаленный комментарий к фотографии.
     * https://dev.vk.com/method/photos.restoreComment
     * @param array $params
     * @return VkResponse
    */
    public function restoreComment(array $params): VkResponse {
        return $this->vk->send("photos.restoreComment", $params);
    }
    
    /**
     * Сохраняет фотографии после успешной загрузки.
     * https://dev.vk.com/method/photos.save
     * @param array $params
     * @return VkResponse
    */
    public function save(array $params): VkResponse {
        return $this->vk->send("photos.save", $params);
    }
    
    /**
     * 
     * https://dev.vk.com/method/photos.saveMailPhoto
     * @param array $params
     * @return VkResponse
    */
    public function saveMailPhoto(array $params): VkResponse {
        return $this->vk->send("photos.saveMailPhoto", $params);
    }
    
    /**
     * Сохраняет фотографии после успешной загрузки на URI, полученный методом [photos.getMarketAlbumUploadServer](method/photos.getMarketAlbumUploadServer).
     * https://dev.vk.com/method/photos.saveMarketAlbumPhoto
     * @param array $params
     * @return VkResponse
    */
    public function saveMarketAlbumPhoto(array $params): VkResponse {
        return $this->vk->send("photos.saveMarketAlbumPhoto", $params);
    }
    
    /**
     * Сохраняет фотографии после успешной загрузки на URI, полученный методом .
     * https://dev.vk.com/method/photos.saveMarketPhoto
     * @param array $params
     * @return VkResponse
    */
    public function saveMarketPhoto(array $params): VkResponse {
        return $this->vk->send("photos.saveMarketPhoto", $params);
    }
    
    /**
     * Сохраняет фотографию после успешной загрузки на URI, полученный методом [photos.getMessagesUploadServer](method/photos.getMessagesUploadServer).
     * https://dev.vk.com/method/photos.saveMessagesPhoto
     * @param array $params
     * @return VkResponse
    */
    public function saveMessagesPhoto(array $params): VkResponse {
        return $this->vk->send("photos.saveMessagesPhoto", $params);
    }
    
    /**
     * Сохраняет изображение для обложки сообщества после [успешной загрузки](api/upload#Загрузка%20обложки%20сообщества).
     * https://dev.vk.com/method/photos.saveOwnerCoverPhoto
     * @param array $params
     * @return VkResponse
    */
    public function saveOwnerCoverPhoto(array $params): VkResponse {
        return $this->vk->send("photos.saveOwnerCoverPhoto", $params);
    }
    
    /**
     * Позволяет сохранить главную фотографию пользователя или сообщества.
     * https://dev.vk.com/method/photos.saveOwnerPhoto
     * @param array $params
     * @return VkResponse
    */
    public function saveOwnerPhoto(array $params): VkResponse {
        return $this->vk->send("photos.saveOwnerPhoto", $params);
    }
    
    /**
     * Сохраняет фотографии после успешной загрузки на URI, полученный методом [photos.getWallUploadServer](method/photos.getWallUploadServer).
     * https://dev.vk.com/method/photos.saveWallPhoto
     * @param array $params
     * @return VkResponse
    */
    public function saveWallPhoto(array $params): VkResponse {
        return $this->vk->send("photos.saveWallPhoto", $params);
    }
    
    /**
     * Осуществляет поиск изображений по местоположению или описанию.
     * https://dev.vk.com/method/photos.search
     * @param array $params
     * @return VkResponse
    */
    public function search(array $params): VkResponse {
        return $this->vk->send("photos.search", $params);
    }
    
}