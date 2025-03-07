<?php

namespace Admin;
use database\Database;

class AdminPosts
{
    public function index()
    {
        $db = new Database();
        $posts = $db->select('SELECT * FROM posts ORDER BY `id` DESC ')->fetchAll();
        require_once (BASE_PATH.'/template/admin/posts/index.php');
    }

    public function create()
    {
        $db = new Database();
        $categories = $db->select('SELECT * FROM categories ORDER BY `id` ASC ')->fetchAll();
        require_once(BASE_PATH . '/template/admin/posts/create.php');
    }

    public function store($request)
    {

        $db = new Database();
        $db->insert('posts', array_keys($request), $request);
        $this->redirect('admin/posts');
    }

    public function edit($id)
    {


        $db = new Database();
        $categories = $db->select('SELECT * FROM categories ORDER BY `id` ASC ')->fetchAll();
        $post = $db->select('SELECT * FROM posts WHERE id = ?;',[$id])->fetch();
        require_once(BASE_PATH . '/template/admin/posts/edit.php');
    }

    public function update($request,$id)
    {
        //dd($id);
        $db = new Database();
        $db->update('posts',$id,array_keys($request),$request);
        $this->redirect('admin/posts');
    }


    public function changeStatus()
    {
        
    }

    public function delete($id)
    {

        $db = new Database();
        $db->delete('posts',$id);
        $this->redirect('admin/posts');
    }
}