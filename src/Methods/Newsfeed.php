<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Newsfeed extends BaseMethod {

    /**
     * Запрещает показывать новости от заданных пользователей и групп в ленте новостей текущего пользователя.
     * https://dev.vk.com/method/newsfeed.addBan
     * @param array $params
     * @return VkResponse
    */
    public function addBan(array $params): VkResponse {
        return $this->vk->send("newsfeed.addBan", $params);
    }
    
    /**
     * Разрешает показывать новости от заданных пользователей и групп в ленте новостей текущего пользователя.
     * https://dev.vk.com/method/newsfeed.deleteBan
     * @param array $params
     * @return VkResponse
    */
    public function deleteBan(array $params): VkResponse {
        return $this->vk->send("newsfeed.deleteBan", $params);
    }
    
    /**
     * Метод позволяет удалить пользовательский список новостей. 
     * https://dev.vk.com/method/newsfeed.deleteList
     * @param array $params
     * @return VkResponse
    */
    public function deleteList(array $params): VkResponse {
        return $this->vk->send("newsfeed.deleteList", $params);
    }
    
    /**
     * Возвращает данные, необходимые для показа списка новостей для текущего пользователя.
     * https://dev.vk.com/method/newsfeed.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("newsfeed.get", $params);
    }
    
    /**
     * Возвращает список пользователей и групп, которые текущий пользователь скрыл из ленты новостей.
     * https://dev.vk.com/method/newsfeed.getBanned
     * @param array $params
     * @return VkResponse
    */
    public function getBanned(array $params): VkResponse {
        return $this->vk->send("newsfeed.getBanned", $params);
    }
    
    /**
     * Возвращает данные, необходимые для показа раздела комментариев в новостях пользователя.
     * https://dev.vk.com/method/newsfeed.getComments
     * @param array $params
     * @return VkResponse
    */
    public function getComments(array $params): VkResponse {
        return $this->vk->send("newsfeed.getComments", $params);
    }
    
    /**
     * Возвращает пользовательские списки новостей.
     * https://dev.vk.com/method/newsfeed.getLists
     * @param array $params
     * @return VkResponse
    */
    public function getLists(array $params): VkResponse {
        return $this->vk->send("newsfeed.getLists", $params);
    }
    
    /**
     * Возвращает список записей пользователей на своих стенах, в которых упоминается указанный пользователь.
     * https://dev.vk.com/method/newsfeed.getMentions
     * @param array $params
     * @return VkResponse
    */
    public function getMentions(array $params): VkResponse {
        return $this->vk->send("newsfeed.getMentions", $params);
    }
    
    /**
     * Получает список новостей, рекомендованных пользователю.
     * https://dev.vk.com/method/newsfeed.getRecommended
     * @param array $params
     * @return VkResponse
    */
    public function getRecommended(array $params): VkResponse {
        return $this->vk->send("newsfeed.getRecommended", $params);
    }
    
    /**
     * Возвращает сообщества и пользователей, на которые текущему пользователю рекомендуется подписаться.
     * https://dev.vk.com/method/newsfeed.getSuggestedSources
     * @param array $params
     * @return VkResponse
    */
    public function getSuggestedSources(array $params): VkResponse {
        return $this->vk->send("newsfeed.getSuggestedSources", $params);
    }
    
    /**
     * Позволяет скрыть объект из ленты новостей.
     * https://dev.vk.com/method/newsfeed.ignoreItem
     * @param array $params
     * @return VkResponse
    */
    public function ignoreItem(array $params): VkResponse {
        return $this->vk->send("newsfeed.ignoreItem", $params);
    }
    
    /**
     * Метод позволяет создавать или редактировать пользовательские списки для просмотра новостей.
     * https://dev.vk.com/method/newsfeed.saveList
     * @param array $params
     * @return VkResponse
    */
    public function saveList(array $params): VkResponse {
        return $this->vk->send("newsfeed.saveList", $params);
    }
    
    /**
     * Возвращает результаты поиска по статусам. Новости возвращаются в порядке от более новых к более старым.
     * https://dev.vk.com/method/newsfeed.search
     * @param array $params
     * @return VkResponse
    */
    public function search(array $params): VkResponse {
        return $this->vk->send("newsfeed.search", $params);
    }
    
    /**
     * Позволяет вернуть ранее скрытый объект в ленту новостей.
     * https://dev.vk.com/method/newsfeed.unignoreItem
     * @param array $params
     * @return VkResponse
    */
    public function unignoreItem(array $params): VkResponse {
        return $this->vk->send("newsfeed.unignoreItem", $params);
    }
    
    /**
     * Отписывает текущего пользователя от комментариев к заданному объекту.
     * https://dev.vk.com/method/newsfeed.unsubscribe
     * @param array $params
     * @return VkResponse
    */
    public function unsubscribe(array $params): VkResponse {
        return $this->vk->send("newsfeed.unsubscribe", $params);
    }
    
}