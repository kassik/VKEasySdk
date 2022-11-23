<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Store extends BaseMethod {

    /**
     * Добавляет стикер в избранные.
     * https://dev.vk.com/method/store.addStickersToFavorite
     * @param array $params
     * @return VkResponse
    */
    public function addStickersToFavorite(array $params): VkResponse {
        return $this->vk->send("store.addStickersToFavorite", $params);
    }
    
    /**
     * Возвращает список избранных стикеров.
     * https://dev.vk.com/method/store.getFavoriteStickers
     * @param array $params
     * @return VkResponse
    */
    public function getFavoriteStickers(array $params): VkResponse {
        return $this->vk->send("store.getFavoriteStickers", $params);
    }
    
    /**
     * Возвращает список продуктов.
     * https://dev.vk.com/method/store.getProducts
     * @param array $params
     * @return VkResponse
    */
    public function getProducts(array $params): VkResponse {
        return $this->vk->send("store.getProducts", $params);
    }
    
    /**
     * Возвращает список ключевых слов для стикеров.
     * https://dev.vk.com/method/store.getStickersKeywords
     * @param array $params
     * @return VkResponse
    */
    public function getStickersKeywords(array $params): VkResponse {
        return $this->vk->send("store.getStickersKeywords", $params);
    }
    
    /**
     * Удаляет стикер из избранных.
     * https://dev.vk.com/method/store.removeStickersFromFavorite
     * @param array $params
     * @return VkResponse
    */
    public function removeStickersFromFavorite(array $params): VkResponse {
        return $this->vk->send("store.removeStickersFromFavorite", $params);
    }
    
}