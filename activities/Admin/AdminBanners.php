<?php

namespace Admin;

class AdminBanners
{
    public function index()
    {
        require_once (BASE_PATH.'/template/admin/banners/index.php');
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