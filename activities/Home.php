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

    public function aboutUs(): void
    {

        view('template.app.about',['hh',222,'dddd']);
    }

    public function contactUs(): void
    {
        view('template.app.contact');
    }
}
