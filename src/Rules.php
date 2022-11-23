<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk;

use VkEasySdk\Exceptions\VkJsonException;
use VkEasySdk\Methods\Bot;

class Rules {

    private object|array $response;

    private Bot $bot;

    public function __construct(Bot $bot, object|array $response) {
        $this->bot = $bot;
        $this->response = $response;
    }

    /**
     * Список строк
     *
     * @param string|array $command
     * @param string|array $prefix
     * @return bool - True, если текст сообщения совпадает с одной из команд
     */
    public function command(string|array $command, string|array $prefix): bool {
        $prefix = is_array($prefix) ? implode('|', $prefix) : $prefix;
        $command = is_array($command) ? implode('|', $command) : $command;
        return preg_match("#({$prefix})({$command})#iu", $this->response->message->text);
    }

    /**
     * Проверка на то, что сообщение отправлено в чат
     * @return bool
     */
    public function isChat(): bool {
        return $this->response->message->peer_id != $this->response->message->from_id;
    }

    /**
     * Если прислали стикер или отлов определенного стикера по id
     *
     * @param string|int|null $sticker_id
     * @return bool
     */
    public function isSticker(string|int $sticker_id = null): bool {
        if(!isset($this->response->message->attachments)) {
            return false;
        } elseif (!isset($this->response->message->attachments[0]->sticker)) {
            return false;
        }

        if(!is_null($sticker_id)) {
            if(isset($this->response->message->attachments[0]->sticker->sticker_id)) {
                return $this->response->message->attachments[0]->sticker->sticker_id == $sticker_id;
            }
        } else {
            return true;
        }

        return false;
    }

    /**
     * Если прикрепили карту
     *
     * @return bool
     */
    public function isGeo(): bool {
        return !empty($this->response->message->geo);
    }

    /**
     * Админ беседы или нет. Если не указан user_id то будет брать id того кто отправил сообщение в беседу
     * @param int|null $user_id
     * @return bool
     */
    public function isAdmin(int $user_id = null): bool {
        $chat_id = $this->response->message->peer_id;
        $user_id = is_null($user_id) ? $this->response->message->from_id : $user_id;

        $members = $this->bot->messages()->getConversationMembers([
            'peer_id' => $chat_id,
        ])->getJson(true);

        foreach ($members['response']['items'] as $member) {
            if($member['member_id'] == $user_id) {
                return isset($member["is_admin"]);
            }
        }

        return false;
    }

    /**
     * Если в сообщении есть вложения определенных типов
     * @param string|array $attachment_types
     * @return bool
     */
    public function isAttachments(string|array $attachment_types): bool {
        if(empty($this->response->message->attachments)) {
            return false;
        }

        if(is_array($attachment_types)) {
            foreach ($this->response->message->attachments as $attachment) {
                foreach ($attachment_types as $type) {
                    if ($attachment->type == mb_strtolower($type)) {
                        return true;
                    }
                }
            }
        } else {
            foreach ($this->response->message->attachments as $attachment) {
                if ($attachment->type == mb_strtolower($attachment_types)) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Если сообщение превышает порог минимального кол-ва символов
     *
     * @param int $min_length
     * @return bool
     */
    public function messageLength(int $min_length): bool {
        if(!empty($this->response->message->text)) {
            return mb_strlen($this->response->message->text) > $min_length;
        }

        return false;
    }

    /**
     * Пересланное сообщение
     *
     * @return bool
     */
    public function forwardMessages(): bool {
        return !empty($this->response->message->fwd_messages);
    }

    /**
     * Ответ на сообщение
     *
     * @return bool
     */
    public function replyMessages(): bool {
        return !empty($this->response->message->reply_message);
    }

}