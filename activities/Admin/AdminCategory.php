<?php


namespace Admin;

use database\Database;

require "AdminBase.php";


class AdminCategory extends AdminBase
{

    public function index()
    {
        $db = new Database();
        $categories = $db->select('SELECT * FROM categories ORDER BY `id` DESC ')->fetchAll();
        require_once(BASE_PATH . '/template/admin/category/index.php');
    }

    public function create()
    {

        require_once(BASE_PATH . '/template/admin/category/create.php');
    }

    public function store($request)
    {

        $db = new Database();
        $db->insert('categories', array_keys($request), $request);
        $this->redirect('admin/category');
    }

    public function edit($id)
    {


        $db = new Database();
        $category = $db->select('SELECT * FROM categories WHERE id = ?;',[$id])->fetch();
        require_once(BASE_PATH . '/template/admin/category/edit.php');
    }

    public function update($id)
    {
        $db = new Database();

        $this->redirect('admin/category');
    }

    public function delete($id)
    {
        
        $db = new Database();
        $db->delete('categories',$id);
        $this->redirect('admin/category');
    }
}