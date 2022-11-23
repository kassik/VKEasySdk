<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Execute extends BaseMethod {

    /**
     * Добавляет администраторов и/или наблюдателей в рекламный кабинет.
     * https://dev.vk.com/method/ads.addOfficeUsers
     * @param string $code
     * @return VkResponse
    */
    public function run(string $code): VkResponse {
        $params['code'] = $code;
        return $this->vk->send("execute", $params);
    }

}