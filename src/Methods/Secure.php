<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Secure extends BaseMethod {

    /**
     * Добавляет информацию о достижениях пользователя в приложении.
     * https://dev.vk.com/method/secure.addAppEvent
     * @param array $params
     * @return VkResponse
    */
    public function addAppEvent(array $params): VkResponse {
        return $this->vk->send("secure.addAppEvent", $params);
    }
    
    /**
     * Позволяет проверять валидность ключа доступа пользователя в **iFrame**, **VK Mini Apps** и **Standalone**-приложениях с помощью передаваемого в приложения параметра `access_token`.
     * https://dev.vk.com/method/secure.checkToken
     * @param array $params
     * @return VkResponse
    */
    public function checkToken(array $params): VkResponse {
        return $this->vk->send("secure.checkToken", $params);
    }
    
    /**
     * Возвращает платежный баланс (счет) приложения в сотых долях голоса.
     * https://dev.vk.com/method/secure.getAppBalance
     * @param array $params
     * @return VkResponse
    */
    public function getAppBalance(array $params): VkResponse {
        return $this->vk->send("secure.getAppBalance", $params);
    }
    
    /**
     * Выводит список SMS-уведомлений, отосланных приложением с помощью метода [secure.sendSMSNotification](method/secure.sendSMSNotification).
     * https://dev.vk.com/method/secure.getSMSHistory
     * @param array $params
     * @return VkResponse
    */
    public function getSMSHistory(array $params): VkResponse {
        return $this->vk->send("secure.getSMSHistory", $params);
    }
    
    /**
     * Выводит историю транзакций по переводу голосов между пользователями и приложением.
     * https://dev.vk.com/method/secure.getTransactionsHistory
     * @param array $params
     * @return VkResponse
    */
    public function getTransactionsHistory(array $params): VkResponse {
        return $this->vk->send("secure.getTransactionsHistory", $params);
    }
    
    /**
     * Возвращает ранее выставленный игровой уровень одного или нескольких пользователей в приложении.
     * https://dev.vk.com/method/secure.getUserLevel
     * @param array $params
     * @return VkResponse
    */
    public function getUserLevel(array $params): VkResponse {
        return $this->vk->send("secure.getUserLevel", $params);
    }
    
    /**
     * Выдает пользователю стикер и открывает игровое достижение.
     * https://dev.vk.com/method/secure.giveEventSticker
     * @param array $params
     * @return VkResponse
    */
    public function giveEventSticker(array $params): VkResponse {
        return $this->vk->send("secure.giveEventSticker", $params);
    }
    
    /**
     * Отправляет уведомление пользователю.
     * https://dev.vk.com/method/secure.sendNotification
     * @param array $params
     * @return VkResponse
    */
    public function sendNotification(array $params): VkResponse {
        return $this->vk->send("secure.sendNotification", $params);
    }
    
    /**
     * Отправляет **SMS**-уведомление на мобильный телефон пользователя.
     * https://dev.vk.com/method/secure.sendSMSNotification
     * @param array $params
     * @return VkResponse
    */
    public function sendSMSNotification(array $params): VkResponse {
        return $this->vk->send("secure.sendSMSNotification", $params);
    }
    
    /**
     * Устанавливает счетчик, который выводится пользователю жирным шрифтом в левом меню.
     * https://dev.vk.com/method/secure.setCounter
     * @param array $params
     * @return VkResponse
    */
    public function setCounter(array $params): VkResponse {
        return $this->vk->send("secure.setCounter", $params);
    }
    
    /**
     * Устанавливает игровой уровень пользователя в приложении, который смогут увидеть его друзья.
     * https://dev.vk.com/method/secure.setUserLevel
     * @param array $params
     * @return VkResponse
    */
    public function setUserLevel(array $params): VkResponse {
        return $this->vk->send("secure.setUserLevel", $params);
    }
    
}