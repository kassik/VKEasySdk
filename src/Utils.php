<?php

namespace VkEasySdk;

use VkEasySdk\Exceptions\VkJsonException;

/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */
class Utils {

    /**
     * Json validator and decoder
     *
     * @param string $json
     * @param bool $asArray
     * @return mixed
     * @throws VkJsonException
     */
    public static function jsonValidate(string $json, bool $asArray = false): mixed {
        $json = json_decode($json, $asArray);

        if(json_last_error() != JSON_ERROR_NONE) {
            throw new VkJsonException(json_last_error_msg(), json_last_error());
        }

        return $json;
    }

}