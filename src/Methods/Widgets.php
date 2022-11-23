<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Widgets extends BaseMethod {

    /**
     * Получает список комментариев к странице, оставленных через Виджет комментариев.
     * https://dev.vk.com/method/widgets.getComments
     * @param array $params
     * @return VkResponse
    */
    public function getComments(array $params): VkResponse {
        return $this->vk->send("widgets.getComments", $params);
    }
    
    /**
     * Получает список страниц приложения/сайта, на которых установлен [Виджет комментариев](widgets/comments) или [«Мне нравится»](widgets/like).
     * https://dev.vk.com/method/widgets.getPages
     * @param array $params
     * @return VkResponse
    */
    public function getPages(array $params): VkResponse {
        return $this->vk->send("widgets.getPages", $params);
    }
    
}