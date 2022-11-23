<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk;

class Rules {

    private object|array $response;

    public function __construct(object|array $response) {
        $this->response = $response;
    }

    /**
     * Список строк
     *
     * @param string|array $command
     * @param array $prefixes
     * @return bool - True, если текст сообщения совпадает с одной из команд
     */
    public function commandRule(string|array $command, array $prefixes = []): bool {
        $text = $this->response->message->text;

        if(is_array($command)) {
            foreach ($command as $com) {
                foreach ($prefixes as $prefix) {
                    if (strcasecmp($prefix . $com, $text) == 0) {
                        return true;
                    }
                }

                if (strcasecmp($com, $text) == 0) {
                    return true;
                }
            }
        } else {
            foreach ($prefixes as $prefix) {
                if (strcasecmp($prefix . $command, $text) == 0) {
                    return true;
                }
            }

            if (strcasecmp($command, $text) == 0) {
                return true;
            }
        }

        return false;
    }

    public function peerRule(): bool {
        return $this->response->message->peer_id != $this->response->message->from_id;
    }

    /**
     * Если прислали стикер или отлов определенного стикера по id
     *
     * @param string|int|null $sticker_id
     * @return bool
     */
    public function stickerRule(string|int $sticker_id = null): bool {
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
     * Если в сообщении есть вложения определенных типов
     * @param string|array $attachment_types
     * @return bool
     */
    public function attachmentsRule(string|array $attachment_types): bool {
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
    public function messageLengthRule(int $min_length): bool {
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
    public function forwardMessagesRule(): bool {
        return !empty($this->response->message->fwd_messages);
    }

    /**
     * Ответ на сообщение
     *
     * @return bool
     */
    public function replyMessagesRule(): bool {
        return !empty($this->response->message->reply_message);
    }

    /**
     * Если прикрепили карту
     *
     * @return bool
     */
    public function geoRule(): bool {
        return !empty($this->response->message->geo);
    }

    public function fromUserRule(): bool {

    }
}