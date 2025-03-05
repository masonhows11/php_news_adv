<?php



namespace Admin;
require "AdminBase.php";


class AdminCategory extends AdminBase
{

    public function index()
    {
        require_once (BASE_PATH.'/template/admin/category/index.php');
    }

    public function show()
    {
        echo "admin category show method";
    }
    public function create()
    {
        echo "admin category create method";
    }

    public function store()
    {
        echo "admin category store method";
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