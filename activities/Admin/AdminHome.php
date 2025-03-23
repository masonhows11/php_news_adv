<?php

namespace Admin;

use Database\Database;
require "AdminBase.php";

class AdminHome extends AdminBase
{


    public function index()
    {

        $db = new  Database();
        $user = $db->select('SELECT * FROM users WHERE email = ? ', [$_SESSION['auth_user']])->fetch();
        $category_count = $db->select('SELECT COUNT(*) FROM categories')->fetch();
        $admins_count = $db->select('SELECT COUNT(*) FROM users WHERE permission = ?',['admin'])->fetch();
        $users_count = $db->select('SELECT COUNT(*) FROM users WHERE permission = ?',['user'])->fetch();
        $posts_count = $db->select('SELECT COUNT(*) FROM posts')->fetch();
        $comments_count = $db->select('SELECT COUNT(*) FROM comments')->fetch();
        $unseen_count = $db->select('SELECT COUNT(*) FROM comments WHERE status = "unseen"')->fetch();
        $approved_count = $db->select('SELECT COUNT(*) FROM comments WHERE status = "approved"')->fetch();
        $most_viewed_posts = $db->select('SELECT * FROM posts ORDER BY views DESC LIMIT 0,5')->fetchAll();
        $post_comments = $db->select('SELECT posts.id, posts.title, COUNT(comments.post_id) AS comments_count
                                        FROM posts LEFT JOIN comments ON posts.id = comments.post_id GROUP BY posts.id ORDER BY comments_count DESC LIMIT 0,5;')->fetchAll();

        $last_comments = $db->select('SELECT comments.id , comments.comment , comments.status, users.name
                                        FROM comments , users WHERE comments.user_id = users.id ORDER BY comments.created_at DESC LIMIT 0,5;')->fetchAll();
        require_once (BASE_PATH.'/template/admin/layouts/home.php');
    }
    
}