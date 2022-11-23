<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Auth extends BaseMethod {

    /**
     * Проверяет правильность введённого номера (возможность его использования для регистрации или авторизации).
     * https://dev.vk.com/method/auth.checkPhone
     * @param array $params
     * @return VkResponse
    */
    public function checkPhone(array $params): VkResponse {
        return $this->vk->send("auth.checkPhone", $params);
    }
    
    /**
     * Позволяет восстановить доступ к аккаунту, используя код, полученный через SMS.

> Данный метод доступен только приложениям, имеющим доступ к [Прямой авторизации](api/direct-auth).
     * https://dev.vk.com/method/auth.restore
     * @param array $params
     * @return VkResponse
    */
    public function restore(array $params): VkResponse {
        return $this->vk->send("auth.restore", $params);
    }
    
}