<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class DownloadedGames extends BaseMethod {

    /**
     * 
     * https://dev.vk.com/method/downloadedGames.getPaidStatus
     * @param array $params
     * @return VkResponse
    */
    public function getPaidStatus(array $params): VkResponse {
        return $this->vk->send("downloadedGames.getPaidStatus", $params);
    }
    
}