<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkRequest;

abstract class BaseMethod {

    protected VkRequest $vk;

    public function __construct(VkRequest $vk) {
        $this->vk = $vk;
    }

}