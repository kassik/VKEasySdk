<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Wrappers\Http;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;

class HttpClient {

    private const USER_AGENT = "Mozilla/5.0 (compatible; VkFlex SDK)";

    private Client $client;

    public function __construct(
        array $options = [],
        private $timeout = 30,
        private $connection_timeout = 10
    ) {
        $options[RequestOptions::TIMEOUT] = $this->timeout;
        $options[RequestOptions::CONNECT_TIMEOUT] = $this->connection_timeout;
        $options['headers']['User-Agent'] = self::USER_AGENT;

        $this->client = new Client($options);
    }

    public function send(string $method, string $url, array $options = []): ResponseInterface {
        return $this->client->request($method, $url, $options);
    }

    /**
     * @return Client
     */
    public function getClient(): Client {
        return $this->client;
    }



}