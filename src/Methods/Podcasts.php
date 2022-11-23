<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Podcasts extends BaseMethod {

    /**
     * 
     * https://dev.vk.com/method/podcasts.searchPodcast
     * @param array $params
     * @return VkResponse
    */
    public function searchPodcast(array $params): VkResponse {
        return $this->vk->send("podcasts.searchPodcast", $params);
    }
    
}