<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Video extends BaseMethod {

    /**
     * Добавляет видеозапись в список пользователя.
     * https://dev.vk.com/method/video.add
     * @param array $params
     * @return VkResponse
    */
    public function add(array $params): VkResponse {
        return $this->vk->send("video.add", $params);
    }
    
    /**
     * Создает пустой альбом видеозаписей.
     * https://dev.vk.com/method/video.addAlbum
     * @param array $params
     * @return VkResponse
    */
    public function addAlbum(array $params): VkResponse {
        return $this->vk->send("video.addAlbum", $params);
    }
    
    /**
     * Позволяет добавить видеозапись в альбом.
     * https://dev.vk.com/method/video.addToAlbum
     * @param array $params
     * @return VkResponse
    */
    public function addToAlbum(array $params): VkResponse {
        return $this->vk->send("video.addToAlbum", $params);
    }
    
    /**
     * Cоздает новый комментарий к видеозаписи
     * https://dev.vk.com/method/video.createComment
     * @param array $params
     * @return VkResponse
    */
    public function createComment(array $params): VkResponse {
        return $this->vk->send("video.createComment", $params);
    }
    
    /**
     * Удаляет видеозапись со страницы пользователя.
     * https://dev.vk.com/method/video.delete
     * @param array $params
     * @return VkResponse
    */
    public function delete(array $params): VkResponse {
        return $this->vk->send("video.delete", $params);
    }
    
    /**
     * Удаляет альбом видеозаписей.
     * https://dev.vk.com/method/video.deleteAlbum
     * @param array $params
     * @return VkResponse
    */
    public function deleteAlbum(array $params): VkResponse {
        return $this->vk->send("video.deleteAlbum", $params);
    }
    
    /**
     * Удаляет комментарий к видеозаписи.
     * https://dev.vk.com/method/video.deleteComment
     * @param array $params
     * @return VkResponse
    */
    public function deleteComment(array $params): VkResponse {
        return $this->vk->send("video.deleteComment", $params);
    }
    
    /**
     * Редактирует данные видеозаписи.
     * https://dev.vk.com/method/video.edit
     * @param array $params
     * @return VkResponse
    */
    public function edit(array $params): VkResponse {
        return $this->vk->send("video.edit", $params);
    }
    
    /**
     * Редактирует альбом с видео.
     * https://dev.vk.com/method/video.editAlbum
     * @param array $params
     * @return VkResponse
    */
    public function editAlbum(array $params): VkResponse {
        return $this->vk->send("video.editAlbum", $params);
    }
    
    /**
     * Изменяет текст комментария к видеозаписи.
     * https://dev.vk.com/method/video.editComment
     * @param array $params
     * @return VkResponse
    */
    public function editComment(array $params): VkResponse {
        return $this->vk->send("video.editComment", $params);
    }
    
    /**
     * Возвращает информацию о видеозаписях.
     * https://dev.vk.com/method/video.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("video.get", $params);
    }
    
    /**
     * Позволяет получить информацию об альбоме с видео.
     * https://dev.vk.com/method/video.getAlbumById
     * @param array $params
     * @return VkResponse
    */
    public function getAlbumById(array $params): VkResponse {
        return $this->vk->send("video.getAlbumById", $params);
    }
    
    /**
     * Возвращает список альбомов видеозаписей пользователя или сообщества.
     * https://dev.vk.com/method/video.getAlbums
     * @param array $params
     * @return VkResponse
    */
    public function getAlbums(array $params): VkResponse {
        return $this->vk->send("video.getAlbums", $params);
    }
    
    /**
     * Возвращает список альбомов, в которых находится видеозапись.
     * https://dev.vk.com/method/video.getAlbumsByVideo
     * @param array $params
     * @return VkResponse
    */
    public function getAlbumsByVideo(array $params): VkResponse {
        return $this->vk->send("video.getAlbumsByVideo", $params);
    }
    
    /**
     * Возвращает список комментариев к видеозаписи.
     * https://dev.vk.com/method/video.getComments
     * @param array $params
     * @return VkResponse
    */
    public function getComments(array $params): VkResponse {
        return $this->vk->send("video.getComments", $params);
    }
    
    /**
     * Возвращает список видеозаписей, на которых есть непросмотренные отметки.
     * https://dev.vk.com/method/video.getNewTags
     * @param array $params
     * @return VkResponse
    */
    public function getNewTags(array $params): VkResponse {
        return $this->vk->send("video.getNewTags", $params);
    }
    
    /**
     * Возвращает список отметок на видеозаписи.
     * https://dev.vk.com/method/video.getTags
     * @param array $params
     * @return VkResponse
    */
    public function getTags(array $params): VkResponse {
        return $this->vk->send("video.getTags", $params);
    }
    
    /**
     * Перемещает видеозаписи в альбом.
     * https://dev.vk.com/method/video.moveToAlbum
     * @param array $params
     * @return VkResponse
    */
    public function moveToAlbum(array $params): VkResponse {
        return $this->vk->send("video.moveToAlbum", $params);
    }
    
    /**
     * Добавляет отметку на видеозапись.
     * https://dev.vk.com/method/video.putTag
     * @param array $params
     * @return VkResponse
    */
    public function putTag(array $params): VkResponse {
        return $this->vk->send("video.putTag", $params);
    }
    
    /**
     * Позволяет убрать видеозапись из альбома.
     * https://dev.vk.com/method/video.removeFromAlbum
     * @param array $params
     * @return VkResponse
    */
    public function removeFromAlbum(array $params): VkResponse {
        return $this->vk->send("video.removeFromAlbum", $params);
    }
    
    /**
     * Удаляет отметку с видеозаписи.
     * https://dev.vk.com/method/video.removeTag
     * @param array $params
     * @return VkResponse
    */
    public function removeTag(array $params): VkResponse {
        return $this->vk->send("video.removeTag", $params);
    }
    
    /**
     * Позволяет изменить порядок альбомов с видео.
     * https://dev.vk.com/method/video.reorderAlbums
     * @param array $params
     * @return VkResponse
    */
    public function reorderAlbums(array $params): VkResponse {
        return $this->vk->send("video.reorderAlbums", $params);
    }
    
    /**
     * Позволяет переместить видеозапись в альбоме.
     * https://dev.vk.com/method/video.reorderVideos
     * @param array $params
     * @return VkResponse
    */
    public function reorderVideos(array $params): VkResponse {
        return $this->vk->send("video.reorderVideos", $params);
    }
    
    /**
     * Позволяет пожаловаться на видеозапись.
     * https://dev.vk.com/method/video.report
     * @param array $params
     * @return VkResponse
    */
    public function report(array $params): VkResponse {
        return $this->vk->send("video.report", $params);
    }
    
    /**
     * Позволяет пожаловаться на комментарий к видеозаписи.
     * https://dev.vk.com/method/video.reportComment
     * @param array $params
     * @return VkResponse
    */
    public function reportComment(array $params): VkResponse {
        return $this->vk->send("video.reportComment", $params);
    }
    
    /**
     * Восстанавливает удаленную видеозапись.
     * https://dev.vk.com/method/video.restore
     * @param array $params
     * @return VkResponse
    */
    public function restore(array $params): VkResponse {
        return $this->vk->send("video.restore", $params);
    }
    
    /**
     * Восстанавливает удаленный комментарий к видеозаписи.
     * https://dev.vk.com/method/video.restoreComment
     * @param array $params
     * @return VkResponse
    */
    public function restoreComment(array $params): VkResponse {
        return $this->vk->send("video.restoreComment", $params);
    }
    
    /**
     * Возвращает адрес сервера, необходимый для [загрузки](api/upload), и данные видеозаписи.
     * https://dev.vk.com/method/video.save
     * @param array $params
     * @return VkResponse
    */
    public function save(array $params): VkResponse {
        return $this->vk->send("video.save", $params);
    }
    
    /**
     * Возвращает список видеозаписей в соответствии с заданным критерием поиска.
     * https://dev.vk.com/method/video.search
     * @param array $params
     * @return VkResponse
    */
    public function search(array $params): VkResponse {
        return $this->vk->send("video.search", $params);
    }
    
}