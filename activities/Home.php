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
        ////
        /// nested query
        $topSelectedPosts = $db->select('SELECT posts.*,
        (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count ,
        (SELECT name FROM users WHERE users.id = posts.user_id) AS user_name,
        (SELECT title FROM categories WHERE categories.id = posts.categories_id) AS category_name 
        FROM posts WHERE selected = 1 ORDER BY created_at DESC LIMIT 0,3')->fetchAll();
        ////
        $breakingNews = $db->select('SELECT * FROM posts WHERE breaking_news = 1 ORDER BY created_at DESC LIMIT 0,2 ')->fetchAll();
        //// nested query
        $lastNews = $db->select('SELECT posts.*,
        (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count ,
        (SELECT name FROM users WHERE users.id = posts.user_id) AS user_name,
        (SELECT title FROM categories WHERE categories.id = posts.categories_id) AS category_name 
        FROM posts ORDER BY created_at DESC LIMIT 0,6')->fetchAll();

        $banner = $db->select('SELECT * FROM banners  LIMIT 0,1')->fetch();

        //// nested query
        $mostVisited = $db->select('SELECT posts.*,
        (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count ,
        (SELECT name FROM users WHERE users.id = posts.user_id) AS user_name,
        (SELECT title FROM categories WHERE categories.id = posts.categories_id) AS category_name 
        FROM posts ORDER BY views DESC LIMIT 0,3')->fetchAll();

        //// nested query
        $mostCommented = $db->select('SELECT posts.*,
               (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count ,
                (SELECT name FROM users WHERE users.id = posts.user_id) AS user_name,
                (SELECT title FROM categories WHERE categories.id = posts.categories_id) AS category_name 
                FROM posts ORDER BY comments_count DESC LIMIT 0,3')->fetchAll();

        $categories = $db->select('SELECT * FROM categories')->fetchAll();

        view('template.app.index', ['setting' => $setting, 'menus' => $menus,
            'topSelectedPosts' => $topSelectedPosts, 'breakingNews' => $breakingNews,
            'lastNews' => $lastNews, 'banner' => $banner, 'mostVisited' => $mostVisited,
            'mostCommented' => $mostCommented , 'categories' => $categories]);
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
        $id = $post;
        $db = new \Database\Database();
        $post = $db->select('SELECT posts.*,
        (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count ,
        (SELECT name FROM users WHERE users.id = posts.user_id) AS user_name,
        (SELECT id FROM users WHERE users.id = posts.user_id) AS user_id,
        (SELECT title FROM categories WHERE categories.id = posts.categories_id) AS category_name 
        FROM posts WHERE id = ? ORDER BY created_at DESC LIMIT 0,6',[$id])->fetch();

        //        $comments = $db->select('SELECT *,(SELECT name FROM users WHERE users.id = comments.user_id) AS user_name
        //        FROM comments WHERE post_id = ? AND status = "approved"',[$id])->fetchAll();

        $comments = $db->select('SELECT * FROM comments WHERE comments.status = "approved" AND comments.post_id = ?',[$id])->fetchAll();

        view('template.app.single',['post' => $post ,'comments' => $comments]);
    }

    public function category($id): void
    {
        $db = new \Database\Database();

        $category = $db->select('SELECT * FROM categories WHERE id = ?',[$id])->fetch();

        $posts = $db->select('SELECT posts.*,
                (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count ,
                (SELECT name FROM users WHERE users.id = posts.user_id) AS user_name,
                (SELECT title FROM categories WHERE categories.id = posts.categories_id) AS category_name 
                FROM posts WHERE categories_id = ? ORDER BY created_at DESC',[$id])->fetchAll();
        view('template.app.categories',['posts' => $posts,'category' => $category]);
    }


    #[NoReturn] public function commentStore($request): void
    {

        if(!checkAuth())
        {
            $this->redirect('login');
        }

        if(empty($request['name']) || empty($request['comment'])){
            flashMessage('comment_error','فیلد نام و دیدگاه الزامی هستند');
            $this->redirectBack();
        }

        $db = new \Database\Database();
        $db->insert('comments',
            ['name','comment','user_id','post_id'],
            [$request['name'],$request['comment'],$request['user'],$request['post']]);
        flashMessage('comment_success','دیدگاه شما با موفقیت ذخیره شد');
        $this->redirectBack();
       
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
