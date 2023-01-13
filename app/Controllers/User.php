<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('user_page');
    }

    public function free()
    {
        return view('userfree_page');
    }
}
