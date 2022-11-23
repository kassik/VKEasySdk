<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Places extends BaseMethod {

    /**
     * Возвращает список отметок пользователей в местах согласно заданным параметрам.
     * https://dev.vk.com/method/places.getCheckins
     * @param array $params
     * @return VkResponse
    */
    public function getCheckins(array $params): VkResponse {
        return $this->vk->send("places.getCheckins", $params);
    }
    
}