<?php
namespace App\Controllers;

class User extends BaseController
{
    public function list()
    {
        $userModel = new \App\Models\UserModel();
        $data['users'] = $userModel->findAll();
        return view('templates/header')
            . view('user/list', $data)
            . view('templates/footer');
    }

    public function admin_list()
    {
        $userModel = new \App\Models\UserModel();
        $data['users'] = $userModel->findAll();
        return view('templates/header')
            . view('user/admin_list', $data)
            . view('templates/footer');
    }

    public function login()
    {
        $validation = \Config\Services::validation();
        $rules = [
            "email" => [
                "label" => "Email",
                "rules" => "required"
                //"rules" => "required|min_length[3]|max_length[20]|valid_email|is_unique[user.email]"
            ],
            "password" => [
                "label" => "Password",
                "rules" => "required"
                //"rules" => "required|min_length[8]|max_length[20]"
            ]
        ];
        $data = [];
        $session = session();
        if ($this->request->getMethod() == "post") {
            if ($this->validate($rules)) {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $user = model('UserModel')->authenticate($email, $password);
                if ($user) {
                    $session->set('logged_in', TRUE);
                    $session->set('user', $user);
                    return redirect()->to(base_url('/logged'));
                } else {
                    $session->setFlashdata('msg', 'Credenciales');
                }
            } else {
                $data["errors"] = $validation->getErrors();
            }
        }
        return view('pages/login', $data);

    }

    public function user_ok()
    {
        return view('templates/header')
            . view('pages/home')
            . view('templates/footer');
    }

    
    public function logout()
    {
        # To Do.
    }

}