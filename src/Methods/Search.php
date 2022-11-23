<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Search extends BaseMethod {

    /**
     * Метод позволяет получить результаты быстрого поиска по произвольной подстроке. 
     * https://dev.vk.com/method/search.getHints
     * @param array $params
     * @return VkResponse
    */
    public function getHints(array $params): VkResponse {
        return $this->vk->send("search.getHints", $params);
    }
    
}