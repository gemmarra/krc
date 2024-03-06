<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard');
    }

    public function singlepost()
    {
        return view('single-post');
    }
}
