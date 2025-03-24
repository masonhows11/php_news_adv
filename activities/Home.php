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


    public function store_comment($request)
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
