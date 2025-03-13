<?php

namespace Admin;

use Database\Database;

class AdminSetting extends AdminBase
{


    public function index()
    {

        $db = new Database();
        $settings = $db->select('SELECT * FROM settings ORDER BY `id` ASC ')->fetchAll();
        require_once(BASE_PATH . '/template/admin/setting/index.php');
    }


    public function edit()
    {
        $db = new Database();
        $setting = $db->select('SELECT * FROM settings;')->fetch();
        require_once(BASE_PATH . '/template/admin/setting/edit.php');
    }


    public function update($request)
    {
        dd($request);
        $db = new Database();
        $setting = $db->select('SELECT * FROM settings;')->fetch();

        if ($request['logo']['tmp_name'] != null) {
            $this->removeImage($setting['logo']);
            $request['logo'] = $this->saveImage($request['logo'], 'setting_images','logo');
        } else {
            unset($request['logo']);
        }

        if ($request['icon']['tmp_name'] != null) {
            $this->removeImage($setting['icon']);
            $request['icon'] = $this->saveImage($request['icon'], 'setting_images','icon');
        } else {
            unset($request['icon']);
        }
        // Columns that are present in the query but not in the table
        // will prevent the query from executing correctly.
        if(!empty($setting)){
            $db->update('settings',$setting['id'],array_keys($request), $request);
        }else{
            $db->insert('settings',array_keys($request), $request);
        }
        $this->redirect('admin/setting');

    }


}