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
        require_once (BASE_PATH.'/template/admin/layouts/home.php');
    }
    
}