<?php

namespace Admin;

use Database\Database;

class AdminMenus extends AdminBase
{

    public function index()
    {
        $db = new Database();
        $menus = $db->select('SELECT * FROM meuns ORDER BY `id` ASC')->fetchAll();
        require_once(BASE_PATH . "/template/admin/menus/index.php");
    }

    public function create()
    {
        require_once(BASE_PATH . "/template/admin/menus/index.php");

        $this->redirect('admin/menus');
    }


    public function edit($id)
    {
        $db = new Database();
        $user = $db->select('SELECT * FROM menus WHERE id = ?;', [$id])->fetch();
        require_once(BASE_PATH . "/template/admin/menus/index.php");
    }


    public function update($request,$id)
    {
        $db = new Database();
        $menu = $db->select('SELECT * FROM menus WHERE id = ?;', [$id])->fetch();
        if(empty($menu)){

            $this->redirectBack();
        }
        //dd($request);
        $db->update('menus',$id,array_keys($request),$request);
        $this->redirect('admin/menus');
    }


    public function changeStatus($id)
    {
        $db = new Database();
        $user = $db->select('SELECT * FROM menus WHERE id = ?;', [$id])->fetch();
        if (empty($user)) {
            $this->redirectBack();
        }
        if ($user['permission'] == 'user') {
            $db->update('users', $id, ['permission'], ['admin']);
        } else {
            $db->update('users', $id, ['permission'], ['user']);
        }
        $this->redirect('admin/menus');
    }


    public function delete($id)
    {
        $db = new Database();
        $db->delete('menus', $id);
        $this->redirect('admin/menus');
    }




}