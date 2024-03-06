<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('blog/homepage');
    }

    public function singlepost()
    {
        return view('single-post');
    }
}
