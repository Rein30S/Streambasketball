<?php

namespace App\Controllers;

use App\Models\UserModel;


class Login extends BaseController{

    public function index()
    {
        return view('login_page');
    }

    public function process()
    {
        $users = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $dataUser = $users->where([
            'email' => $email,
        ])->first();
        if ($dataUser) {
            if ($password == $dataUser->password) {
                session()->set([
                    'email' => $dataUser->email,
                    'name' => $dataUser->nama_lengkap,
                    'role' => $dataUser->level,
                    'logged_in' => TRUE
                ]);
                if($dataUser->level == 'user'){
                    return redirect()->to(base_url('user'));    
                }
                if($dataUser->level == 'free'){
                    return redirect()->to(base_url('userfree'));
                }
            } else {
                session()->setFlashdata('error', 'Email & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Email & Password Salah');
            return redirect()->back();
        }
    }
    
    function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}