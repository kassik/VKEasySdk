<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Market extends BaseMethod {

    /**
     * Добавляет новый товар.
     * https://dev.vk.com/method/market.add
     * @param array $params
     * @return VkResponse
    */
    public function add(array $params): VkResponse {
        return $this->vk->send("market.add", $params);
    }
    
    /**
     * Добавляет новую подборку с товарами.
     * https://dev.vk.com/method/market.addAlbum
     * @param array $params
     * @return VkResponse
    */
    public function addAlbum(array $params): VkResponse {
        return $this->vk->send("market.addAlbum", $params);
    }
    
    /**
     * Добавляет товар в одну или несколько выбранных подборок.
     * https://dev.vk.com/method/market.addToAlbum
     * @param array $params
     * @return VkResponse
    */
    public function addToAlbum(array $params): VkResponse {
        return $this->vk->send("market.addToAlbum", $params);
    }
    
    /**
     * Создаёт новый комментарий к товару.
     * https://dev.vk.com/method/market.createComment
     * @param array $params
     * @return VkResponse
    */
    public function createComment(array $params): VkResponse {
        return $this->vk->send("market.createComment", $params);
    }
    
    /**
     * Удаляет товар.
     * https://dev.vk.com/method/market.delete
     * @param array $params
     * @return VkResponse
    */
    public function delete(array $params): VkResponse {
        return $this->vk->send("market.delete", $params);
    }
    
    /**
     * Удаляет подборку с товарами.
     * https://dev.vk.com/method/market.deleteAlbum
     * @param array $params
     * @return VkResponse
    */
    public function deleteAlbum(array $params): VkResponse {
        return $this->vk->send("market.deleteAlbum", $params);
    }
    
    /**
     * Удаляет комментарий к товару.
     * https://dev.vk.com/method/market.deleteComment
     * @param array $params
     * @return VkResponse
    */
    public function deleteComment(array $params): VkResponse {
        return $this->vk->send("market.deleteComment", $params);
    }
    
    /**
     * Редактирует товар.
     * https://dev.vk.com/method/market.edit
     * @param array $params
     * @return VkResponse
    */
    public function edit(array $params): VkResponse {
        return $this->vk->send("market.edit", $params);
    }
    
    /**
     * Редактирует подборку с товарами.
     * https://dev.vk.com/method/market.editAlbum
     * @param array $params
     * @return VkResponse
    */
    public function editAlbum(array $params): VkResponse {
        return $this->vk->send("market.editAlbum", $params);
    }
    
    /**
     * Изменяет текст комментария к товару.
     * https://dev.vk.com/method/market.editComment
     * @param array $params
     * @return VkResponse
    */
    public function editComment(array $params): VkResponse {
        return $this->vk->send("market.editComment", $params);
    }
    
    /**
     * Редактирует заказ.
     * https://dev.vk.com/method/market.editOrder
     * @param array $params
     * @return VkResponse
    */
    public function editOrder(array $params): VkResponse {
        return $this->vk->send("market.editOrder", $params);
    }
    
    /**
     * Возвращает список товаров в сообществе.
     * https://dev.vk.com/method/market.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("market.get", $params);
    }
    
    /**
     * Возвращает данные подборки с товарами.
     * https://dev.vk.com/method/market.getAlbumById
     * @param array $params
     * @return VkResponse
    */
    public function getAlbumById(array $params): VkResponse {
        return $this->vk->send("market.getAlbumById", $params);
    }
    
    /**
     * Возвращает список подборок с товарами.
     * https://dev.vk.com/method/market.getAlbums
     * @param array $params
     * @return VkResponse
    */
    public function getAlbums(array $params): VkResponse {
        return $this->vk->send("market.getAlbums", $params);
    }
    
    /**
     * Возвращает информацию о товарах по идентификаторам.
     * https://dev.vk.com/method/market.getById
     * @param array $params
     * @return VkResponse
    */
    public function getById(array $params): VkResponse {
        return $this->vk->send("market.getById", $params);
    }
    
    /**
     * Возвращает список категорий для товаров.
     * https://dev.vk.com/method/market.getCategories
     * @param array $params
     * @return VkResponse
    */
    public function getCategories(array $params): VkResponse {
        return $this->vk->send("market.getCategories", $params);
    }
    
    /**
     * Возвращает список комментариев к товару.
     * https://dev.vk.com/method/market.getComments
     * @param array $params
     * @return VkResponse
    */
    public function getComments(array $params): VkResponse {
        return $this->vk->send("market.getComments", $params);
    }
    
    /**
     * Возвращает заказы сообщества.
     * https://dev.vk.com/method/market.getGroupOrders
     * @param array $params
     * @return VkResponse
    */
    public function getGroupOrders(array $params): VkResponse {
        return $this->vk->send("market.getGroupOrders", $params);
    }
    
    /**
     * Возвращает заказ по идентификатору.
     * https://dev.vk.com/method/market.getOrderById
     * @param array $params
     * @return VkResponse
    */
    public function getOrderById(array $params): VkResponse {
        return $this->vk->send("market.getOrderById", $params);
    }
    
    /**
     * Возвращает товары в заказе.
     * https://dev.vk.com/method/market.getOrderItems
     * @param array $params
     * @return VkResponse
    */
    public function getOrderItems(array $params): VkResponse {
        return $this->vk->send("market.getOrderItems", $params);
    }
    
    /**
     * Возвращает заказы.
     * https://dev.vk.com/method/market.getOrders
     * @param array $params
     * @return VkResponse
    */
    public function getOrders(array $params): VkResponse {
        return $this->vk->send("market.getOrders", $params);
    }
    
    /**
     * Удаляет товар из одной или нескольких выбранных подборок.
     * https://dev.vk.com/method/market.removeFromAlbum
     * @param array $params
     * @return VkResponse
    */
    public function removeFromAlbum(array $params): VkResponse {
        return $this->vk->send("market.removeFromAlbum", $params);
    }
    
    /**
     * Изменяет положение подборки с товарами в списке.
     * https://dev.vk.com/method/market.reorderAlbums
     * @param array $params
     * @return VkResponse
    */
    public function reorderAlbums(array $params): VkResponse {
        return $this->vk->send("market.reorderAlbums", $params);
    }
    
    /**
     * Изменяет положение товара в подборке.
     * https://dev.vk.com/method/market.reorderItems
     * @param array $params
     * @return VkResponse
    */
    public function reorderItems(array $params): VkResponse {
        return $this->vk->send("market.reorderItems", $params);
    }
    
    /**
     * Позволяет отправить жалобу на товар.
     * https://dev.vk.com/method/market.report
     * @param array $params
     * @return VkResponse
    */
    public function report(array $params): VkResponse {
        return $this->vk->send("market.report", $params);
    }
    
    /**
     * Позволяет оставить жалобу на комментарий к товару.
     * https://dev.vk.com/method/market.reportComment
     * @param array $params
     * @return VkResponse
    */
    public function reportComment(array $params): VkResponse {
        return $this->vk->send("market.reportComment", $params);
    }
    
    /**
     * Восстанавливает удаленный товар.
     * https://dev.vk.com/method/market.restore
     * @param array $params
     * @return VkResponse
    */
    public function restore(array $params): VkResponse {
        return $this->vk->send("market.restore", $params);
    }
    
    /**
     * Восстанавливает удаленный комментарий к товару.
     * https://dev.vk.com/method/market.restoreComment
     * @param array $params
     * @return VkResponse
    */
    public function restoreComment(array $params): VkResponse {
        return $this->vk->send("market.restoreComment", $params);
    }
    
    /**
     * Ищет товары в каталоге сообщества.
     * https://dev.vk.com/method/market.search
     * @param array $params
     * @return VkResponse
    */
    public function search(array $params): VkResponse {
        return $this->vk->send("market.search", $params);
    }
    
    /**
     * 
     * https://dev.vk.com/method/market.searchItems
     * @param array $params
     * @return VkResponse
    */
    public function searchItems(array $params): VkResponse {
        return $this->vk->send("market.searchItems", $params);
    }
    
}