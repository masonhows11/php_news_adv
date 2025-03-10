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
        require_once(BASE_PATH . '/template/admin/banners/index.php');
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
        if ($request['image']) {
            $db->insert('banners', array_keys($request), $request);
            $this->redirect('admin/banners');
        } else {
            $this->redirect('admin/banners');
        }


    }

    public function edit($id)
    {
        $db = new Database();
        $banner = $db->select('SELECT * FROM banners WHERE id = ?;', [$id])->fetch();
        require_once(BASE_PATH . '/template/admin/banners/edit.php');
    }

    public function update($request, $id)
    {
        $db = new Database();

        // if user upload new image
        if ($request['image']['tmp_name'] != null) {
            $banner = $db->select('SELECT * FROM banners WHERE id = ?;', [$id])->fetch();
            $this->removeImage($banner['image']);
            $request['image'] = $this->saveImage($request['image'], 'banners');
        } else {
            unset($request['image']);
        }
        $db->update('banners', $id, array_keys($request), $request);
        $this->redirect('admin/banners');
    }

    public function changeStatus($id)
    {
        $db = new Database();


        $banner = $db->select('SELECT * FROM banners WHERE id = ?;', [$id])->fetch();

        if ($banner['status'] === 1) {

            $result = $banner;
            $result['status'] = 0;

            // dd($result);
            // dd( 'status 0');
            // dd(array_values($result));

            $db->update('banners', $id, array_keys($result), $result);

        } elseif($banner['status'] === 0) {

            $result = $banner;
            $result['status'] = 1;

            // dd(array_values($result));
            // dd($result);
            // dd( 'status 1');
            
            $db->update('banners', $id, array_keys($result), $result);

        }


        $this->redirect('admin/banners');
    }

    public function delete($id)
    {
        $db = new Database();
        $banner = $db->select('SELECT * FROM banners WHERE id = ?;', [$id])->fetch();
        if ($banner['image'] != null) {

            $this->removeImage($banner['image']);
        }

        $db->delete('banners', $id);
        $this->redirect('admin/banners');
    }
}