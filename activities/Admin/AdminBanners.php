<?php

namespace Admin;

use database\Database;

// require "AdminBase.php";
class AdminBanners extends AdminBase
{
    public function index()
    {
        $db = new Database();
        $banners = $db->select('SELECT * FROM banners ORDER BY `id` DESC ')->fetchAll();
        require_once (BASE_PATH.'/template/admin/banners/index.php');
    }


    public function create()
    {
        require_once(BASE_PATH . '/template/admin/banners/create.php');
    }

    public function store($request)
    {
        // Columns that are present in the query but not in the table
        // will prevent the query from executing correctly.

        $db = new Database();

        // save image
        $request['image'] = $this->saveImage($request['image'], 'banners');
        if($request['image'])
        {
            $db->insert('banners', array_keys($request), $request);
            $this->redirect('admin/banners');
        }else {
            $this->redirect('admin/banners');
        }


    }

    public function edit($id)
    {
        $db = new Database();
        $banner = $db->select('SELECT * FROM banners WHERE id = ?;',[$id])->fetch();
        require_once(BASE_PATH . '/template/admin/banners/edit.php');
    }

    public function update($request,$id)
    {
        $db = new Database();

        // if user upload new image
        if ($request['image']['tmp_name'] != null) {
            $post = $db->select('SELECT * FROM posts WHERE id = ?;', [$id])->fetch();
            $this->removeImage($post['image']);
            $request['image'] = $this->saveImage($request['image'], 'post_image');
        } else {
            unset($request['image']);
        }

        $request = array_merge($request, ['user_id' => 1]);
        $result = $db->update('banners',$id,array_keys($request),$request);
        $this->redirect('admin/banners');
    }

    public function changeStatus()
    {

    }

    public function delete($id)
    {
        $db = new Database();
        $post = $db->select('SELECT * FROM banners WHERE id = ?;', [$id])->fetch();
        if ($post['image'] != null) {

            $this->removeImage($post['image']);
        }

        $db->delete('banners',$id);
        $this->redirect('admin/banners');
    }
}