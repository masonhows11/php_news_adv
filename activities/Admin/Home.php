<?php

namespace Admin;

use Database\Database;


class Home extends AdminBase
{


    public function index()
    {
        //dd($_SESSION);
        $db = new  Database();
        $user = $db->select('SELECT * FROM users WHERE email = ? ', [$_SESSION['auth_user']])->fetch();
        require_once (BASE_PATH.'/template/admin/layouts/home.php');
    }
    
}