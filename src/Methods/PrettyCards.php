<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class PrettyCards extends BaseMethod {

    /**
     * Создаёт карточку карусели.
     * https://dev.vk.com/method/prettyCards.create
     * @param array $params
     * @return VkResponse
    */
    public function create(array $params): VkResponse {
        return $this->vk->send("prettyCards.create", $params);
    }
    
    /**
     * Удаляет карточку.
     * https://dev.vk.com/method/prettyCards.delete
     * @param array $params
     * @return VkResponse
    */
    public function delete(array $params): VkResponse {
        return $this->vk->send("prettyCards.delete", $params);
    }
    
    /**
     * Редактирует карточку карусели.
     * https://dev.vk.com/method/prettyCards.edit
     * @param array $params
     * @return VkResponse
    */
    public function edit(array $params): VkResponse {
        return $this->vk->send("prettyCards.edit", $params);
    }
    
    /**
     * Возвращает неиспользованные карточки владельца.
     * https://dev.vk.com/method/prettyCards.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("prettyCards.get", $params);
    }
    
    /**
     * Возвращает информацию о карточке.
     * https://dev.vk.com/method/prettyCards.getById
     * @param array $params
     * @return VkResponse
    */
    public function getById(array $params): VkResponse {
        return $this->vk->send("prettyCards.getById", $params);
    }
    
    /**
     * Возвращает URL для загрузки фотографии для карточки.
     * https://dev.vk.com/method/prettyCards.getUploadURL
     * @param array $params
     * @return VkResponse
    */
    public function getUploadURL(array $params): VkResponse {
        return $this->vk->send("prettyCards.getUploadURL", $params);
    }
    
}