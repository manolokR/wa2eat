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
            . view('user/list', $data)
            . view('templates/footer');
    }

    public function login()
    {
        return view('pages/login', []);
    }


    public function loginAjax(){
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
        
        $session = session();
        $userModel = model('UserModel');

        if ($this->request->getMethod() == "post") {
            if ($this->validate($rules)) {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $user = model('UserModel')->authenticate($email, $password);
                if ($user) {
                    $session->set('logged_in', TRUE);
                    $session->set('user', $user);
                    return $this->response->setStatusCode(200)->setJSON([
                        'text' => 'Usuario logeado'
                    ]);
                            } else {
                    return $this->response->setStatusCode(403)->setJSON([
                        'text' => 'Usuario no logeado'
                    ]);
                }
            } else {
                return $this->output->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode([
                    'text' => 'Email o pasword incorrecto'
                ]));
        }
        }
        return $this->response->setStatusCode(400)->setJSON([
            'text' => 'Solo se aceptan post request'
        ]);


    }
    public function user_ok()
    {
        $session = session();
        $usuario = $session->__get('user');
        $data['usuario'] = $usuario;
        $userModel = model('UserModel');

        return view('templates/header',$data)
            . view('pages/home')
            . view('templates/footer');
    }


    public function logout()
    {
        # To Do.
    }

    public function unauthorized()
    {
        return view('templates/header')
            . view('user/unauthorized')
            . view('templates/footer');
    }

    public function registerAjax()
    {   
        $validation = \Config\Services::validation();
        $rules = [
            "username" => [
                "label" => "Username",
                "rules" => "required"
            ],
            "email" => [
                "label" => "Email",
                "rules" => "required|valid_email|is_unique[user.email]"
            ],
            "password" => [
                "label" => "Password",
                "rules" => "required|min_length[8]|max_length[20]"
            ]
        ];
        $data = [];

        $session = session();
        $userModel = model('UserModel');

        if ($this->request->getMethod() == "post") {
            if ($this->validate($rules)) {
                // Código de registro y respuesta exitosa
                $name = $this->request->getVar('username');
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $userData = [
                    'username' => $name,
                    'email' => $email,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                ];
                $userModel->saveUser($email, $name, $password);
                $newUser = $userModel->authenticate($email, $password);
                $session->set('logged_in', TRUE);
                $session->set('user', $newUser);

                return $this->response->setStatusCode(200)->setJSON([
                    'text' => 'Usuario logeado'
                ]);
            } else {
                $error_message = '';

                if ($validation->getError('email')) {
                    $error_message = 'Email ya en uso o inválido';
                } elseif ($validation->getError('password')) {
                    $error_message = 'La contraseña debe tener entre 8 y 20 caracteres';
                } else {
                    $error_message = 'Error desconocido';
                }

                return $this->response->setStatusCode(400)->setJSON([
                    'text' => $error_message
                ]);
            }
        }

        return $this->response->setStatusCode(400)->setJSON([
            'text' => 'Solo se aceptan post request'
        ]);
    }



}