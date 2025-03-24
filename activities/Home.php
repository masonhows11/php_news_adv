<?php

class Home extends \Admin\AdminBase
{

    public function index()
    {

        view('template.app.index');
    }

    public function show($post)
    {

    }

    public function category($category)
    {

    }


    public function commentStore($request)
    {

    }

    public function aboutUs()
    {
        view('template.app.about');
    }

    public function contactUs()
    {
        view('template.app.contact');
    }
}
