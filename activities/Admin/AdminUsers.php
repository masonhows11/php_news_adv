<?php

namespace Admin;

use Database\Database;

class AdminUsers extends AdminBase
{

    public function index()
    {
        $db = new Database();
        $users = $db->select('SELECT * FROM users ORDER BY `id` ASC')->fetch();
        require "template/admin/users/index.php";

    }

    public function edit($id)
    {
        $db = new Database();
        $user = $db->select('SELECT * FROM users WHERE id = ?;', [$id])->fetch();
        require "template/admin/users/edit.php";
    }

    public function update($request,$id)
    {
        $db = new Database();
        $this->redirect('admin/users');
    }

}