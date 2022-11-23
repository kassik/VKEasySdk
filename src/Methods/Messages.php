<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Methods;

use VkEasySdk\Wrappers\Http\VkResponse;

class Messages extends BaseMethod {

    /**
     * Добавляет в мультидиалог нового пользователя.
     * https://dev.vk.com/method/messages.addChatUser
     * @param array $params
     * @return VkResponse
    */
    public function addChatUser(array $params): VkResponse {
        return $this->vk->send("messages.addChatUser", $params);
    }
    
    /**
     * Позволяет разрешить отправку сообщений от сообщества текущему пользователю.
     * https://dev.vk.com/method/messages.allowMessagesFromGroup
     * @param array $params
     * @return VkResponse
    */
    public function allowMessagesFromGroup(array $params): VkResponse {
        return $this->vk->send("messages.allowMessagesFromGroup", $params);
    }
    
    /**
     * Создаёт беседу с несколькими участниками.
     * https://dev.vk.com/method/messages.createChat
     * @param array $params
     * @return VkResponse
    */
    public function createChat(array $params): VkResponse {
        return $this->vk->send("messages.createChat", $params);
    }
    
    /**
     * Удаляет сообщение.
     * https://dev.vk.com/method/messages.delete
     * @param array $params
     * @return VkResponse
    */
    public function delete(array $params): VkResponse {
        return $this->vk->send("messages.delete", $params);
    }
    
    /**
     * Позволяет удалить фотографию мультидиалога.
     * https://dev.vk.com/method/messages.deleteChatPhoto
     * @param array $params
     * @return VkResponse
    */
    public function deleteChatPhoto(array $params): VkResponse {
        return $this->vk->send("messages.deleteChatPhoto", $params);
    }
    
    /**
     * Удаляет беседу.
     * https://dev.vk.com/method/messages.deleteConversation
     * @param array $params
     * @return VkResponse
    */
    public function deleteConversation(array $params): VkResponse {
        return $this->vk->send("messages.deleteConversation", $params);
    }
    
    /**
     * Позволяет запретить отправку сообщений от сообщества текущему пользователю.
     * https://dev.vk.com/method/messages.denyMessagesFromGroup
     * @param array $params
     * @return VkResponse
    */
    public function denyMessagesFromGroup(array $params): VkResponse {
        return $this->vk->send("messages.denyMessagesFromGroup", $params);
    }
    
    /**
     * Редактирует сообщение.
     * https://dev.vk.com/method/messages.edit
     * @param array $params
     * @return VkResponse
    */
    public function edit(array $params): VkResponse {
        return $this->vk->send("messages.edit", $params);
    }
    
    /**
     * Изменяет название беседы.
     * https://dev.vk.com/method/messages.editChat
     * @param array $params
     * @return VkResponse
    */
    public function editChat(array $params): VkResponse {
        return $this->vk->send("messages.editChat", $params);
    }
    
    /**
     * Возвращает список входящих личных сообщений текущего пользователя или сообщества.
     * https://dev.vk.com/method/messages.get
     * @param array $params
     * @return VkResponse
    */
    public function get(array $params): VkResponse {
        return $this->vk->send("messages.get", $params);
    }
    
    /**
     * Возвращает сообщения по conversation_message_id.
     * https://dev.vk.com/method/messages.getByConversationMessageId
     * @param array $params
     * @return VkResponse
    */
    public function getByConversationMessageId(array $params): VkResponse {
        return $this->vk->send("messages.getByConversationMessageId", $params);
    }
    
    /**
     * Возвращает сообщения по их идентификаторам.
     * https://dev.vk.com/method/messages.getById
     * @param array $params
     * @return VkResponse
    */
    public function getById(array $params): VkResponse {
        return $this->vk->send("messages.getById", $params);
    }
    
    /**
     * Возвращает информацию о беседе.
     * https://dev.vk.com/method/messages.getChat
     * @param array $params
     * @return VkResponse
    */
    public function getChat(array $params): VkResponse {
        return $this->vk->send("messages.getChat", $params);
    }
    
    /**
     * Получает данные для превью чата с приглашением по ссылке.
     * https://dev.vk.com/method/messages.getChatPreview
     * @param array $params
     * @return VkResponse
    */
    public function getChatPreview(array $params): VkResponse {
        return $this->vk->send("messages.getChatPreview", $params);
    }
    
    /**
     * Позволяет получить список пользователей мультидиалога по его `id`.
     * https://dev.vk.com/method/messages.getChatUsers
     * @param array $params
     * @return VkResponse
    */
    public function getChatUsers(array $params): VkResponse {
        return $this->vk->send("messages.getChatUsers", $params);
    }
    
