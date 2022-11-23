<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class AppWidgets extends BaseMethod {

    /**
     * Позволяет получить адрес для загрузки фотографии в коллекцию приложения для [виджетов приложений сообществ](api/community-apps-widgets/getting-started).
     * https://dev.vk.com/method/appWidgets.getAppImageUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getAppImageUploadServer(array $params): VkResponse {
        return $this->vk->send("appWidgets.getAppImageUploadServer", $params);
    }
    
    /**
     * Позволяет получить коллекцию изображений, загруженных для приложения, в [виджетах приложений сообществ](api/community-apps-widgets/getting-started).
     * https://dev.vk.com/method/appWidgets.getAppImages
     * @param array $params
     * @return VkResponse
    */
    public function getAppImages(array $params): VkResponse {
        return $this->vk->send("appWidgets.getAppImages", $params);
    }
    
    /**
     * Позволяет получить адрес для загрузки фотографии в коллекцию сообщества для [виджетов приложений сообществ](api/community-apps-widgets/getting-started).
     * https://dev.vk.com/method/appWidgets.getGroupImageUploadServer
     * @param array $params
     * @return VkResponse
    */
    public function getGroupImageUploadServer(array $params): VkResponse {
        return $this->vk->send("appWidgets.getGroupImageUploadServer", $params);
    }
    
    /**
     * Позволяет получить коллекцию изображений, загруженных для приложения, в [виджетах приложений сообществ](api/community-apps-widgets/getting-started).
     * https://dev.vk.com/method/appWidgets.getGroupImages
     * @param array $params
     * @return VkResponse
    */
    public function getGroupImages(array $params): VkResponse {
        return $this->vk->send("appWidgets.getGroupImages", $params);
    }
    
    /**
     * Позволяет получить изображение для [виджетов приложений сообществ](api/community-apps-widgets/getting-started) по его идентификатору.
     * https://dev.vk.com/method/appWidgets.getImagesById
     * @param array $params
     * @return VkResponse
    */
    public function getImagesById(array $params): VkResponse {
        return $this->vk->send("appWidgets.getImagesById", $params);
    }
    
    /**
     * Позволяет сохранить изображение в коллекцию приложения для [виджетов приложений сообществ](api/community-apps-widgets/getting-started) после загрузки на сервер.
     * https://dev.vk.com/method/appWidgets.saveAppImage
     * @param array $params
     * @return VkResponse
    */
    public function saveAppImage(array $params): VkResponse {
        return $this->vk->send("appWidgets.saveAppImage", $params);
    }
    
    /**
     * Позволяет сохранить изображение в коллекцию сообщества для [виджетов приложений сообществ](api/community-apps-widgets/getting-started). после загрузки на сервер.
     * https://dev.vk.com/method/appWidgets.saveGroupImage
     * @param array $params
     * @return VkResponse
    */
    public function saveGroupImage(array $params): VkResponse {
        return $this->vk->send("appWidgets.saveGroupImage", $params);
    }
    
    /**
     * Позволяет обновить [виджет приложения сообщества](api/community-apps-widgets/getting-started).
     * https://dev.vk.com/method/appWidgets.update
     * @param array $params
     * @return VkResponse
    */
    public function update(array $params): VkResponse {
        return $this->vk->send("appWidgets.update", $params);
    }
    
}