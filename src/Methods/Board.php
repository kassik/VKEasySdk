<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Board extends BaseMethod {

    /**
     * Создает новую тему в списке обсуждений группы.
     * https://dev.vk.com/method/board.addTopic
     * @param array $params
     * @return VkResponse
    */
    public function addTopic(array $params): VkResponse {
        return $this->vk->send("board.addTopic", $params);
    }
    
    /**
     * Закрывает тему в списке обсуждений группы (в такой теме невозможно оставлять новые сообщения).
     * https://dev.vk.com/method/board.closeTopic
     * @param array $params
     * @return VkResponse
    */
    public function closeTopic(array $params): VkResponse {
        return $this->vk->send("board.closeTopic", $params);
    }
    
    /**
     * Добавляет новый комментарий в обсуждении.
     * https://dev.vk.com/method/board.createComment
     * @param array $params
     * @return VkResponse
    */
    public function createComment(array $params): VkResponse {
        return $this->vk->send("board.createComment", $params);
    }
    
    /**
     * Удаляет сообщение темы в обсуждениях сообщества.
     * https://dev.vk.com/method/board.deleteComment
     * @param array $params
     * @return VkResponse
    */
    public function deleteComment(array $params): VkResponse {
        return $this->vk->send("board.deleteComment", $params);
    }
    
    /**
     * Удаляет тему в обсуждениях группы.
     * https://dev.vk.com/method/board.deleteTopic
     * @param array $params
     * @return VkResponse
    */
    public function deleteTopic(array $params): VkResponse {
        return $this->vk->send("board.deleteTopic", $params);
    }
    
    /**
     * Редактирует одно из сообщений в обсуждении сообщества.
     * https://dev.vk.com/method/board.editComment
     * @param array $params
     * @return VkResponse
    */
    public function editComment(array $params): VkResponse {
        return $this->vk->send("board.editComment", $params);
    }
    
    /**
     * Изменяет заголовок темы в списке обсуждений группы.
     * https://dev.vk.com/method/board.editTopic
     * @param array $params
     * @return VkResponse
    */
    public function editTopic(array $params): VkResponse {
        return $this->vk->send("board.editTopic", $params);
    }
    
    /**
     * Закрепляет тему в списке обсуждений группы (такая тема при любой сортировке выводится выше остальных).
     * https://dev.vk.com/method/board.fixTopic
     * @param array $params
     * @return VkResponse
    */
    public function fixTopic(array $params): VkResponse {
        return $this->vk->send("board.fixTopic", $params);
    }
    
    /**
     * Возвращает список сообщений в указанной теме.
     * https://dev.vk.com/method/board.getComments
     * @param array $params
     * @return VkResponse
    */
    public function getComments(array $params): VkResponse {
        return $this->vk->send("board.getComments", $params);
    }
    
    /**
     * Возвращает список тем в обсуждениях указанной группы.
     * https://dev.vk.com/method/board.getTopics
     * @param array $params
     * @return VkResponse
    */
    public function getTopics(array $params): VkResponse {
        return $this->vk->send("board.getTopics", $params);
    }
    
    /**
     * Открывает ранее закрытую тему (в ней станет возможно оставлять новые сообщения).
     * https://dev.vk.com/method/board.openTopic
     * @param array $params
     * @return VkResponse
    */
    public function openTopic(array $params): VkResponse {
        return $this->vk->send("board.openTopic", $params);
    }
    
    /**
     * Восстанавливает удаленное сообщение темы в обсуждениях группы.
     * https://dev.vk.com/method/board.restoreComment
     * @param array $params
     * @return VkResponse
    */
    public function restoreComment(array $params): VkResponse {
        return $this->vk->send("board.restoreComment", $params);
    }
    
    /**
     * Отменяет прикрепление темы в списке обсуждений группы (тема будет выводиться согласно выбранной сортировке).
     * https://dev.vk.com/method/board.unfixTopic
     * @param array $params
     * @return VkResponse
    */
    public function unfixTopic(array $params): VkResponse {
        return $this->vk->send("board.unfixTopic", $params);
    }
    
}