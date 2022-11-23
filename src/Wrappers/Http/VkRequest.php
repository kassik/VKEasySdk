<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Wrappers\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use VkEasySdk\Exceptions\VkJsonException;

class VkRequest {

    /**
     * Ссылка для работы с api
     */
    private const API_URL = "https://api.vk.com/method/";

    /**
     * Версия api
     */
    private const VERSION_API = 5.131;


    public function __construct(private string $access_token,
                                private $client = new HttpClient(['base_uri' => self::API_URL])) {}


    /**
     * @param string $method
     * @param array $params
     * @param int $try_count
     * @return VkResponse
     * @throws VkJsonException
     */
    private function request(string $method, array $params = [], int $sleep = 0, int $try_count = 0): VkResponse {
        usleep($sleep);
        $params['access_token'] = $params['access_token'] ?? $this->access_token;
        $params['v'] = $params['v'] ?? self::VERSION_API;

        $response = $this->client->send('POST', $method, ['form_params' => $params]);
        $response = new VkResponse($response);
        $json = $response->getJson();

        if(isset($json->error)) {
            $error_code = $json->error->error_code;

            // Если много запросов в секунду либо однотипных, сделаем 3 попытки исправить это
            if($error_code == 6 || $error_code == 9) {
                if($try_count < 3) {
                    return $this->request($method, $params, 1.5 * 1000000, $try_count + 1);
                }
            }
        }

        return $response;
    }

    /**
     * @param string $method
     * @param array $params
     * @return VkResponse
     * @throws VkJsonException
     */
    public function send(string $method, array $params = []): VkResponse {
        return $this->request($method, $params);
    }

    /**
     * @return HttpClient
     */
    public function getClient(): HttpClient {
        return $this->client;
    }


}