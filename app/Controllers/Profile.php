<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Profile extends Controller {

    public function index()
    {
        $userModel = new UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);

        $data = [
            'title' => 'Perfil',
            'userInfo' => $userInfo
        ];

        return view('profile/index', $data);
    }

}