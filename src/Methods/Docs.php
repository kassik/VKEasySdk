<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Docs extends BaseMethod {

    /**
     * Копирует документ в документы текущего пользователя.
     * https://dev.vk.com/method/docs.add
     * @param array $params
     * @return VkResponse
    */
    public function add(array $params): VkResponse {
        return $this->vk->send("docs.add", $params);
    }
    
    /**
     * Удаляет документ пользователя или группы.
     * https://dev.vk.com/method/docs.delete
     * @param array $params
     * @return VkResponse
    */
    public function delete(array $params): VkResponse {
        return $this->vk->send("docs.delete", $params);
    }
    
    /**
     * Редактирует документ пользователя или группы.
     * https://dev.vk.com/method/docs.edit
     * @param array $params
     * @return VkResponse
    */
    public function edit(array $params): VkResponse {
        return $this->vk->send("docs.edit", $params);
    }
    
    /**
     * Возвращает расширенную информацию о документах пользователя или сообщества.
     * https://dev.vk.com/method/docs.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("docs.get", $params);
    }
    
    /**
     * Возвращает информацию о документах по их идентификаторам.
     * https://dev.vk.com/method/docs.getById
     * @param array $params
     * @return VkResponse
    */
    public function getById(array $params): VkResponse {
        return $this->vk->send("docs.getById", $params);
    }
    
    /**
     * Получает адрес сервера для [загрузки документа](upload_files_2%2310._%D0%97%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0_%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%BE%D0%B2) в личное сообщение.
     * https://dev.vk.com/method/docs.getMessagesUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getMessagesUploadServer(array $params): VkResponse {
        return $this->vk->send("docs.getMessagesUploadServer", $params);
    }
    
    /**
     * Возвращает доступные для пользователя типы документов.
     * https://dev.vk.com/method/docs.getTypes
     * @param array $params
     * @return VkResponse
    */
    public function getTypes(array $params): VkResponse {
        return $this->vk->send("docs.getTypes", $params);
    }
    
    /**
     * Возвращает адрес сервера для [загрузки документов](https://dev.vk.com/api/upload#%D0%97%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%BE%D0%B2).
     * https://dev.vk.com/method/docs.getUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getUploadServer(array $params): VkResponse {
        return $this->vk->send("docs.getUploadServer", $params);
    }
    
    /**
     * Возвращает адрес сервера для [загрузки документов](api/upload) в папку **Отправленные**, для последующей отправки документа на стену или личным сообщением.
     * https://dev.vk.com/method/docs.getWallUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getWallUploadServer(array $params): VkResponse {
        return $this->vk->send("docs.getWallUploadServer", $params);
    }
    
    /**
     * Сохраняет документ после его успешной [загрузки](api/upload) на сервер.
     * https://dev.vk.com/method/docs.save
     * @param array $params
     * @return VkResponse
    */
    public function save(array $params): VkResponse {
        return $this->vk->send("docs.save", $params);
    }
    
    /**
     * Возвращает результаты поиска по документам.
     * https://dev.vk.com/method/docs.search
     * @param array $params
     * @return VkResponse
    */
    public function search(array $params): VkResponse {
        return $this->vk->send("docs.search", $params);
    }
    
}