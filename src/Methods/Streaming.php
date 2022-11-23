<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Streaming extends BaseMethod {

    /**
     * Позволяет получить данные для подключения к [Streaming API](api/streaming/getting-started).
     * https://dev.vk.com/method/streaming.getServerUrl
     * @param array $params
     * @return VkResponse
    */
    public function getServerUrl(array $params): VkResponse {
        return $this->vk->send("streaming.getServerUrl", $params);
    }
    
    /**
     * Позволяет получить значение порога для [Streaming API](api/streaming/getting-started).
     * https://dev.vk.com/method/streaming.getSettings
     * @param array $params
     * @return VkResponse
    */
    public function getSettings(array $params): VkResponse {
        return $this->vk->send("streaming.getSettings", $params);
    }
    
    /**
     * Позволяет получить статистику для подготовленных и доставленных событий [Streaming API](api/streaming/getting-started).
     * https://dev.vk.com/method/streaming.getStats
     * @param array $params
     * @return VkResponse
    */
    public function getStats(array $params): VkResponse {
        return $this->vk->send("streaming.getStats", $params);
    }
    
    /**
     * Позволяет получить основу слова.
     * https://dev.vk.com/method/streaming.getStem
     * @param array $params
     * @return VkResponse
    */
    public function getStem(array $params): VkResponse {
        return $this->vk->send("streaming.getStem", $params);
    }
    
    /**
     * Позволяет задать значение порога для [Streaming API](api/streaming/getting-started).
     * https://dev.vk.com/method/streaming.setSettings
     * @param array $params
     * @return VkResponse
    */
    public function setSettings(array $params): VkResponse {
        return $this->vk->send("streaming.setSettings", $params);
    }
    
}