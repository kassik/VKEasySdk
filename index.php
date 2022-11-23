<?php
require_once 'vendor/autoload.php';

use VkEasySdk\Carousel\Carousel;
use VkEasySdk\Keyboard\Buttons\CallbackButton;
use VkEasySdk\Keyboard\Buttons\Color;
use VkEasySdk\Keyboard\Buttons\LinkButton;
use VkEasySdk\Keyboard\Buttons\LocationButton;
use VkEasySdk\Keyboard\Buttons\PayButton;
use VkEasySdk\Keyboard\Buttons\TextButton;
use VkEasySdk\Keyboard\Keyboard;
use VkEasySdk\Methods\Bot;
use VkEasySdk\State\FileState;
use VkEasySdk\State\State;
use VkEasySdk\VkCallback;

/**
 * Попробовать реализовать антифлуд систему
 * Генератор карусели https://dev.vk.com/api/bots/development/messages
 * Вспомогательная функция которая ищет макс размер фото в attachments
 */

$token = '94e849861e8c99b6fc2e45639153ca6224db5e42363711af8f94ef440a2858992b62cd42c25f45e0f6322';
$confirmation = 'c6744fcb';
$secret = 'a12o901228uqp12nn129uu';
$group_id = 150194836;

// echo '<pre>';

class MainState {
    use State;

    private array $states = ['name', 'age', 'sex'];

    protected function getStates(): array {
        return $this->states;
    }
}

$callback = new VkCallback($token, $confirmation, $secret, $group_id);
$callback->event('message_new', function (Bot $bot, $object, $group_id) {
    $state = new MainState($object);

    $keyboard = new Keyboard();
    $k = $keyboard
        ->create()
        ->add(new LocationButton(['callback' => 'done']))
        ->row()
        ->add(new TextButton('Text button', Color::POSITIVE, ['button' => 'one']))
        ->add(new LinkButton('Нажми меня', 'https://github.com/YoppiDev/VkEasySdk', payload: ['button' => 'two']))
        ->row()
        ->add(new CallbackButton('Callback кнопка', Color::PRIMARY, ['callback' => 'done']))
        ->row()
        ->add(new PayButton('action=transfer-to-group&group_id=150194836&aid=10', ['callback' => 'donew']))
        ->json();


    if($bot->rules()->commandRule('start', ['/', '!']) && $state->isCurrent('*')) {
        $ss = $bot->answer('Введите ваше имя', keyboard: $k);
        file_put_contents('text.json', $ss->getBody());
        $state->first();
    } elseif($state->isCurrent('name')) {
        $bot->answer('Введите ваш возраст');
        $state->next($object->message->text);
    } elseif($state->isCurrent('age')) {
        $bot->answer('Введите ваш пол');
        $state->next($object->message->text);
    } else {
        $state->finish($object->message->text);
        $bot->answer('Спасибо '.json_encode($state->getStateData()));
    }
});

$callback->listener(true);