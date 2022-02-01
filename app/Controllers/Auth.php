<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller {

    public function __construct() {
        helper(['url', 'form']);
    }

    public function index()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function forgot()
    {
        return view('auth/forgot');
    }

    public function save()
    {
        // validating request
        // $validation = $this->validate([
        //     'name' => 'required',
        //     'email' => 'required|valid_email|is_unique[users.email]',
        //     'password' => 'required|min_length[5]|max_length[12]',
        //     'cpassword' => 'required|min_length[5]|max_length[12]|matches[password]',
        // ]);

        $validation = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Por favor informe seu nome'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Por favor informe seu email',
                    'valid_email' => 'Por favor informe um email válido',
                    'is_unique' => 'Este email já foi registado'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'Por favor informe sua senha',
                    'min_length' => 'A sua senha deve ter no mínimo 5 caracteres',
                    'max_length' => 'A sua senha deve ter no máximo 12 caracteres'
                ]
            ],
            'cpassword' => [
                'rules' => 'required|min_length[5]|max_length[12]|matches[password]',
                'errors' => [
                    'required' => 'Por favor confirme sua senha',
                    'min_length' => 'A sua senha deve ter no mínimo 5 caracteres',
                    'max_length' => 'A sua senha deve ter no máximo 12 caracteres',
                    'matches' => 'As senhas não correspondem.'
                ]
            ],
        ]);


        if(!$validation) {
            return view('auth/register', ['validation' => $this->validator]);
        } else {
            // register into db
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $values = [
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password)
            ];

            $userModel = new UserModel();
            $query = $userModel->insert($values);

            if(!$query) {
                return redirect()->back()->with('fail', 'Alguma coisa correu mal. Tente de novo.');
                // return redirect()->to('auth/register')->with('fail', 'Alguma coisa correu mal. Tente de novo.');
            } else {
                // return redirect()->to('auth/register')->with('success', 'Conta criada com sucesso. Seja bem-vindo!');

                return $this->check();
            }
        }

    }

    public function check()
    {
        // validation
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'Por favor informe seu email',
                    'valid_email' => 'Por favor informe um email válido',
                    'is_not_unique' => 'Este email não foi registado'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'Por favor informe sua senha',
                    'min_length' => 'A sua senha deve ter no mínimo 5 caracteres',
                    'max_length' => 'A sua senha deve ter no máximo 12 caracteres'
                ]
            ],
        ]);

        if (!$validation) {
            return view('auth/login', ['validation' => $this->validator]);
        } else {

            // check user

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $userModel = new UserModel();
            $user_info = $userModel->where('email', $email)->first();

            if(Hash::check($password, $user_info['password'])) {
                $user_id = $user_info['id'];
                session()->set('loggedUser', $user_id);
                return redirect()->to('dashboard');
            } else {
                session()->setFlashdata('fail', 'A senha informada está errada.');
                return redirect()->to('auth')->withInput();
            }
        }
    }

    public function logout()
    {
        if(session()->has('loggedUser')) {
            session()->remove('loggedUser');
            return redirect()->to('/auth?access=out')->with('fail', 'Você terminou a sessão.');
        }
    }
}