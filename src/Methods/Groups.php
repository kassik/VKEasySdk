<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Groups extends BaseMethod {

    /**
     * Позволяет добавить адрес в сообщество.
Список адресов может быть получен методом [groups.getAddresses](method/groups.getAddresses).

> Для того, чтобы воспользоваться этим методом, Вы должны быть администратором сообщества.
     * https://dev.vk.com/method/groups.addAddress
     * @param array $params
     * @return VkResponse
    */
    public function addAddress(array $params): VkResponse {
        return $this->vk->send("groups.addAddress", $params);
    }
    
    /**
     * Добавляет сервер для [Callback API](api/callback/getting-started) в сообщество.
     * https://dev.vk.com/method/groups.addCallbackServer
     * @param array $params
     * @return VkResponse
    */
    public function addCallbackServer(array $params): VkResponse {
        return $this->vk->send("groups.addCallbackServer", $params);
    }
    
    /**
     * Позволяет добавлять ссылки в сообщество.
     * https://dev.vk.com/method/groups.addLink
     * @param array $params
     * @return VkResponse
    */
    public function addLink(array $params): VkResponse {
        return $this->vk->send("groups.addLink", $params);
    }
    
    /**
     * Позволяет одобрить заявку в группу от пользователя.
     * https://dev.vk.com/method/groups.approveRequest
     * @param array $params
     * @return VkResponse
    */
    public function approveRequest(array $params): VkResponse {
        return $this->vk->send("groups.approveRequest", $params);
    }
    
    /**
     * Добавляет пользователя или группу в черный список сообщества.
     * https://dev.vk.com/method/groups.ban
     * @param array $params
     * @return VkResponse
    */
    public function ban(array $params): VkResponse {
        return $this->vk->send("groups.ban", $params);
    }
    
    /**
     * Создает новое сообщество.
     * https://dev.vk.com/method/groups.create
     * @param array $params
     * @return VkResponse
    */
    public function create(array $params): VkResponse {
        return $this->vk->send("groups.create", $params);
    }
    
    /**
     * Удаляет адрес сообщества.
     * https://dev.vk.com/method/groups.deleteAddress
     * @param array $params
     * @return VkResponse
    */
    public function deleteAddress(array $params): VkResponse {
        return $this->vk->send("groups.deleteAddress", $params);
    }
    
    /**
     * Удаляет сервер для [Callback API](api/callback/getting-started) из сообщества.
     * https://dev.vk.com/method/groups.deleteCallbackServer
     * @param array $params
     * @return VkResponse
    */
    public function deleteCallbackServer(array $params): VkResponse {
        return $this->vk->send("groups.deleteCallbackServer", $params);
    }
    
    /**
     * Позволяет удалить ссылки из сообщества.
     * https://dev.vk.com/method/groups.deleteLink
     * @param array $params
     * @return VkResponse
    */
    public function deleteLink(array $params): VkResponse {
        return $this->vk->send("groups.deleteLink", $params);
    }
    
    /**
     * Выключает статус «онлайн» в сообществе.
     * https://dev.vk.com/method/groups.disableOnline
     * @param array $params
     * @return VkResponse
    */
    public function disableOnline(array $params): VkResponse {
        return $this->vk->send("groups.disableOnline", $params);
    }
    
    /**
     * Редактирует сообщество.
     * https://dev.vk.com/method/groups.edit
     * @param array $params
     * @return VkResponse
    */
    public function edit(array $params): VkResponse {
        return $this->vk->send("groups.edit", $params);
    }
    
    /**
     * Позволяет отредактировать адрес в сообществе.
Список адресов может быть получен методом [groups.getAddresses](method/groups.getAddresses).

> Для того, чтобы воспользоваться этим методом, Вы должны быть администратором сообщества.
     * https://dev.vk.com/method/groups.editAddress
     * @param array $params
     * @return VkResponse
    */
    public function editAddress(array $params): VkResponse {
        return $this->vk->send("groups.editAddress", $params);
    }
    
    /**
     * Редактирует данные сервера для [Callback API](api/callback/getting-started) в сообществе.
     * https://dev.vk.com/method/groups.editCallbackServer
     * @param array $params
     * @return VkResponse
    */
    public function editCallbackServer(array $params): VkResponse {
        return $this->vk->send("groups.editCallbackServer", $params);
    }
    
    /**
     * Позволяет редактировать ссылки в сообществе.
     * https://dev.vk.com/method/groups.editLink
     * @param array $params
     * @return VkResponse
    */
    public function editLink(array $params): VkResponse {
        return $this->vk->send("groups.editLink", $params);
    }
    
    /**
     * Позволяет назначить/разжаловать руководителя в сообществе или изменить уровень его полномочий.
     * https://dev.vk.com/method/groups.editManager
     * @param array $params
     * @return VkResponse
    */
    public function editManager(array $params): VkResponse {
        return $this->vk->send("groups.editManager", $params);
    }
    
    /**
     * Позволяет редактировать информацию о месте группы.
     * https://dev.vk.com/method/groups.editPlace
     * @param array $params
     * @return VkResponse
    */
    public function editPlace(array $params): VkResponse {
        return $this->vk->send("groups.editPlace", $params);
    }
    
    /**
     * Включает статус «онлайн» в сообществе.
     * https://dev.vk.com/method/groups.enableOnline
     * @param array $params
     * @return VkResponse
    */
    public function enableOnline(array $params): VkResponse {
        return $this->vk->send("groups.enableOnline", $params);
    }
    
    /**
     * Возвращает список сообществ указанного пользователя.
     * https://dev.vk.com/method/groups.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("groups.get", $params);
    }
    
    /**
     * Возвращает адрес указанного сообщества.
     * https://dev.vk.com/method/groups.getAddresses
     * @param array $params
     * @return VkResponse
    */
    public function getAddresses(array $params): VkResponse {
        return $this->vk->send("groups.getAddresses", $params);
    }
    
    /**
     * Возвращает список забаненных пользователей и сообществ в сообществе.
     * https://dev.vk.com/method/groups.getBanned
     * @param array $params
     * @return VkResponse
    */
    public function getBanned(array $params): VkResponse {
        return $this->vk->send("groups.getBanned", $params);
    }
    
    /**
     * Возвращает информацию о заданном сообществе или о нескольких сообществах.
     * https://dev.vk.com/method/groups.getById
     * @param array $params
     * @return VkResponse
    */
    public function getById(array $params): VkResponse {
        return $this->vk->send("groups.getById", $params);
    }
    
    /**
     * Позволяет получить строку, необходимую для подтверждения адреса сервера в [Callback API](api/callback/getting-started).
     * https://dev.vk.com/method/groups.getCallbackConfirmationCode
     * @param array $params
     * @return VkResponse
    */
    public function getCallbackConfirmationCode(array $params): VkResponse {
        return $this->vk->send("groups.getCallbackConfirmationCode", $params);
    }
    
    /**
     * Позволяет получить информацию о настройках сервера для получения уведомлений [Callback API](api/callback/getting-started) в сообществе.
     * https://dev.vk.com/method/groups.getCallbackServerSettings
     * @param array $params
     * @return VkResponse
    */
    public function getCallbackServerSettings(array $params): VkResponse {
        return $this->vk->send("groups.getCallbackServerSettings", $params);
    }
    
    /**
     * Получает информацию о серверах для [Callback API](api/callback/getting-started) в сообществе.
     * https://dev.vk.com/method/groups.getCallbackServers
     * @param array $params
     * @return VkResponse
    */
    public function getCallbackServers(array $params): VkResponse {
        return $this->vk->send("groups.getCallbackServers", $params);
    }
    
    /**
     * Позволяет получить настройки уведомлений [Callback API](api/callback/getting-started) для сообщества.
     * https://dev.vk.com/method/groups.getCallbackSettings
     * @param array $params
     * @return VkResponse
    */
    public function getCallbackSettings(array $params): VkResponse {
        return $this->vk->send("groups.getCallbackSettings", $params);
    }
    
    /**
     * Возвращает список сообществ выбранной категории каталога.
     * https://dev.vk.com/method/groups.getCatalog
     * @param array $params
     * @return VkResponse
    */
    public function getCatalog(array $params): VkResponse {
        return $this->vk->send("groups.getCatalog", $params);
    }
    
    /**
     * Возвращает список категорий для каталога сообществ.
     * https://dev.vk.com/method/groups.getCatalogInfo
     * @param array $params
     * @return VkResponse
    */
    public function getCatalogInfo(array $params): VkResponse {
        return $this->vk->send("groups.getCatalogInfo", $params);
    }
    
    /**
     * Возвращает список пользователей, которые были приглашены в группу.
     * https://dev.vk.com/method/groups.getInvitedUsers
     * @param array $params
     * @return VkResponse
    */
    public function getInvitedUsers(array $params): VkResponse {
        return $this->vk->send("groups.getInvitedUsers", $params);
    }
    
    /**
     * Данный метод возвращает список приглашений в сообщества и встречи текущего пользователя.
     * https://dev.vk.com/method/groups.getInvites
     * @param array $params
     * @return VkResponse
    */
    public function getInvites(array $params): VkResponse {
        return $this->vk->send("groups.getInvites", $params);
    }
    
    /**
     * Возвращает данные для подключения к [Bots Longpoll API](api/bots-long-poll/getting-started).
     * https://dev.vk.com/method/groups.getLongPollServer
     * @param array $params
     * @return VkResponse
    */
    public function getLongPollServer(array $params): VkResponse {
        return $this->vk->send("groups.getLongPollServer", $params);
    }
    
    /**
     * Получает настройки Bots Longpoll API для сообщества.
     * https://dev.vk.com/method/groups.getLongPollSettings
     * @param array $params
     * @return VkResponse
    */
    public function getLongPollSettings(array $params): VkResponse {
        return $this->vk->send("groups.getLongPollSettings", $params);
    }
    
    /**
     * Возвращает список участников сообщества.
     * https://dev.vk.com/method/groups.getMembers
     * @param array $params
     * @return VkResponse
    */
    public function getMembers(array $params): VkResponse {
        return $this->vk->send("groups.getMembers", $params);
    }
    
    /**
     * Получает информацию о статусе «онлайн» в сообществе.
     * https://dev.vk.com/method/groups.getOnlineStatus
     * @param array $params
     * @return VkResponse
    */
    public function getOnlineStatus(array $params): VkResponse {
        return $this->vk->send("groups.getOnlineStatus", $params);
    }
    
    /**
     * Возвращает список заявок на вступление в сообщество.
     * https://dev.vk.com/method/groups.getRequests
     * @param array $params
     * @return VkResponse
    */
    public function getRequests(array $params): VkResponse {
        return $this->vk->send("groups.getRequests", $params);
    }
    
    /**
     * Позволяет получать данные, необходимые для отображения страницы редактирования данных сообщества.
     * https://dev.vk.com/method/groups.getSettings
     * @param array $params
     * @return VkResponse
    */
    public function getSettings(array $params): VkResponse {
        return $this->vk->send("groups.getSettings", $params);
    }
    
    /**
     * Возвращает список тегов сообщества
     * https://dev.vk.com/method/groups.getTagList
     * @param array $params
     * @return VkResponse
    */
    public function getTagList(array $params): VkResponse {
        return $this->vk->send("groups.getTagList", $params);
    }
    
    /**
     * Возвращает настройки прав для ключа доступа сообщества.
     * https://dev.vk.com/method/groups.getTokenPermissions
     * @param array $params
     * @return VkResponse
    */
    public function getTokenPermissions(array $params): VkResponse {
        return $this->vk->send("groups.getTokenPermissions", $params);
    }
    
    /**
     * Позволяет приглашать друзей в группу.
     * https://dev.vk.com/method/groups.invite
     * @param array $params
     * @return VkResponse
    */
    public function invite(array $params): VkResponse {
        return $this->vk->send("groups.invite", $params);
    }
    
    /**
     * Возвращает информацию о том, является ли пользователь участником сообщества.
     * https://dev.vk.com/method/groups.isMember
     * @param array $params
     * @return VkResponse
    */
    public function isMember(array $params): VkResponse {
        return $this->vk->send("groups.isMember", $params);
    }
    
    /**
     * Данный метод позволяет вступить в группу, публичную страницу, а также подтвердить участие во встрече.
     * https://dev.vk.com/method/groups.join
     * @param array $params
     * @return VkResponse
    */
    public function join(array $params): VkResponse {
        return $this->vk->send("groups.join", $params);
    }
    
    /**
     * Позволяет покинуть сообщество или отклонить приглашение в сообщество.
     * https://dev.vk.com/method/groups.leave
     * @param array $params
     * @return VkResponse
    */
    public function leave(array $params): VkResponse {
        return $this->vk->send("groups.leave", $params);
    }
    
    /**
     * Позволяет исключить пользователя из группы или отклонить заявку на вступление.
     * https://dev.vk.com/method/groups.removeUser
     * @param array $params
     * @return VkResponse
    */
    public function removeUser(array $params): VkResponse {
        return $this->vk->send("groups.removeUser", $params);
    }
    
    /**
     * Позволяет менять местоположение ссылки в списке.
     * https://dev.vk.com/method/groups.reorderLink
     * @param array $params
     * @return VkResponse
    */
    public function reorderLink(array $params): VkResponse {
        return $this->vk->send("groups.reorderLink", $params);
    }
    
    /**
     * Осуществляет поиск сообществ по заданной подстроке.
     * https://dev.vk.com/method/groups.search
     * @param array $params
     * @return VkResponse
    */
    public function search(array $params): VkResponse {
        return $this->vk->send("groups.search", $params);
    }
    
    /**
     * Позволяет задать настройки уведомлений о событиях в [Callback API](api/callback/getting-started).
     * https://dev.vk.com/method/groups.setCallbackSettings
     * @param array $params
     * @return VkResponse
    */
    public function setCallbackSettings(array $params): VkResponse {
        return $this->vk->send("groups.setCallbackSettings", $params);
    }
    
    /**
     * Задаёт настройки для Bots Long Poll API в сообществе.
     * https://dev.vk.com/method/groups.setLongPollSettings
     * @param array $params
     * @return VkResponse
    */
    public function setLongPollSettings(array $params): VkResponse {
        return $this->vk->send("groups.setLongPollSettings", $params);
    }
    
    /**
     * Устанавливает настройки сообщества
     * https://dev.vk.com/method/groups.setSettings
     * @param array $params
     * @return VkResponse
    */
    public function setSettings(array $params): VkResponse {
        return $this->vk->send("groups.setSettings", $params);
    }
    
    /**
     * Позволяет создать или отредактировать заметку о пользователе в рамках переписки пользователя с сообществом
     * https://dev.vk.com/method/groups.setUserNote
     * @param array $params
     * @return VkResponse
    */
    public function setUserNote(array $params): VkResponse {
        return $this->vk->send("groups.setUserNote", $params);
    }
    
    /**
     * Позволяет добавить новый тег в сообщество.
     * https://dev.vk.com/method/groups.tagAdd
     * @param array $params
     * @return VkResponse
    */
    public function tagAdd(array $params): VkResponse {
        return $this->vk->send("groups.tagAdd", $params);
    }
    
    /**
     * Позволяет «привязывать» и «отвязывать» теги сообщества к беседам.
     * https://dev.vk.com/method/groups.tagBind
     * @param array $params
     * @return VkResponse
    */
    public function tagBind(array $params): VkResponse {
        return $this->vk->send("groups.tagBind", $params);
    }
    
    /**
     * Позволяет удалить тег сообщества.
     * https://dev.vk.com/method/groups.tagDelete
     * @param array $params
     * @return VkResponse
    */
    public function tagDelete(array $params): VkResponse {
        return $this->vk->send("groups.tagDelete", $params);
    }
    
    /**
     * Позволяет переименовать существующий тег.
     * https://dev.vk.com/method/groups.tagUpdate
     * @param array $params
     * @return VkResponse
    */
    public function tagUpdate(array $params): VkResponse {
        return $this->vk->send("groups.tagUpdate", $params);
    }
    
    /**
     * Переключает функционал раздела «Товаров» в выбранной группе.
     * https://dev.vk.com/method/groups.toggleMarket
     * @param array $params
     * @return VkResponse
    */
    public function toggleMarket(array $params): VkResponse {
        return $this->vk->send("groups.toggleMarket", $params);
    }
    
    /**
     * Убирает пользователя или группу из черного списка сообщества.
     * https://dev.vk.com/method/groups.unban
     * @param array $params
     * @return VkResponse
    */
    public function unban(array $params): VkResponse {
        return $this->vk->send("groups.unban", $params);
    }
    
}