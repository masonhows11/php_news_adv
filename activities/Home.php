<?php

use JetBrains\PhpStorm\NoReturn;

class Home
{


    private string $currentDomain;
    private string $basePath;

    public function __construct()
    {

        $this->currentDomain = CURRENT_DOMAIN;
        $this->basePath = BASE_PATH;
    }
    public function index(): void
    {
        view('template.app.index');
    }

    #[NoReturn] protected function redirect($url): void
    {
        header('Location: ' . trim($this->currentDomain, '/ ') . '/' . trim($url));
        exit();
    }

    #[NoReturn] protected function redirectBack($url = null): void
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    public function show($post)
    {

    }

    public function category($category)
    {

    }


    public function commentStore($request)
    {

    }

    public function aboutUs(): void
    {

        view('template.app.about');
    }

    public function contactUs(): void
    {
        view('template.app.contact');
    }
}
