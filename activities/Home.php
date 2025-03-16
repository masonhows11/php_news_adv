<?php

class Home
{

    public function index()
    {

        view('template.app.index');
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