    /**
     * Позволяет получить список участников беседы.
     * https://dev.vk.com/method/messages.getConversationMembers
     * @param array $params
     * @return VkResponse
    */
    public function getConversationMembers(array $params): VkResponse {
        return $this->vk->send("messages.getConversationMembers", $params);
    }
    
    /**
     * Возвращает список бесед пользователя.
     * https://dev.vk.com/method/messages.getConversations
     * @param array $params
     * @return VkResponse
    */
    public function getConversations(array $params): VkResponse {
        return $this->vk->send("messages.getConversations", $params);
    }
    
    /**
     * Позволяет получить беседу по её идентификатору.
     * https://dev.vk.com/method/messages.getConversationsById
     * @param array $params
     * @return VkResponse
    */
    public function getConversationsById(array $params): VkResponse {
        return $this->vk->send("messages.getConversationsById", $params);
    }
    
    /**
     * Возвращает список диалогов текущего пользователя или сообщества.
Актуальный метод: [`messages.getConversations`](method/messages.getConversations).
     * https://dev.vk.com/method/messages.getDialogs
     * @param array $params
     * @return VkResponse
    */
    public function getDialogs(array $params): VkResponse {
        return $this->vk->send("messages.getDialogs", $params);
    }
    
    /**
     * Возвращает историю сообщений для указанного диалога.
     * https://dev.vk.com/method/messages.getHistory
     * @param array $params
     * @return VkResponse
    */
    public function getHistory(array $params): VkResponse {
        return $this->vk->send("messages.getHistory", $params);
    }
    
    /**
     * Возвращает материалы диалога или беседы.
     * https://dev.vk.com/method/messages.getHistoryAttachments
     * @param array $params
     * @return VkResponse
    */
    public function getHistoryAttachments(array $params): VkResponse {
        return $this->vk->send("messages.getHistoryAttachments", $params);
    }
    
    /**
     * Возвращает список важных сообщений пользователя.
     * https://dev.vk.com/method/messages.getImportantMessages
     * @param array $params
     * @return VkResponse
    */
    public function getImportantMessages(array $params): VkResponse {
        return $this->vk->send("messages.getImportantMessages", $params);
    }
    
    /**
     * Метод отдает пользователей, которые подписались на определенные интенты.
[https://dev.vk.com/api/bots/overview](api/bots/overview)
     * https://dev.vk.com/method/messages.getIntentUsers
     * @param array $params
     * @return VkResponse
    */
    public function getIntentUsers(array $params): VkResponse {
        return $this->vk->send("messages.getIntentUsers", $params);
    }
    
    /**
     * Получает ссылку для приглашения пользователя в беседу.
     * https://dev.vk.com/method/messages.getInviteLink
     * @param array $params
     * @return VkResponse
    */
    public function getInviteLink(array $params): VkResponse {
        return $this->vk->send("messages.getInviteLink", $params);
    }
    
    /**
     * Возвращает текущий статус и дату последней активности указанного пользователя.
     * https://dev.vk.com/method/messages.getLastActivity
     * @param array $params
     * @return VkResponse
    */
    public function getLastActivity(array $params): VkResponse {
        return $this->vk->send("messages.getLastActivity", $params);
    }
    
    /**
     * Возвращает обновления в личных сообщениях пользователя.
     * https://dev.vk.com/method/messages.getLongPollHistory
     * @param array $params
     * @return VkResponse
    */
    public function getLongPollHistory(array $params): VkResponse {
        return $this->vk->send("messages.getLongPollHistory", $params);
    }
    
    /**
     * Возвращает данные, необходимые для [подключения к Long Poll серверу](api/user-long-poll/getting-started).
     * https://dev.vk.com/method/messages.getLongPollServer
     * @param array $params
     * @return VkResponse
    */
    public function getLongPollServer(array $params): VkResponse {
        return $this->vk->send("messages.getLongPollServer", $params);
    }
    
    /**
     * Возвращает информацию о том, разрешена ли отправка сообщений от сообщества пользователю.
     * https://dev.vk.com/method/messages.isMessagesFromGroupAllowed
     * @param array $params
     * @return VkResponse
    */
    public function isMessagesFromGroupAllowed(array $params): VkResponse {
        return $this->vk->send("messages.isMessagesFromGroupAllowed", $params);
    }
    
    /**
     * Позволяет присоединиться к чату по ссылке-приглашению.
     * https://dev.vk.com/method/messages.joinChatByInviteLink
     * @param array $params
     * @return VkResponse
    */
    public function joinChatByInviteLink(array $params): VkResponse {
        return $this->vk->send("messages.joinChatByInviteLink", $params);
    }
    
