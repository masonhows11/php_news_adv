<?php

namespace Admin;

use database\Database;

class AdminPosts extends AdminBase
{
    public function index()
    {
        $db = new Database();
        // $posts = $db->select('SELECT * FROM posts ORDER BY `id` DESC ')->fetchAll();
        // $posts = $db->select("SELECT posts.*, categories.title AS category_name FROM posts LEFT JOIN categories on posts.categories_id = categories.id")->fetchAll();
        $posts = $db->select("SELECT posts.*, categories.title AS category_name , 
        users.name As user_name  FROM posts LEFT JOIN categories on posts.categories_id = categories.id LEFT JOIN users on posts.user_id = users.id ")->fetchAll();
        require_once(BASE_PATH . '/template/admin/posts/index.php');
    }

    public function create()
    {
        $db = new Database();
        $categories = $db->select('SELECT * FROM categories ORDER BY `id` ASC ')->fetchAll();
        require_once(BASE_PATH . '/template/admin/posts/create.php');
    }

    public function store($request)
    {

        $realTimeStamp = substr($request['published_at'], 0, 10);
        $request['published_at'] = date("Y-m-d H:i:s", (int)$realTimeStamp);
        $db = new Database();
        if ($request['categories_id'] != null) {
            $request['image'] = $this->saveImage($request['image'], 'post_image');
            if ($request['image']) {

                // Columns that are present in the query but not in the table
                // will prevent the query from executing correctly.
                $request = array_merge($request, ['user_id' => 1]);
                $db->insert('posts', array_keys($request), $request);
                $this->redirect('admin/posts');
            } else {
                $this->redirect('admin/posts');
            }
        } else {
            $this->redirect('admin/posts');
        }


    }

    public function edit($id)
    {

        $db = new Database();
        $categories = $db->select('SELECT * FROM categories ORDER BY `id` ASC ')->fetchAll();
        $post = $db->select('SELECT * FROM posts WHERE id = ?;', [$id])->fetch();
        require_once(BASE_PATH . '/template/admin/posts/edit.php');
    }

    public function update($request, $id)
    {
        // change timezone for fixed time hour/minute/seconds
        date_default_timezone_set('iran');

        $realTimeStamp = substr($request['published_at'], 0, 10);
        $request['published_at'] = date("Y-m-d H:i:s", (int)$realTimeStamp);
        ////
        $db = new Database();
        ////
        if ($request['categories_id'] != null) {

            // if user upload new image
            if ($request['image']['tmp_name'] != null) {
                $post = $db->select('SELECT * FROM posts WHERE id = ?;', [$id])->fetch();
                $this->removeImage($post['image']);
                $request['image'] = $this->saveImage($request['image'], 'post_image');
            } else {
                unset($request['image']);
            }
            // Columns that are present in the query but not in the table
            // will prevent the query from executing correctly.
            $request = array_merge($request, ['user_id' => 1]);
            $res = $db->update('posts', $id, array_keys($request), $request);
            $this->redirect('admin/posts');

        } else {

            $this->redirect('admin/posts');
        }

    }


    public function changeStatus($id)
    {
        $db = new Database();


        $banner = $db->select('SELECT * FROM posts WHERE id = ?;', [$id])->fetch();

        if ($banner['status'] == 1) {


            $db->update('posts', $id, ['status'], [2]);

        } elseif($banner['status'] == 2) {



            $db->update('posts', $id, ['status'], [1]);

        }



        $this->redirect('admin/posts');
    }

    public function delete($id)
    {
        $db = new Database();
        $post = $db->select('SELECT * FROM posts WHERE id = ?;', [$id])->fetch();
        if ($post['image'] != null) {

            $this->removeImage($post['image']);
        }
        $db->delete('posts', $id);
        $this->redirect('admin/posts');
    }
}