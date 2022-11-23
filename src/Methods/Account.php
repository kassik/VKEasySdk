<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Account extends BaseMethod {

    /**
     * Добавляет пользователя или группу в черный список.
     * https://dev.vk.com/method/account.ban
     * @param array $params
     * @return VkResponse
    */
    public function ban(array $params): VkResponse {
        return $this->vk->send("account.ban", $params);
    }
    
    /**
     * Позволяет сменить пароль пользователя после успешного восстановления доступа к аккаунту через СМС, используя метод [`auth.restore`](method/auth.restore).
     * https://dev.vk.com/method/account.changePassword
     * @param array $params
     * @return VkResponse
    */
    public function changePassword(array $params): VkResponse {
        return $this->vk->send("account.changePassword", $params);
    }
    
    /**
     * Возвращает список активных рекламных предложений (офферов), выполнив которые, пользователь сможет получить соответствующее количество голосов на свой счёт внутри приложения.
     * https://dev.vk.com/method/account.getActiveOffers
     * @param array $params
     * @return VkResponse
    */
    public function getActiveOffers(array $params): VkResponse {
        return $this->vk->send("account.getActiveOffers", $params);
    }
    
    /**
     * Получает настройки текущего пользователя в данном приложении.
     * https://dev.vk.com/method/account.getAppPermissions
     * @param array $params
     * @return VkResponse
    */
    public function getAppPermissions(array $params): VkResponse {
        return $this->vk->send("account.getAppPermissions", $params);
    }
    
    /**
     * Возвращает список пользователей, находящихся в черном списке.
     * https://dev.vk.com/method/account.getBanned
     * @param array $params
     * @return VkResponse
    */
    public function getBanned(array $params): VkResponse {
        return $this->vk->send("account.getBanned", $params);
    }
    
    /**
     * Возвращает ненулевые значения счетчиков пользователя.
     * https://dev.vk.com/method/account.getCounters
     * @param array $params
     * @return VkResponse
    */
    public function getCounters(array $params): VkResponse {
        return $this->vk->send("account.getCounters", $params);
    }
    
    /**
     * Возвращает информацию о текущем аккаунте.
     * https://dev.vk.com/method/account.getInfo
     * @param array $params
     * @return VkResponse
    */
    public function getInfo(array $params): VkResponse {
        return $this->vk->send("account.getInfo", $params);
    }
    
    /**
     * Возвращает информацию о текущем профиле.
     * https://dev.vk.com/method/account.getProfileInfo
     * @param array $params
     * @return VkResponse
    */
    public function getProfileInfo(array $params): VkResponse {
        return $this->vk->send("account.getProfileInfo", $params);
    }
    
    /**
     * Позволяет получать настройки Push-уведомлений.
     * https://dev.vk.com/method/account.getPushSettings
     * @param array $params
     * @return VkResponse
    */
    public function getPushSettings(array $params): VkResponse {
        return $this->vk->send("account.getPushSettings", $params);
    }
    
    /**
     * Позволяет искать пользователей ВКонтакте, используя телефонные номера, email-адреса, и идентификаторы пользователей в других сервисах. Найденные пользователи могут быть также в дальнейшем получены методом [`friends.getSuggestions`](method/friends.getSuggestions).
     * https://dev.vk.com/method/account.lookupContacts
     * @param array $params
     * @return VkResponse
    */
    public function lookupContacts(array $params): VkResponse {
        return $this->vk->send("account.lookupContacts", $params);
    }
    
    /**
     * Подписывает устройство на базе iOS, Android, Windows Phone или Mac на получение push-уведомлений.
     * https://dev.vk.com/method/account.registerDevice
     * @param array $params
     * @return VkResponse
    */
    public function registerDevice(array $params): VkResponse {
        return $this->vk->send("account.registerDevice", $params);
    }
    
    /**
     * Редактирует информацию текущего профиля.
     * https://dev.vk.com/method/account.saveProfileInfo
     * @param array $params
     * @return VkResponse
    */
    public function saveProfileInfo(array $params): VkResponse {
        return $this->vk->send("account.saveProfileInfo", $params);
    }
    
    /**
     * Позволяет редактировать информацию о текущем аккаунте.
     * https://dev.vk.com/method/account.setInfo
     * @param array $params
     * @return VkResponse
    */
    public function setInfo(array $params): VkResponse {
        return $this->vk->send("account.setInfo", $params);
    }
    
    /**
     * Устанавливает короткое название приложения (до 17 символов), которое выводится пользователю в левом меню.
     * https://dev.vk.com/method/account.setNameInMenu
     * @param array $params
     * @return VkResponse
    */
    public function setNameInMenu(array $params): VkResponse {
        return $this->vk->send("account.setNameInMenu", $params);
    }
    
    /**
     * Помечает текущего пользователя как `offline` (только в текущем приложении).
     * https://dev.vk.com/method/account.setOffline
     * @param array $params
     * @return VkResponse
    */
    public function setOffline(array $params): VkResponse {
        return $this->vk->send("account.setOffline", $params);
    }
    
    /**
     * Помечает текущего пользователя как `online` на 5 минут.
     * https://dev.vk.com/method/account.setOnline
     * @param array $params
     * @return VkResponse
    */
    public function setOnline(array $params): VkResponse {
        return $this->vk->send("account.setOnline", $params);
    }
    
    /**
     * Изменяет настройку push-уведомлений.
     * https://dev.vk.com/method/account.setPushSettings
     * @param array $params
     * @return VkResponse
    */
    public function setPushSettings(array $params): VkResponse {
        return $this->vk->send("account.setPushSettings", $params);
    }
    
    /**
     * Отключает push-уведомления на заданный промежуток времени.
     * https://dev.vk.com/method/account.setSilenceMode
     * @param array $params
     * @return VkResponse
    */
    public function setSilenceMode(array $params): VkResponse {
        return $this->vk->send("account.setSilenceMode", $params);
    }
    
    /**
     * Удаляет пользователя или группу из черного списка.
     * https://dev.vk.com/method/account.unban
     * @param array $params
     * @return VkResponse
    */
    public function unban(array $params): VkResponse {
        return $this->vk->send("account.unban", $params);
    }
    
    /**
     * Отписывает устройство от Push уведомлений.
     * https://dev.vk.com/method/account.unregisterDevice
     * @param array $params
     * @return VkResponse
    */
    public function unregisterDevice(array $params): VkResponse {
        return $this->vk->send("account.unregisterDevice", $params);
    }
    
}