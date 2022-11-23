<?php

use VkEasySdk\Wrappers\Http\VkResponse;

require_once 'vendor\autoload.php';

echo '<pre>';
$http = new \VkEasySdk\Wrappers\Http\HttpClient();
$response = $http->send('POST', 'https://api.vk.com/method/documentation.getMenu?lang=ru&menu_id=api_menu&access_token=anonym.eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhbm9ueW1faWQiOjEyNTEzODQzNTMsImFwcF9pZCI6NzU5ODc2OCwiaWF0IjoxNjQ5NjY5Nzg0LCJpc192ZXJpZmllZCI6ZmFsc2UsImV4cCI6MTY0OTc1NjE4NCwic2lnbmVkX3RpbWUiOm51bGx9.PZcRHumMpn1BycUpnMGa8f-bL9DWl_rLD26qyngkTWg&v=5.131');

$json = json_decode((string) $response->getBody(), true);
$methods = $json['response']['menu'][1];


foreach ($methods as $method) {
    $title = $method['title'];

    $code = "<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class " . $title . " extends BaseMethod {\r\n";

    foreach ($method['children'] as $children) {
        $name = $children['title'];
        $desc = $children['description'];
        $m = explode('.', $name);
        $code .= '
    /**
     * ' . $desc . '
     * https://dev.vk.com/method/'.$name.'
     * @param array $params
     * @return VkResponse
    */
    public function '.$m[1].'(array $params): VkResponse {
        return $this->vk->send("'.$name.'", $params);
    }
    ';


    }

    $code .= "\r\n".'}';

    file_put_contents('test/'.$title.'.php', $code);
}
