<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Ads extends BaseMethod {

    /**
     * Добавляет администраторов и/или наблюдателей в рекламный кабинет.
     * https://dev.vk.com/method/ads.addOfficeUsers
     * @param array $params
     * @return VkResponse
    */
    public function addOfficeUsers(array $params): VkResponse {
        return $this->vk->send("ads.addOfficeUsers", $params);
    }
    
    /**
     * Проверяет ссылку на рекламируемый объект.
     * https://dev.vk.com/method/ads.checkLink
     * @param array $params
     * @return VkResponse
    */
    public function checkLink(array $params): VkResponse {
        return $this->vk->send("ads.checkLink", $params);
    }
    
    /**
     * Создает рекламные объявления.
     * https://dev.vk.com/method/ads.createAds
     * @param array $params
     * @return VkResponse
    */
    public function createAds(array $params): VkResponse {
        return $this->vk->send("ads.createAds", $params);
    }
    
    /**
     * Создает рекламные кампании.
     * https://dev.vk.com/method/ads.createCampaigns
     * @param array $params
     * @return VkResponse
    */
    public function createCampaigns(array $params): VkResponse {
        return $this->vk->send("ads.createCampaigns", $params);
    }
    
    /**
     * Создаёт клиентов рекламного агентства.
     * https://dev.vk.com/method/ads.createClients
     * @param array $params
     * @return VkResponse
    */
    public function createClients(array $params): VkResponse {
        return $this->vk->send("ads.createClients", $params);
    }
    
    /**
     * Создаёт запрос на поиск похожей аудитории.
     * https://dev.vk.com/method/ads.createLookalikeRequest
     * @param array $params
     * @return VkResponse
    */
    public function createLookalikeRequest(array $params): VkResponse {
        return $this->vk->send("ads.createLookalikeRequest", $params);
    }
    
    /**
     * Создаёт аудиторию для ретаргетинга рекламных объявлений на пользователей, которые посетили сайт рекламодателя (просмотрели информации о товаре, зарегистрировались и т.д.).
     * https://dev.vk.com/method/ads.createTargetGroup
     * @param array $params
     * @return VkResponse
    */
    public function createTargetGroup(array $params): VkResponse {
        return $this->vk->send("ads.createTargetGroup", $params);
    }
    
    /**
     * Создаёт пиксель ретаргетинга.
     * https://dev.vk.com/method/ads.createTargetPixel
     * @param array $params
     * @return VkResponse
    */
    public function createTargetPixel(array $params): VkResponse {
        return $this->vk->send("ads.createTargetPixel", $params);
    }
    
    /**
     * Архивирует рекламные объявления.
     * https://dev.vk.com/method/ads.deleteAds
     * @param array $params
     * @return VkResponse
    */
    public function deleteAds(array $params): VkResponse {
        return $this->vk->send("ads.deleteAds", $params);
    }
    
    /**
     * Архивирует рекламные кампании.
     * https://dev.vk.com/method/ads.deleteCampaigns
     * @param array $params
     * @return VkResponse
    */
    public function deleteCampaigns(array $params): VkResponse {
        return $this->vk->send("ads.deleteCampaigns", $params);
    }
    
    /**
     * Архивирует клиентов рекламного агентства.
     * https://dev.vk.com/method/ads.deleteClients
     * @param array $params
     * @return VkResponse
    */
    public function deleteClients(array $params): VkResponse {
        return $this->vk->send("ads.deleteClients", $params);
    }
    
    /**
     * Удаляет аудиторию ретаргетинга.
     * https://dev.vk.com/method/ads.deleteTargetGroup
     * @param array $params
     * @return VkResponse
    */
    public function deleteTargetGroup(array $params): VkResponse {
        return $this->vk->send("ads.deleteTargetGroup", $params);
    }
    
    /**
     * Удаляет пиксель ретаргетинга.
     * https://dev.vk.com/method/ads.deleteTargetPixel
     * @param array $params
     * @return VkResponse
    */
    public function deleteTargetPixel(array $params): VkResponse {
        return $this->vk->send("ads.deleteTargetPixel", $params);
    }
    
    /**
     * Возвращает список рекламных кабинетов.
     * https://dev.vk.com/method/ads.getAccounts
     * @param array $params
     * @return VkResponse
    */
    public function getAccounts(array $params): VkResponse {
        return $this->vk->send("ads.getAccounts", $params);
    }
    
    /**
     * Возвращает список рекламных объявлений.
     * https://dev.vk.com/method/ads.getAds
     * @param array $params
     * @return VkResponse
    */
    public function getAds(array $params): VkResponse {
        return $this->vk->send("ads.getAds", $params);
    }
    
    /**
     * Возвращает описания внешнего вида рекламных объявлений.
     * https://dev.vk.com/method/ads.getAdsLayout
     * @param array $params
     * @return VkResponse
    */
    public function getAdsLayout(array $params): VkResponse {
        return $this->vk->send("ads.getAdsLayout", $params);
    }
    
    /**
     * Возвращает подробную информацию об охвате рекламных записей.
     * https://dev.vk.com/method/ads.getAdsPostsReach
     * @param array $params
     * @return VkResponse
    */
    public function getAdsPostsReach(array $params): VkResponse {
        return $this->vk->send("ads.getAdsPostsReach", $params);
    }
    
    /**
     * Возвращает параметры таргетинга рекламных объявлений
     * https://dev.vk.com/method/ads.getAdsTargeting
     * @param array $params
     * @return VkResponse
    */
    public function getAdsTargeting(array $params): VkResponse {
        return $this->vk->send("ads.getAdsTargeting", $params);
    }
    
    /**
     * Возвращает текущий бюджет рекламного кабинета.
     * https://dev.vk.com/method/ads.getBudget
     * @param array $params
     * @return VkResponse
    */
    public function getBudget(array $params): VkResponse {
        return $this->vk->send("ads.getBudget", $params);
    }
    
    /**
     * Возвращает список кампаний рекламного кабинета.
     * https://dev.vk.com/method/ads.getCampaigns
     * @param array $params
     * @return VkResponse
    */
    public function getCampaigns(array $params): VkResponse {
        return $this->vk->send("ads.getCampaigns", $params);
    }
    
    /**
     * Позволяет получить возможные тематики рекламных объявлений.
     * https://dev.vk.com/method/ads.getCategories
     * @param array $params
     * @return VkResponse
    */
    public function getCategories(array $params): VkResponse {
        return $this->vk->send("ads.getCategories", $params);
    }
    
    /**
     * Возвращает список клиентов рекламного агентства.
     * https://dev.vk.com/method/ads.getClients
     * @param array $params
     * @return VkResponse
    */
    public function getClients(array $params): VkResponse {
        return $this->vk->send("ads.getClients", $params);
    }
    
    /**
     * Возвращает демографическую статистику по рекламным объявлениям или кампаниям.
     * https://dev.vk.com/method/ads.getDemographics
     * @param array $params
     * @return VkResponse
    */
    public function getDemographics(array $params): VkResponse {
        return $this->vk->send("ads.getDemographics", $params);
    }
    
    /**
     * Возвращает информацию о текущем состоянии счетчика — количество оставшихся запусков методов и время до следующего обнуления счетчика в секундах.
     * https://dev.vk.com/method/ads.getFloodStats
     * @param array $params
     * @return VkResponse
    */
    public function getFloodStats(array $params): VkResponse {
        return $this->vk->send("ads.getFloodStats", $params);
    }
    
    /**
     * Возвращает список запросов на поиск похожей аудитории.
     * https://dev.vk.com/method/ads.getLookalikeRequests
     * @param array $params
     * @return VkResponse
    */
    public function getLookalikeRequests(array $params): VkResponse {
        return $this->vk->send("ads.getLookalikeRequests", $params);
    }
    
    /**
     * Возвращает информацию о музыкантах, на слушателей которых доступно таргетирование.
     * https://dev.vk.com/method/ads.getMusicians
     * @param array $params
     * @return VkResponse
    */
    public function getMusicians(array $params): VkResponse {
        return $this->vk->send("ads.getMusicians", $params);
    }
    
    /**
     * Возвращает информацию о музыкантах на слушателей, для которых доступно таргетирование.
     * https://dev.vk.com/method/ads.getMusiciansByIds
     * @param array $params
     * @return VkResponse
    */
    public function getMusiciansByIds(array $params): VkResponse {
        return $this->vk->send("ads.getMusiciansByIds", $params);
    }
    
    /**
     * Возвращает список администраторов и наблюдателей рекламного кабинета.
     * https://dev.vk.com/method/ads.getOfficeUsers
     * @param array $params
     * @return VkResponse
    */
    public function getOfficeUsers(array $params): VkResponse {
        return $this->vk->send("ads.getOfficeUsers", $params);
    }
    
    /**
     * Возвращает подробную статистику по охвату рекламных записей из объявлений и кампаний для продвижения записей сообщества.
     * https://dev.vk.com/method/ads.getPostsReach
     * @param array $params
     * @return VkResponse
    */
    public function getPostsReach(array $params): VkResponse {
        return $this->vk->send("ads.getPostsReach", $params);
    }
    
    /**
     * Возвращает причину, по которой указанному объявлению было отказано в прохождении премодерации.
     * https://dev.vk.com/method/ads.getRejectionReason
     * @param array $params
     * @return VkResponse
    */
    public function getRejectionReason(array $params): VkResponse {
        return $this->vk->send("ads.getRejectionReason", $params);
    }
    
    /**
     * Возвращает статистику показателей эффективности по рекламным объявлениям, кампаниям, клиентам или всему кабинету.
     * https://dev.vk.com/method/ads.getStatistics
     * @param array $params
     * @return VkResponse
    */
    public function getStatistics(array $params): VkResponse {
        return $this->vk->send("ads.getStatistics", $params);
    }
    
    /**
     * Возвращает набор подсказок для различных параметров таргетинга.
     * https://dev.vk.com/method/ads.getSuggestions
     * @param array $params
     * @return VkResponse
    */
    public function getSuggestions(array $params): VkResponse {
        return $this->vk->send("ads.getSuggestions", $params);
    }
    
    /**
     * Возвращает список аудиторий ретаргетинга.
     * https://dev.vk.com/method/ads.getTargetGroups
     * @param array $params
     * @return VkResponse
    */
    public function getTargetGroups(array $params): VkResponse {
        return $this->vk->send("ads.getTargetGroups", $params);
    }
    
    /**
     * Возвращает список пикселей ретаргетинга.
     * https://dev.vk.com/method/ads.getTargetPixels
     * @param array $params
     * @return VkResponse
    */
    public function getTargetPixels(array $params): VkResponse {
        return $this->vk->send("ads.getTargetPixels", $params);
    }
    
    /**
     * Возвращает размер целевой аудитории таргетинга, а также рекомендованные значения CPC и CPM.
     * https://dev.vk.com/method/ads.getTargetingStats
     * @param array $params
     * @return VkResponse
    */
    public function getTargetingStats(array $params): VkResponse {
        return $this->vk->send("ads.getTargetingStats", $params);
    }
    
    /**
     * Возвращает URL-адрес для загрузки фотографии рекламного объявления.
     * https://dev.vk.com/method/ads.getUploadURL
     * @param array $params
     * @return VkResponse
    */
    public function getUploadURL(array $params): VkResponse {
        return $this->vk->send("ads.getUploadURL", $params);
    }
    
    /**
     * Возвращает URL-адрес для загрузки видеозаписи рекламного объявления.
     * https://dev.vk.com/method/ads.getVideoUploadURL
     * @param array $params
     * @return VkResponse
    */
    public function getVideoUploadURL(array $params): VkResponse {
        return $this->vk->send("ads.getVideoUploadURL", $params);
    }
    
    /**
     * Импортирует список контактов рекламодателя для учета зарегистрированных во ВКонтакте пользователей в аудитории ретаргетинга.
     * https://dev.vk.com/method/ads.importTargetContacts
     * @param array $params
     * @return VkResponse
    */
    public function importTargetContacts(array $params): VkResponse {
        return $this->vk->send("ads.importTargetContacts", $params);
    }
    
    /**
     * Удаляет администраторов и/или наблюдателей из рекламного кабинета.
     * https://dev.vk.com/method/ads.removeOfficeUsers
     * @param array $params
     * @return VkResponse
    */
    public function removeOfficeUsers(array $params): VkResponse {
        return $this->vk->send("ads.removeOfficeUsers", $params);
    }
    
    /**
     * Принимает запрос на исключение контактов рекламодателя из аудитории ретаргетинга.
     * https://dev.vk.com/method/ads.removeTargetContacts
     * @param array $params
     * @return VkResponse
    */
    public function removeTargetContacts(array $params): VkResponse {
        return $this->vk->send("ads.removeTargetContacts", $params);
    }
    
    /**
     * Сохраняет результат поиска похожей аудитории.
     * https://dev.vk.com/method/ads.saveLookalikeRequestResult
     * @param array $params
     * @return VkResponse
    */
    public function saveLookalikeRequestResult(array $params): VkResponse {
        return $this->vk->send("ads.saveLookalikeRequestResult", $params);
    }
    
    /**
     * Предоставляет доступ к аудитории ретаргетинга другому рекламному кабинету. В результате выполнения метода возвращается идентификатор аудитории для указанного кабинета.
     * https://dev.vk.com/method/ads.shareTargetGroup
     * @param array $params
     * @return VkResponse
    */
    public function shareTargetGroup(array $params): VkResponse {
        return $this->vk->send("ads.shareTargetGroup", $params);
    }
    
    /**
     * Редактирует рекламные объявления.
     * https://dev.vk.com/method/ads.updateAds
     * @param array $params
     * @return VkResponse
    */
    public function updateAds(array $params): VkResponse {
        return $this->vk->send("ads.updateAds", $params);
    }
    
    /**
     * Редактирует рекламные кампании.
     * https://dev.vk.com/method/ads.updateCampaigns
     * @param array $params
     * @return VkResponse
    */
    public function updateCampaigns(array $params): VkResponse {
        return $this->vk->send("ads.updateCampaigns", $params);
    }
    
    /**
     * Редактирует клиентов рекламного агентства.
     * https://dev.vk.com/method/ads.updateClients
     * @param array $params
     * @return VkResponse
    */
    public function updateClients(array $params): VkResponse {
        return $this->vk->send("ads.updateClients", $params);
    }
    
    /**
     * Добавляет или редактирует администраторов и/или наблюдателей в рекламный кабинет.
     * https://dev.vk.com/method/ads.updateOfficeUsers
     * @param array $params
     * @return VkResponse
    */
    public function updateOfficeUsers(array $params): VkResponse {
        return $this->vk->send("ads.updateOfficeUsers", $params);
    }
    
    /**
     * Редактирует аудиторию ретаргетинга.
     * https://dev.vk.com/method/ads.updateTargetGroup
     * @param array $params
     * @return VkResponse
    */
    public function updateTargetGroup(array $params): VkResponse {
        return $this->vk->send("ads.updateTargetGroup", $params);
    }
    
    /**
     * Редактирует пиксель ретаргетинга.
     * https://dev.vk.com/method/ads.updateTargetPixel
     * @param array $params
     * @return VkResponse
    */
    public function updateTargetPixel(array $params): VkResponse {
        return $this->vk->send("ads.updateTargetPixel", $params);
    }
    
}