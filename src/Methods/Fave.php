<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Fave extends BaseMethod {

    /**
     * Добавляет статью в закладки.
     * https://dev.vk.com/method/fave.addArticle
     * @param array $params
     * @return VkResponse
    */
    public function addArticle(array $params): VkResponse {
        return $this->vk->send("fave.addArticle", $params);
    }
    
    /**
     * Добавляет ссылку в закладки.
     * https://dev.vk.com/method/fave.addLink
     * @param array $params
     * @return VkResponse
    */
    public function addLink(array $params): VkResponse {
        return $this->vk->send("fave.addLink", $params);
    }
    
    /**
     * Добавляет сообщество или пользователя в закладки.
     * https://dev.vk.com/method/fave.addPage
     * @param array $params
     * @return VkResponse
    */
    public function addPage(array $params): VkResponse {
        return $this->vk->send("fave.addPage", $params);
    }
    
    /**
     * Добавляет запись со стены пользователя или сообщества в закладки.
     * https://dev.vk.com/method/fave.addPost
     * @param array $params
     * @return VkResponse
    */
    public function addPost(array $params): VkResponse {
        return $this->vk->send("fave.addPost", $params);
    }
    
    /**
     * Добавляет товар в закладки.
     * https://dev.vk.com/method/fave.addProduct
     * @param array $params
     * @return VkResponse
    */
    public function addProduct(array $params): VkResponse {
        return $this->vk->send("fave.addProduct", $params);
    }
    
    /**
     * Создаёт метку закладок.
     * https://dev.vk.com/method/fave.addTag
     * @param array $params
     * @return VkResponse
    */
    public function addTag(array $params): VkResponse {
        return $this->vk->send("fave.addTag", $params);
    }
    
    /**
     * Добавляет видеозапись в закладки.
     * https://dev.vk.com/method/fave.addVideo
     * @param array $params
     * @return VkResponse
    */
    public function addVideo(array $params): VkResponse {
        return $this->vk->send("fave.addVideo", $params);
    }
    
    /**
     * Редактирует метку.
     * https://dev.vk.com/method/fave.editTag
     * @param array $params
     * @return VkResponse
    */
    public function editTag(array $params): VkResponse {
        return $this->vk->send("fave.editTag", $params);
    }
    
    /**
     * Возвращает объекты, добавленные в закладки пользователя.
     * https://dev.vk.com/method/fave.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("fave.get", $params);
    }
    
    /**
     * Возвращает страницы пользователей и сообществ, добавленных в закладки.
     * https://dev.vk.com/method/fave.getPages
     * @param array $params
     * @return VkResponse
    */
    public function getPages(array $params): VkResponse {
        return $this->vk->send("fave.getPages", $params);
    }
    
    /**
     * Возвращает список меток в закладках.
     * https://dev.vk.com/method/fave.getTags
     * @param array $params
     * @return VkResponse
    */
    public function getTags(array $params): VkResponse {
        return $this->vk->send("fave.getTags", $params);
    }
    
    /**
     * Отмечает закладки как просмотренные.
     * https://dev.vk.com/method/fave.markSeen
     * @param array $params
     * @return VkResponse
    */
    public function markSeen(array $params): VkResponse {
        return $this->vk->send("fave.markSeen", $params);
    }
    
    /**
     * Удаляет статью из закладок.
     * https://dev.vk.com/method/fave.removeArticle
     * @param array $params
     * @return VkResponse
    */
    public function removeArticle(array $params): VkResponse {
        return $this->vk->send("fave.removeArticle", $params);
    }
    
    /**
     * Удаляет ссылку из списка закладок пользователя.
     * https://dev.vk.com/method/fave.removeLink
     * @param array $params
     * @return VkResponse
    */
    public function removeLink(array $params): VkResponse {
        return $this->vk->send("fave.removeLink", $params);
    }
    
    /**
     * Удаляет из закладок сообщество или страницу пользователя.
     * https://dev.vk.com/method/fave.removePage
     * @param array $params
     * @return VkResponse
    */
    public function removePage(array $params): VkResponse {
        return $this->vk->send("fave.removePage", $params);
    }
    
    /**
     * Удаляет из закладок запись на стене пользователя или сообщества.
     * https://dev.vk.com/method/fave.removePost
     * @param array $params
     * @return VkResponse
    */
    public function removePost(array $params): VkResponse {
        return $this->vk->send("fave.removePost", $params);
    }
    
    /**
     * Удаляет товар из закладок.
     * https://dev.vk.com/method/fave.removeProduct
     * @param array $params
     * @return VkResponse
    */
    public function removeProduct(array $params): VkResponse {
        return $this->vk->send("fave.removeProduct", $params);
    }
    
    /**
     * Удаляет метку закладок.
     * https://dev.vk.com/method/fave.removeTag
     * @param array $params
     * @return VkResponse
    */
    public function removeTag(array $params): VkResponse {
        return $this->vk->send("fave.removeTag", $params);
    }
    
    /**
     * Удаляет видеозапись из списка закладок.
     * https://dev.vk.com/method/fave.removeVideo
     * @param array $params
     * @return VkResponse
    */
    public function removeVideo(array $params): VkResponse {
        return $this->vk->send("fave.removeVideo", $params);
    }
    
    /**
     * Меняет порядок меток закладок в списке.
     * https://dev.vk.com/method/fave.reorderTags
     * @param array $params
     * @return VkResponse
    */
    public function reorderTags(array $params): VkResponse {
        return $this->vk->send("fave.reorderTags", $params);
    }
    
    /**
     * Устанавливает метку странице пользователя или сообщества.
     * https://dev.vk.com/method/fave.setPageTags
     * @param array $params
     * @return VkResponse
    */
    public function setPageTags(array $params): VkResponse {
        return $this->vk->send("fave.setPageTags", $params);
    }
    
    /**
     * Устанавливает метку выбранному объекту в списке закладок.
     * https://dev.vk.com/method/fave.setTags
     * @param array $params
     * @return VkResponse
    */
    public function setTags(array $params): VkResponse {
        return $this->vk->send("fave.setTags", $params);
    }
    
    /**
     * Устанавливает страницу пользователя или сообщества в топ закладок.
     * https://dev.vk.com/method/fave.trackPageInteraction
     * @param array $params
     * @return VkResponse
    */
    public function trackPageInteraction(array $params): VkResponse {
        return $this->vk->send("fave.trackPageInteraction", $params);
    }
    
}