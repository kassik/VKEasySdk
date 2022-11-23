<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk;


use JetBrains\PhpStorm\Pure;
use VkEasySdk\Wrappers\Http\VkRequest;
use VkEasySdk\Methods\{Account,
    Ads,
    Adsweb,
    AppWidgets,
    Apps,
    Auth,
    Board,
    Database,
    Docs,
    Donut,
    DownloadedGames,
    Execute,
    Fave,
    Friends,
    Gifts,
    Groups,
    LeadForms,
    Likes,
    Market,
    Messages,
    Newsfeed,
    Notes,
    Notifications,
    Orders,
    Pages,
    Photos,
    Podcasts,
    Polls,
    PrettyCards,
    Search,
    Secure,
    Stats,
    Status,
    Storage,
    Store,
    Stories,
    Streaming,
    Users,
    Utils,
    Video,
    Wall,
    Widgets};

class VkClient {

    private VkRequest $vk;

    public function __construct(string $access_token, string $version = '5.131') {
        if(PHP_MAJOR_VERSION < 8) {
            trigger_error('Requires at least php 8 version', E_USER_ERROR);
        }

        $this->vk = new VkRequest($access_token);
    }

    #[Pure] public function account(): Account {
        return new Account($this->vk);
    }

    #[Pure] public function ads(): Ads {
        return new Ads($this->vk);
    }

    #[Pure] public function adsweb(): Adsweb {
        return new Adsweb($this->vk);
    }

    #[Pure] public function appWidgets(): AppWidgets {
        return new AppWidgets($this->vk);
    }

    #[Pure] public function apps(): Apps {
        return new Apps($this->vk);
    }

    #[Pure] public function auth(): Auth {
        return new Auth($this->vk);
    }

    #[Pure] public function board(): Board {
        return new Board($this->vk);
    }

    #[Pure] public function database(): Database {
        return new Database($this->vk);
    }

    #[Pure] public function docs(): Docs {
        return new Docs($this->vk);
    }

    #[Pure] public function donut(): Donut {
        return new Donut($this->vk);
    }

    #[Pure] public function downloadedGames(): DownloadedGames {
        return new DownloadedGames($this->vk);
    }

    #[Pure] public function fave(): Fave {
        return new Fave($this->vk);
    }

    #[Pure] public function friends(): Friends {
        return new Friends($this->vk);
    }

    #[Pure] public function gifts(): Gifts {
        return new Gifts($this->vk);
    }

    #[Pure] public function groups(): Groups {
        return new Groups($this->vk);
    }

    #[Pure] public function leadForms(): LeadForms {
        return new LeadForms($this->vk);
    }

    #[Pure] public function likes(): Likes {
        return new Likes($this->vk);
    }

    #[Pure] public function market(): Market {
        return new Market($this->vk);
    }

    #[Pure] public function messages(): Messages {
        return new Messages($this->vk);
    }

    #[Pure] public function newsfeed(): Newsfeed {
        return new Newsfeed($this->vk);
    }

    #[Pure] public function notes(): Notes {
        return new Notes($this->vk);
    }

    #[Pure] public function notifications(): Notifications {
        return new Notifications($this->vk);
    }

    #[Pure] public function orders(): Orders {
        return new Orders($this->vk);
    }

    #[Pure] public function pages(): Pages {
        return new Pages($this->vk);
    }

    #[Pure] public function photos(): Photos {
        return new Photos($this->vk);
    }

    #[Pure] public function podcasts(): Podcasts {
        return new Podcasts($this->vk);
    }

    #[Pure] public function polls(): Polls {
        return new Polls($this->vk);
    }

    #[Pure] public function prettyCards(): PrettyCards {
        return new PrettyCards($this->vk);
    }

    #[Pure] public function search(): Search {
        return new Search($this->vk);
    }

    #[Pure] public function secure(): Secure {
        return new Secure($this->vk);
    }

    #[Pure] public function stats(): Stats {
        return new Stats($this->vk);
    }

    #[Pure] public function status(): Status {
        return new Status($this->vk);
    }

    #[Pure] public function storage(): Storage {
        return new Storage($this->vk);
    }

    #[Pure] public function store(): Store {
        return new Store($this->vk);
    }

    #[Pure] public function stories(): Stories {
        return new Stories($this->vk);
    }

    #[Pure] public function streaming(): Streaming {
        return new Streaming($this->vk);
    }

    #[Pure] public function users(): Users {
        return new Users($this->vk);
    }

    #[Pure] public function utils(): Utils {
        return new Utils($this->vk);
    }

    #[Pure] public function video(): Video {
        return new Video($this->vk);
    }

    #[Pure] public function wall(): Wall {
        return new Wall($this->vk);
    }

    #[Pure] public function widgets(): Widgets {
        return new Widgets($this->vk);
    }

    #[Pure] public function execute(): Execute {
        return new Execute($this->vk);
    }
}