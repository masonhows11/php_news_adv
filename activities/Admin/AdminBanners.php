<?php

namespace Admin;

use database\Database;

require "AdminBase.php";
class AdminBanners
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
        $db = new Database();
        // Columns that are present in the query but not in the table
        // will prevent the query from executing correctly.
        $db->insert('banners', array_keys($request), $request);
        $this->redirect('admin/category');
    }

    public function edit($id)
    {
        $db = new Database();
        $banner = $db->select('SELECT * FROM banners WHERE id = ?;',[$id])->fetch();
        require_once(BASE_PATH . '/template/admin/banner/edit.php');
    }

    public function update($request,$id)
    {
        $db = new Database();
        $result = $db->update('banners',$id,array_keys($request),$request);
        $this->redirect('admin/banners');
    }

    public function delete($id)
    {
        $db = new Database();
        $db->delete('categories',$id);
        $this->redirect('admin/banners');
    }
}