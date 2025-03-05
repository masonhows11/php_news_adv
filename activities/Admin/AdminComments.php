<?php

namespace Admin;

class AdminComments
{
    public function index()
    {
        require_once (BASE_PATH.'/template/admin/comments/index.php');
    }

    public function approved()
    {

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