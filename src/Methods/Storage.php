<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Storage extends BaseMethod {

    /**
     * Возвращает значение переменной, название которой передано в параметре `key`.
     * https://dev.vk.com/method/storage.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("storage.get", $params);
    }
    
    /**
     * Возвращает названия всех переменных.
     * https://dev.vk.com/method/storage.getKeys
     * @param array $params
     * @return VkResponse
    */
    public function getKeys(array $params): VkResponse {
        return $this->vk->send("storage.getKeys", $params);
    }
    
    /**
     * Сохраняет значение переменной, название которой передано в параметре `key`.
     * https://dev.vk.com/method/storage.set
     * @param array $params
     * @return VkResponse
    */
    public function set(array $params): VkResponse {
        return $this->vk->send("storage.set", $params);
    }
    
}