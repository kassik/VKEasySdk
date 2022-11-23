<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Polls extends BaseMethod {

    /**
     * Отдает голос текущего пользователя за выбранный вариант ответа в указанном опросе.
     * https://dev.vk.com/method/polls.addVote
     * @param array $params
     * @return VkResponse
    */
    public function addVote(array $params): VkResponse {
        return $this->vk->send("polls.addVote", $params);
    }
    
    /**
     * Позволяет создавать опросы, которые впоследствии можно прикреплять к записям на странице пользователя или сообщества.
     * https://dev.vk.com/method/polls.create
     * @param array $params
     * @return VkResponse
    */
    public function create(array $params): VkResponse {
        return $this->vk->send("polls.create", $params);
    }
    
    /**
     * Снимает голос текущего пользователя с выбранного варианта ответа в указанном опросе.
     * https://dev.vk.com/method/polls.deleteVote
     * @param array $params
     * @return VkResponse
    */
    public function deleteVote(array $params): VkResponse {
        return $this->vk->send("polls.deleteVote", $params);
    }
    
    /**
     * Позволяет редактировать созданные опросы.
     * https://dev.vk.com/method/polls.edit
     * @param array $params
     * @return VkResponse
    */
    public function edit(array $params): VkResponse {
        return $this->vk->send("polls.edit", $params);
    }
    
    /**
     * Возвращает варианты фонового изображения для опросов.
     * https://dev.vk.com/method/polls.getBackgrounds
     * @param array $params
     * @return VkResponse
    */
    public function getBackgrounds(array $params): VkResponse {
        return $this->vk->send("polls.getBackgrounds", $params);
    }
    
    /**
     * Возвращает детальную информацию об опросе по его идентификатору.
     * https://dev.vk.com/method/polls.getById
     * @param array $params
     * @return VkResponse
    */
    public function getById(array $params): VkResponse {
        return $this->vk->send("polls.getById", $params);
    }
    
    /**
     * Возвращает адрес сервера для загрузки фоновой фотографии в опрос.
     * https://dev.vk.com/method/polls.getPhotoUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getPhotoUploadServer(array $params): VkResponse {
        return $this->vk->send("polls.getPhotoUploadServer", $params);
    }
    
    /**
     * Получает список идентификаторов пользователей, которые выбрали определенные варианты ответа в опросе.
     * https://dev.vk.com/method/polls.getVoters
     * @param array $params
     * @return VkResponse
    */
    public function getVoters(array $params): VkResponse {
        return $this->vk->send("polls.getVoters", $params);
    }
    
    /**
     * Сохраняет фотографию, загруженную в опрос.
     * https://dev.vk.com/method/polls.savePhoto
     * @param array $params
     * @return VkResponse
    */
    public function savePhoto(array $params): VkResponse {
        return $this->vk->send("polls.savePhoto", $params);
    }
    
}