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
        $db = new \Database\Database();
        $setting = $db->select('SELECT * FROM settings')->fetch();
        $menus = $db->select('SELECT * FROM menus WHERE parent_id IS NULL')->fetchAll();
        $topSelectedPosts = $db->select('SELECT posts.*,
        (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count ,
        (SELECT name FROM users WHERE users.id = posts.user_id) AS user_name,
        (SELECT title FROM categories WHERE categories.id = posts.categories_id) AS category_name 
        FROM posts WHERE selected = 1 ORDER BY created_at DESC LIMIT 0,3')->fetchAll();

        view('template.app.index',['setting'=>$setting , 'menus' => $menus ,'topSelectedPosts' => $topSelectedPosts ]);
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
