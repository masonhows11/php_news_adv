<?php



namespace Admin;
use database\Database;

require "AdminBase.php";


class AdminCategory extends AdminBase
{

    public function index()
    {
        $db = new Database();
        $categories = $db->select('SELECT * FROM categories ORDER BY `id` DESC ');
        require_once (BASE_PATH.'/template/admin/category/index.php');
    }
    public function create()
    {

        require_once (BASE_PATH.'/template/admin/category/create.php');
    }

    public function store($request)
    {
        //  dd(array_values($request));
        $db = new Database();
        $db->insert('categories',array_keys($request),array_values($request));
        $this->redirect('admin/category');
    }

    public function edit()
    {
        echo "admin category edit method";
    }

    public function update()
    {
        echo "admin category update method";
    }

    public function delete()
    {
        echo "admin category delete method";
    }
}