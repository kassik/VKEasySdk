<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Apps extends BaseMethod {

    /**
     * Удаляет все уведомления о запросах, отправленных из текущего приложения.
     * https://dev.vk.com/method/apps.deleteAppRequests
     * @param array $params
     * @return VkResponse
    */
    public function deleteAppRequests(array $params): VkResponse {
        return $this->vk->send("apps.deleteAppRequests", $params);
    }
    
    /**
     * Возвращает данные о запрошенном приложении.
     * https://dev.vk.com/method/apps.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("apps.get", $params);
    }
    
    /**
     * Возвращает список приложений, доступных для пользователей сайта через каталог приложений.
     * https://dev.vk.com/method/apps.getCatalog
     * @param array $params
     * @return VkResponse
    */
    public function getCatalog(array $params): VkResponse {
        return $this->vk->send("apps.getCatalog", $params);
    }
    
    /**
     * Создает список друзей, который будет использоваться при отправке пользователем приглашений в приложение и игровых запросов.
     * https://dev.vk.com/method/apps.getFriendsList
     * @param array $params
     * @return VkResponse
    */
    public function getFriendsList(array $params): VkResponse {
        return $this->vk->send("apps.getFriendsList", $params);
    }
    
    /**
     * Возвращает рейтинг пользователей в игре.
     * https://dev.vk.com/method/apps.getLeaderboard
     * @param array $params
     * @return VkResponse
    */
    public function getLeaderboard(array $params): VkResponse {
        return $this->vk->send("apps.getLeaderboard", $params);
    }
    
    /**
     * 
     * https://dev.vk.com/method/apps.getMiniAppPolicies
     * @param array $params
     * @return VkResponse
    */
    public function getMiniAppPolicies(array $params): VkResponse {
        return $this->vk->send("apps.getMiniAppPolicies", $params);
    }
    
    /**
     * 
     * https://dev.vk.com/method/apps.getScopes
     * @param array $params
     * @return VkResponse
    */
    public function getScopes(array $params): VkResponse {
        return $this->vk->send("apps.getScopes", $params);
    }
    
    /**
     * Метод возвращает количество очков пользователя в этой игре.
     * https://dev.vk.com/method/apps.getScore
     * @param array $params
     * @return VkResponse
    */
    public function getScore(array $params): VkResponse {
        return $this->vk->send("apps.getScore", $params);
    }
    
    /**
     * Проверить есть ли у пользователя подарок в игре.
     * https://dev.vk.com/method/apps.promoHasActiveGift
     * @param array $params
     * @return VkResponse
    */
    public function promoHasActiveGift(array $params): VkResponse {
        return $this->vk->send("apps.promoHasActiveGift", $params);
    }
    
    /**
     * Использовать подарок, полученный пользователем в промо-акции.
     * https://dev.vk.com/method/apps.promoUseGift
     * @param array $params
     * @return VkResponse
    */
    public function promoUseGift(array $params): VkResponse {
        return $this->vk->send("apps.promoUseGift", $params);
    }
    
    /**
     * Позволяет отправить запрос другому пользователю в приложении, использующем авторизацию ВКонтакте.
     * https://dev.vk.com/method/apps.sendRequest
     * @param array $params
     * @return VkResponse
    */
    public function sendRequest(array $params): VkResponse {
        return $this->vk->send("apps.sendRequest", $params);
    }
    
}