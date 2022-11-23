<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Wrappers\Http;

use Psr\Http\Message\ResponseInterface;
use VkEasySdk\Exceptions\VkJsonException;
use VkEasySdk\Utils;

class VkResponse {

    private ResponseInterface $response;

    public function __construct(ResponseInterface $response) {
        $this->response = $response;
    }

    /**
     * @return string
     */
    public function getBody(): string {
        return $this->response->getBody();
    }

    /**
     * @param bool $asArray
     * @return array|object
     * @throws VkJsonException
     */
    public function getJson(bool $asArray = false): array|object {
        return Utils::jsonValidate($this->getBody(), $asArray);
    }

    /**
     * @return int
     */
    public function getStatusCode(): int {
        return $this->response->getStatusCode();
    }

}