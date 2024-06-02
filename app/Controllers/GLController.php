<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Controllers\Traits\AuthDataTrait;

class GLController extends BaseController
{
    use AuthDataTrait;
    public function index()
    {
        //
        return view('generalLedger/index.php', $this->getAuthData());
    }

    // Customers admin menu page
    public function customerAdminMenu()
    {
        // new customers, customer categories, customers list

        return "This will be the customers admin menu";
    }
}
