<?php

namespace App\Controllers;
use App\Models\m_user;
use App\Models\m_tpu;

class Admin extends BaseController
{
    public function Home()
    {
        return view('admin/home');
    }
    
}
