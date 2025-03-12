<?php

namespace Admin;

use Database\Database;

class AdminMenus extends AdminBase
{

    public function index()
    {
        $db = new Database();
        // $menus = $db->select('SELECT * FROM menus ORDER BY `id` ASC')->fetchAll();
        $menus = $db->select('SELECT  m1.*, m2.name AS parent_name 
                                  FROM menus m1 LEFT JOIN menus m2 
                                  ON m1.parent_id = m2.id ORDER BY `id` ASC')->fetchAll();
        // dd($menus);
        require_once(BASE_PATH . "/template/admin/menus/index.php");
    }

    public function create()
    {
        $db = new Database();
        $menus = $db->select('SELECT * FROM menus ORDER BY `id` ASC')->fetchAll();
        require_once(BASE_PATH . "/template/admin/menus/create.php");
        $this->redirect('admin/menus');
    }

    public function store($request)
    {
        $db = new Database();
        $db->insert('menus',array_keys(array_filter($request)), array_filter($request));
        $this->redirect('admin/menus');
    }


    public function edit($id)
    {
        $db = new Database();
        $menus = $db->select('SELECT * FROM menus ORDER BY `id` ASC')->fetchAll();
        $menu = $db->select('SELECT * FROM menus WHERE id = ?;', [$id])->fetch();
        require_once(BASE_PATH . "/template/admin/menus/edit.php");
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


    //    public function changeStatus($id)
    //    {
    //        $db = new Database();
    //        $user = $db->select('SELECT * FROM menus WHERE id = ?;', [$id])->fetch();
    //        if (empty($user)) {
    //            $this->redirectBack();
    //        }
    //        if ($user['status'] == 1) {
    //            $db->update('menus', $id, ['status'], ['1']);
    //        } else {
    //            $db->update('menus', $id, ['status'], ['2']);
    //        }
    //        $this->redirect('admin/menus');
    //    }


    public function delete($id)
    {
        $db = new Database();
        $db->delete('menus', $id);
        $this->redirect('admin/menus');
    }




}