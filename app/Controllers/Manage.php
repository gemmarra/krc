<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Manage extends BaseController
{
    public function index()
    {
        return view('manage/dashboard');
    }
}
