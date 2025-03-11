<?php

namespace Admin;

use Database\Database;

class AdminUsers extends AdminBase
{

    public function index()
    {
        $db = new Database();
        $users = $db->select('SELECT * FROM users ORDER BY `id` ASC')->fetchAll();
        require_once(BASE_PATH . "/template/admin/users/index.php");

    }

    public function edit($id)
    {
        $db = new Database();
        $user = $db->select('SELECT * FROM users WHERE id = ?;', [$id])->fetch();
        require_once(BASE_PATH . "/template/admin/users/edit.php");
    }

    public function update($request, $id)
    {
       
        $db = new Database();
        $user = $db->select('SELECT * FROM users WHERE id = ?;', [$id])->fetch();
        if(empty($user)){

            $this->redirectBack();
        }
        $db->update('users',$id,array_keys($request),$request);
        $this->redirect('admin/users');
    }

    public function access($id)
    {

        $db = new Database();
        $user = $db->select('SELECT * FROM users WHERE id = ?;', [$id])->fetch();
        if (empty($user)) {
            $this->redirectBack();
        }
        if ($user['permission'] == 'user') {
            $db->update('users', $id, ['permission'], ['admin']);
        } else {
            $db->update('users', $id, ['permission'], ['user']);
        }
        $this->redirect('admin/users');


    }

    public function delete($id)
    {
        $db = new Database();
        $db->delete('users', $id);
        $this->redirect('admin/users');
    }

}