<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('user_page');
    }

    public function user1(){
        return view('user_trial');
    }
}
