<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class LeadForms extends BaseMethod {

    /**
     * Создаёт форму сбора заявок.
     * https://dev.vk.com/method/leadForms.create
     * @param array $params
     * @return VkResponse
    */
    public function create(array $params): VkResponse {
        return $this->vk->send("leadForms.create", $params);
    }
    
    /**
     * Удаляет форму сбора заявок.
     * https://dev.vk.com/method/leadForms.delete
     * @param array $params
     * @return VkResponse
    */
    public function delete(array $params): VkResponse {
        return $this->vk->send("leadForms.delete", $params);
    }
    
    /**
     * Возвращает информацию о форме сбора заявок.
     * https://dev.vk.com/method/leadForms.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("leadForms.get", $params);
    }
    
    /**
     * Возвращает заявки формы.
     * https://dev.vk.com/method/leadForms.getLeads
     * @param array $params
     * @return VkResponse
    */
    public function getLeads(array $params): VkResponse {
        return $this->vk->send("leadForms.getLeads", $params);
    }
    
    /**
     * Возвращает URL для загрузки обложки для формы.
     * https://dev.vk.com/method/leadForms.getUploadURL
     * @param array $params
     * @return VkResponse
    */
    public function getUploadURL(array $params): VkResponse {
        return $this->vk->send("leadForms.getUploadURL", $params);
    }
    
    /**
     * Возвращает список форм сообщества.
     * https://dev.vk.com/method/leadForms.list
     * @param array $params
     * @return VkResponse
    */
    public function list(array $params): VkResponse {
        return $this->vk->send("leadForms.list", $params);
    }
    
    /**
     * Обновляет форму сбора заявок.
     * https://dev.vk.com/method/leadForms.update
     * @param array $params
     * @return VkResponse
    */
    public function update(array $params): VkResponse {
        return $this->vk->send("leadForms.update", $params);
    }
    
}