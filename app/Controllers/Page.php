<?php

namespace App\Controllers;

class page extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }
    public function admin()
    {
        return view('dashboard_admin');
    }
}
