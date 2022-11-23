<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Friends extends BaseMethod {

    /**
     * Одобряет или создаёт заявку на добавление в друзья.
     * https://dev.vk.com/method/friends.add
     * @param array $params
     * @return VkResponse
    */
    public function add(array $params): VkResponse {
        return $this->vk->send("friends.add", $params);
    }
    
    /**
     * Создает новый список друзей у текущего пользователя.
     * https://dev.vk.com/method/friends.addList
     * @param array $params
     * @return VkResponse
    */
    public function addList(array $params): VkResponse {
        return $this->vk->send("friends.addList", $params);
    }
    
    /**
     * Возвращает информацию о том, добавлен ли текущий пользователь в друзья у указанных пользователей.
     * https://dev.vk.com/method/friends.areFriends
     * @param array $params
     * @return VkResponse
    */
    public function areFriends(array $params): VkResponse {
        return $this->vk->send("friends.areFriends", $params);
    }
    
    /**
     * Удаляет пользователя из списка друзей или отклоняет заявку в друзья.
     * https://dev.vk.com/method/friends.delete
     * @param array $params
     * @return VkResponse
    */
    public function delete(array $params): VkResponse {
        return $this->vk->send("friends.delete", $params);
    }
    
    /**
     * Отмечает все входящие заявки на добавление в друзья как просмотренные.
     * https://dev.vk.com/method/friends.deleteAllRequests
     * @param array $params
     * @return VkResponse
    */
    public function deleteAllRequests(array $params): VkResponse {
        return $this->vk->send("friends.deleteAllRequests", $params);
    }
    
    /**
     * Удаляет существующий список друзей текущего пользователя.
     * https://dev.vk.com/method/friends.deleteList
     * @param array $params
     * @return VkResponse
    */
    public function deleteList(array $params): VkResponse {
        return $this->vk->send("friends.deleteList", $params);
    }
    
    /**
     * Редактирует списки друзей для выбранного друга.
     * https://dev.vk.com/method/friends.edit
     * @param array $params
     * @return VkResponse
    */
    public function edit(array $params): VkResponse {
        return $this->vk->send("friends.edit", $params);
    }
    
    /**
     * Редактирует существующий список друзей текущего пользователя.
     * https://dev.vk.com/method/friends.editList
     * @param array $params
     * @return VkResponse
    */
    public function editList(array $params): VkResponse {
        return $this->vk->send("friends.editList", $params);
    }
    
    /**
     * Возвращает список идентификаторов друзей пользователя или расширенную информацию о друзьях пользователя (при использовании параметра `fields`).
     * https://dev.vk.com/method/friends.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("friends.get", $params);
    }
    
    /**
     * Возвращает список идентификаторов друзей текущего пользователя, которые установили данное приложение.
     * https://dev.vk.com/method/friends.getAppUsers
     * @param array $params
     * @return VkResponse
    */
    public function getAppUsers(array $params): VkResponse {
        return $this->vk->send("friends.getAppUsers", $params);
    }
    
    /**
     * Позволяет получить список идентификаторов пользователей, доступных для вызова в приложении, используя метод [Client API](sdk/javascript) `callUser`.

Подробнее о [схеме вызова](sdk/javascript) из приложений.
     * https://dev.vk.com/method/friends.getAvailableForCall
     * @param array $params
     * @return VkResponse
    */
    public function getAvailableForCall(array $params): VkResponse {
        return $this->vk->send("friends.getAvailableForCall", $params);
    }
    
    /**
     * Возвращает список друзей пользователя, у которых завалидированные или указанные в профиле телефонные номера входят в заданный список.
     * https://dev.vk.com/method/friends.getByPhones
     * @param array $params
     * @return VkResponse
    */
    public function getByPhones(array $params): VkResponse {
        return $this->vk->send("friends.getByPhones", $params);
    }
    
    /**
     * Возвращает список меток друзей пользователя.
     * https://dev.vk.com/method/friends.getLists
     * @param array $params
     * @return VkResponse
    */
    public function getLists(array $params): VkResponse {
        return $this->vk->send("friends.getLists", $params);
    }
    
    /**
     * Возвращает список идентификаторов общих друзей между парой пользователей.
     * https://dev.vk.com/method/friends.getMutual
     * @param array $params
     * @return VkResponse
    */
    public function getMutual(array $params): VkResponse {
        return $this->vk->send("friends.getMutual", $params);
    }
    
    /**
     * Возвращает список идентификаторов друзей пользователя, находящихся на сайте.
     * https://dev.vk.com/method/friends.getOnline
     * @param array $params
     * @return VkResponse
    */
    public function getOnline(array $params): VkResponse {
        return $this->vk->send("friends.getOnline", $params);
    }
    
    /**
     * Возвращает список идентификаторов недавно добавленных друзей текущего пользователя.
     * https://dev.vk.com/method/friends.getRecent
     * @param array $params
     * @return VkResponse
    */
    public function getRecent(array $params): VkResponse {
        return $this->vk->send("friends.getRecent", $params);
    }
    
    /**
     * Возвращает информацию о полученных или отправленных заявках на добавление в друзья для текущего пользователя.
     * https://dev.vk.com/method/friends.getRequests
     * @param array $params
     * @return VkResponse
    */
    public function getRequests(array $params): VkResponse {
        return $this->vk->send("friends.getRequests", $params);
    }
    
    /**
     * Возвращает список профилей пользователей, которые могут быть друзьями текущего пользователя.
     * https://dev.vk.com/method/friends.getSuggestions
     * @param array $params
     * @return VkResponse
    */
    public function getSuggestions(array $params): VkResponse {
        return $this->vk->send("friends.getSuggestions", $params);
    }
    
    /**
     * Позволяет искать по списку друзей пользователей.
     * https://dev.vk.com/method/friends.search
     * @param array $params
     * @return VkResponse
    */
    public function search(array $params): VkResponse {
        return $this->vk->send("friends.search", $params);
    }
    
}