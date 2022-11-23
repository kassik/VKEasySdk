<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Pages extends BaseMethod {

    /**
     * Позволяет очистить кеш отдельных внешних страниц, которые могут быть прикреплены к записям ВКонтакте. После очистки кеша при последующем прикреплении ссылки к записи, данные о странице будут обновлены.
     * https://dev.vk.com/method/pages.clearCache
     * @param array $params
     * @return VkResponse
    */
    public function clearCache(array $params): VkResponse {
        return $this->vk->send("pages.clearCache", $params);
    }
    
    /**
     * Возвращает информацию о вики-странице.
     * https://dev.vk.com/method/pages.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("pages.get", $params);
    }
    
    /**
     * Возвращает список всех старых версий вики-страницы.
     * https://dev.vk.com/method/pages.getHistory
     * @param array $params
     * @return VkResponse
    */
    public function getHistory(array $params): VkResponse {
        return $this->vk->send("pages.getHistory", $params);
    }
    
    /**
     * Возвращает список вики-страниц в группе.
     * https://dev.vk.com/method/pages.getTitles
     * @param array $params
     * @return VkResponse
    */
    public function getTitles(array $params): VkResponse {
        return $this->vk->send("pages.getTitles", $params);
    }
    
    /**
     * Возвращает текст одной из старых версий страницы.
     * https://dev.vk.com/method/pages.getVersion
     * @param array $params
     * @return VkResponse
    */
    public function getVersion(array $params): VkResponse {
        return $this->vk->send("pages.getVersion", $params);
    }
    
    /**
     * Возвращает HTML-представление вики-разметки.
     * https://dev.vk.com/method/pages.parseWiki
     * @param array $params
     * @return VkResponse
    */
    public function parseWiki(array $params): VkResponse {
        return $this->vk->send("pages.parseWiki", $params);
    }
    
    /**
     * 
     * https://dev.vk.com/method/pages.preview
     * @param array $params
     * @return VkResponse
    */
    public function preview(array $params): VkResponse {
        return $this->vk->send("pages.preview", $params);
    }
    
    /**
     * Сохраняет текст вики-страницы.
     * https://dev.vk.com/method/pages.save
     * @param array $params
     * @return VkResponse
    */
    public function save(array $params): VkResponse {
        return $this->vk->send("pages.save", $params);
    }
    
    /**
     * Сохраняет новые настройки доступа на чтение и редактирование вики-страницы.
     * https://dev.vk.com/method/pages.saveAccess
     * @param array $params
     * @return VkResponse
    */
    public function saveAccess(array $params): VkResponse {
        return $this->vk->send("pages.saveAccess", $params);
    }
    
}