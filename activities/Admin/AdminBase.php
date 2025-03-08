<?php

namespace Admin;
class AdminBase
{

    private string $currentDomain;
    private string $basePath;

    public function __construct()
    {
        $this->currentDomain = CURRENT_DOMAIN;
        $this->basePath = BASE_PATH;
    }

     protected function redirect($url): void
    {
        header('Location: ' . trim($this->currentDomain, '/ ') . '/' . trim($url));
        exit();
    }

    protected function redirectBack($url): void
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }


    protected function saveImage($image, $address, $name = null): false|string
    {
        if ($name) {
            $image_ext = explode('/', $image['type'])[1];
            $image_name = $name . '.' . $image_ext;
        } else {
            $image_ext = explode('/', $image['type'])[1];
            $image_name = date("Y-m-d-H-i-s") . '.' . $image_ext;
        }

        $image_temp = $image['tmp_name'];
        $image_path = 'public/' . $address . '/';
        if (is_uploaded_file($image_temp)) {
            if (move_uploaded_file($image_temp, $image_path . $image_name)) {
                return $image_path . $image_name;
            } else {
                return false;
            }

        } else {
            return false;
        }
    }


    protected function removeImage($path)
    {

        // $path = trim($this->basePath,'/ ').'/'.trim($path,'/ ');
        // $path = trim($this->currentDomain,'/ ').'/'.trim($path,'/ ');
        $path = trim($path,'/ ');
        if(file_exists($path)){
             unlink($path);
        }else{
            return  'false';
        }
    }

}