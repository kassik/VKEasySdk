<?php

namespace VkEasySdk\Methods;

class Adsweb extends BaseMethod {

    private const BASE_METHOD_NAME = 'adsweb.';

    /**
     *
     * https://dev.vk.com/method/adsweb.getAdCategories
     * @param array $params
     * @return object
     */
    public function getAdCategories(array $params): object
    {
        return $this->vk->send(self::BASE_METHOD_NAME . "getAdCategories", $params);
    }

    /**
     *
     * https://dev.vk.com/method/adsweb.getAdUnitCode
     * @param array $params
     * @return object
     */
    public function getAdUnitCode(array $params): object
    {
        return $this->vk->send(self::BASE_METHOD_NAME . "getAdUnitCode", $params);
    }

    /**
     *
     * https://dev.vk.com/method/adsweb.getAdUnits
     * @param array $params
     * @return object
     */
    public function getAdUnits(array $params): object
    {
        return $this->vk->send(self::BASE_METHOD_NAME . "getAdUnits", $params);
    }

    /**
     *
     * https://dev.vk.com/method/adsweb.getFraudHistory
     * @param array $params
     * @return object
     */
    public function getFraudHistory(array $params): object
    {
        return $this->vk->send(self::BASE_METHOD_NAME . "getFraudHistory", $params);
    }

    /**
     *
     * https://dev.vk.com/method/adsweb.getSites
     * @param array $params
     * @return object
     */
    public function getSites(array $params): object
    {
        return $this->vk->send(self::BASE_METHOD_NAME . "getSites", $params);
    }

    /**
     *
     * https://dev.vk.com/method/adsweb.getStatistics
     * @param array $params
     * @return object
     */
    public function getStatistics(array $params): object
    {
        return $this->vk->send(self::BASE_METHOD_NAME . "getStatistics", $params);
    }

}

