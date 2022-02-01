<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Dashboard extends Controller {

    public function index()
    {
        $userModel = new UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserID);

        $data = [
            'title' => 'Dashboard',
            'userInfo' => $userInfo
        ];

        return view('dashboard/index', $data);
    }

}