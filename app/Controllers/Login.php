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
        $login = $this->request->getPost('login');
        if($login){
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            if ($email == '' or $password == ''){
                $err = "Silahkan masukkan username dan password";
            }
            if(empty($err)){
                $dataUser = $users->where("email", $email)->first();
                if($dataUser['password'] != md5($password)){
                    $err = "Password Tidak Sesuai";
                }
            }
            if(empty($err)){
                $dataSesi = [
                    'id_user'=>$dataUser['id_user'],
                    'nama_lengkap'=>$dataUser['nama_lengkap'],
                    'email'=>$dataUser['email'],
                    'password'=>$dataUser['password'],
                    'level'=>$dataUser['level']
                ];
            }
            if($err){
                session()->setFlashdata('email', $email);
                session()->setFlashdata('error', $err);
                return redirect()->to("login");
            }
        }
        return view('user_premium');
    }
    
    function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}