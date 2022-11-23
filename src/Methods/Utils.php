<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Utils extends BaseMethod {

    /**
     * Возвращает информацию о том, является ли внешняя ссылка заблокированной на сайте ВКонтакте.
     * https://dev.vk.com/method/utils.checkLink
     * @param array $params
     * @return VkResponse
    */
    public function checkLink(array $params): VkResponse {
        return $this->vk->send("utils.checkLink", $params);
    }
    
    /**
     * Удаляет сокращенную ссылку из списка пользователя.
     * https://dev.vk.com/method/utils.deleteFromLastShortened
     * @param array $params
     * @return VkResponse
    */
    public function deleteFromLastShortened(array $params): VkResponse {
        return $this->vk->send("utils.deleteFromLastShortened", $params);
    }
    
    /**
     * Получает список сокращённых ссылок для текущего пользователя.
     * https://dev.vk.com/method/utils.getLastShortenedLinks
     * @param array $params
     * @return VkResponse
    */
    public function getLastShortenedLinks(array $params): VkResponse {
        return $this->vk->send("utils.getLastShortenedLinks", $params);
    }
    
    /**
     * Возвращает статистику переходов по [сокращённой](utils.getShortLink) ссылке.
     * https://dev.vk.com/method/utils.getLinkStats
     * @param array $params
     * @return VkResponse
    */
    public function getLinkStats(array $params): VkResponse {
        return $this->vk->send("utils.getLinkStats", $params);
    }
    
    /**
     * Возвращает текущее время на сервере ВКонтакте в `unixtime`.
     * https://dev.vk.com/method/utils.getServerTime
     * @param array $params
     * @return VkResponse
    */
    public function getServerTime(array $params): VkResponse {
        return $this->vk->send("utils.getServerTime", $params);
    }
    
    /**
     * Позволяет получить URL, сокращённый с помощью vk.cc.
     * https://dev.vk.com/method/utils.getShortLink
     * @param array $params
     * @return VkResponse
    */
    public function getShortLink(array $params): VkResponse {
        return $this->vk->send("utils.getShortLink", $params);
    }
    
    /**
     * Определяет тип объекта (пользователь, сообщество, приложение) и его идентификатор по короткому имени `screen_name`.
     * https://dev.vk.com/method/utils.resolveScreenName
     * @param array $params
     * @return VkResponse
    */
    public function resolveScreenName(array $params): VkResponse {
        return $this->vk->send("utils.resolveScreenName", $params);
    }
    
}