<?php

namespace App\Controllers;
use App\Models\m_user;

class Home extends BaseController
{
 
    public function index()
    {
        return view('Home');
    }
 
}
