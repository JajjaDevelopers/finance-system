<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Controllers\Traits\AuthDataTrait;

class DashboardController extends BaseController
{
    use AuthDataTrait;
    public function index()
    {
        //
        return view('dashboard/index.php',$this->getAuthData());
    }
    public function logOut()
    {
        session()->remove("loggedUser");
        session()->destroy();
        return redirect()->to(base_url("/"))->with("message", "You have been Logged Out");
    }
}