    /**
     * Помечает беседу как отвеченную либо снимает отметку.
     * https://dev.vk.com/method/messages.markAsAnsweredConversation
     * @param array $params
     * @return VkResponse
    */
    public function markAsAnsweredConversation(array $params): VkResponse {
        return $this->vk->send("messages.markAsAnsweredConversation", $params);
    }
    
    /**
     * Помечает сообщения как важные либо снимает отметку.
     * https://dev.vk.com/method/messages.markAsImportant
     * @param array $params
     * @return VkResponse
    */
    public function markAsImportant(array $params): VkResponse {
        return $this->vk->send("messages.markAsImportant", $params);
    }
    
    /**
     * Помечает беседу как важную либо снимает отметку.
     * https://dev.vk.com/method/messages.markAsImportantConversation
     * @param array $params
     * @return VkResponse
    */
    public function markAsImportantConversation(array $params): VkResponse {
        return $this->vk->send("messages.markAsImportantConversation", $params);
    }
    
    /**
     * Помечает сообщения как прочитанные.
     * https://dev.vk.com/method/messages.markAsRead
     * @param array $params
     * @return VkResponse
    */
    public function markAsRead(array $params): VkResponse {
        return $this->vk->send("messages.markAsRead", $params);
    }
    
    /**
     * Закрепляет сообщение.
     * https://dev.vk.com/method/messages.pin
     * @param array $params
     * @return VkResponse
    */
    public function pin(array $params): VkResponse {
        return $this->vk->send("messages.pin", $params);
    }
    
    /**
     * Исключает из мультидиалога пользователя, если текущий пользователь или сообщество является администратором беседы либо текущий пользователь пригласил исключаемого пользователя.
     * https://dev.vk.com/method/messages.removeChatUser
     * @param array $params
     * @return VkResponse
    */
    public function removeChatUser(array $params): VkResponse {
        return $this->vk->send("messages.removeChatUser", $params);
    }
    
    /**
     * Восстанавливает удаленное сообщение.
     * https://dev.vk.com/method/messages.restore
     * @param array $params
     * @return VkResponse
    */
    public function restore(array $params): VkResponse {
        return $this->vk->send("messages.restore", $params);
    }
    
    /**
     * Возвращает список найденных личных сообщений текущего пользователя по введенной строке поиска.
     * https://dev.vk.com/method/messages.search
     * @param array $params
     * @return VkResponse
    */
    public function search(array $params): VkResponse {
        return $this->vk->send("messages.search", $params);
    }
    
    /**
     * Позволяет искать диалоги.
     * https://dev.vk.com/method/messages.searchConversations
     * @param array $params
     * @return VkResponse
    */
    public function searchConversations(array $params): VkResponse {
        return $this->vk->send("messages.searchConversations", $params);
    }
    
    /**
     * Возвращает список найденных диалогов текущего пользователя по введенной строке поиска.
     * https://dev.vk.com/method/messages.searchDialogs
     * @param array $params
     * @return VkResponse
    */
    public function searchDialogs(array $params): VkResponse {
        return $this->vk->send("messages.searchDialogs", $params);
    }
    
    /**
     * Отправляет сообщение.
     * https://dev.vk.com/method/messages.send
     * @param array $params
     * @return VkResponse
    */
    public function send(array $params): VkResponse {
        return $this->vk->send("messages.send", $params);
    }
    
    /**
     * Отправляет событие с действием, которое произойдет при нажатии на callback-кнопку.
     * https://dev.vk.com/method/messages.sendMessageEventAnswer
     * @param array $params
     * @return VkResponse
    */
    public function sendMessageEventAnswer(array $params): VkResponse {
        return $this->vk->send("messages.sendMessageEventAnswer", $params);
    }
    
    /**
     * Изменяет статус набора текста пользователем в диалоге.
     * https://dev.vk.com/method/messages.setActivity
     * @param array $params
     * @return VkResponse
    */
    public function setActivity(array $params): VkResponse {
        return $this->vk->send("messages.setActivity", $params);
    }
    
    /**
     * Позволяет установить фотографию мультидиалога, загруженную с помощью метода.
     * https://dev.vk.com/method/messages.setChatPhoto
     * @param array $params
     * @return VkResponse
    */
    public function setChatPhoto(array $params): VkResponse {
        return $this->vk->send("messages.setChatPhoto", $params);
    }
    
    /**
     * Открепляет сообщение.
     * https://dev.vk.com/method/messages.unpin
     * @param array $params
     * @return VkResponse
    */
    public function unpin(array $params): VkResponse {
        return $this->vk->send("messages.unpin", $params);
    }
    
}