<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Database extends BaseMethod {

    /**
     * Возвращает список кафедр университета по указанному факультету.
     * https://dev.vk.com/method/database.getChairs
     * @param array $params
     * @return VkResponse
    */
    public function getChairs(array $params): VkResponse {
        return $this->vk->send("database.getChairs", $params);
    }
    
    /**
     * Возвращает список городов.
     * https://dev.vk.com/method/database.getCities
     * @param array $params
     * @return VkResponse
    */
    public function getCities(array $params): VkResponse {
        return $this->vk->send("database.getCities", $params);
    }
    
    /**
     * Возвращает информацию о городах и регионах по их идентификаторам.
     * https://dev.vk.com/method/database.getCitiesById
     * @param array $params
     * @return VkResponse
    */
    public function getCitiesById(array $params): VkResponse {
        return $this->vk->send("database.getCitiesById", $params);
    }
    
    /**
     * Возвращает список стран.
     * https://dev.vk.com/method/database.getCountries
     * @param array $params
     * @return VkResponse
    */
    public function getCountries(array $params): VkResponse {
        return $this->vk->send("database.getCountries", $params);
    }
    
    /**
     * Возвращает информацию о странах по их идентификаторам
     * https://dev.vk.com/method/database.getCountriesById
     * @param array $params
     * @return VkResponse
    */
    public function getCountriesById(array $params): VkResponse {
        return $this->vk->send("database.getCountriesById", $params);
    }
    
    /**
     * Возвращает список факультетов.
     * https://dev.vk.com/method/database.getFaculties
     * @param array $params
     * @return VkResponse
    */
    public function getFaculties(array $params): VkResponse {
        return $this->vk->send("database.getFaculties", $params);
    }
    
    /**
     * Возвращает список станций метро
     * https://dev.vk.com/method/database.getMetroStations
     * @param array $params
     * @return VkResponse
    */
    public function getMetroStations(array $params): VkResponse {
        return $this->vk->send("database.getMetroStations", $params);
    }
    
    /**
     * Возвращает информацию об одной или нескольких станциях метро по их идентификаторам.
     * https://dev.vk.com/method/database.getMetroStationsById
     * @param array $params
     * @return VkResponse
    */
    public function getMetroStationsById(array $params): VkResponse {
        return $this->vk->send("database.getMetroStationsById", $params);
    }
    
    /**
     * Возвращает список регионов.
     * https://dev.vk.com/method/database.getRegions
     * @param array $params
     * @return VkResponse
    */
    public function getRegions(array $params): VkResponse {
        return $this->vk->send("database.getRegions", $params);
    }
    
    /**
     * Возвращает список классов, характерных для школ определенной страны.
     * https://dev.vk.com/method/database.getSchoolClasses
     * @param array $params
     * @return VkResponse
    */
    public function getSchoolClasses(array $params): VkResponse {
        return $this->vk->send("database.getSchoolClasses", $params);
    }
    
    /**
     * Возвращает список школ.
     * https://dev.vk.com/method/database.getSchools
     * @param array $params
     * @return VkResponse
    */
    public function getSchools(array $params): VkResponse {
        return $this->vk->send("database.getSchools", $params);
    }
    
    /**
     * Возвращает список высших учебных заведений.
     * https://dev.vk.com/method/database.getUniversities
     * @param array $params
     * @return VkResponse
    */
    public function getUniversities(array $params): VkResponse {
        return $this->vk->send("database.getUniversities", $params);
    }
    
}