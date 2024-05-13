<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\HandlePassword;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Config\Services;

class AuthController extends BaseController
{
    protected $users;
    protected $validation;
    public function __construct()
    {
        $this->users=new UserModel;
        $this->validation=Services::validation();
    }
    public function index()
    {
        //
        return view('frontpage/index.php');
    }
    /**
     * This function signs in a user into the system
     *
     * @return ResponseInterface|string|void
     */
    public function signUserIn()
    {
         if (!$this->validate($this->validation->getRuleGroup("loginRules"))) {
            $validationErrors = $this->validator->listErrors();
            $this->response->setStatusCode(422);
            return $this->response->setJSON(["message" => $validationErrors]);
         } else {
            $data =$this->request->getJsonVar();
            $this->authenticateUser($data->email,$data->password);
         }
        
    }
    /**
     * This function takes in user emain and password
     * It tries to validate provided user information with that stored
     * in the database
     */
    public function authenticateUser($email, $userpassword)
    {
        //verifying if user exists in the database
        $userInfo =$this->users->where('email',$email)->first();
        // return $this->response->setJSON($userInfo);
        if ($userInfo !== null) {
            $hashedpwd = $userInfo["password"];
            if (!HandlePassword::verifyPassword($userpassword, $hashedpwd)) {
                $this->response->setStatusCode(401);
                $this->response->setJSON(["message" => "Invalid Credentials"])->send();
            } else {
                $userInfo=[
                'full_name'=>$userInfo['name'],
                'id'=>$userInfo['id'],
                'user_role'=>$userInfo['role_as'],
                ];
                session()->set("loggedUser", $userInfo);
                $this->response->setJSON(["status" => "success"])->send();
            }
        }else{
             $this->response->setStatusCode(401);
             $this->response->setJSON(["message" => "An unauthorised user"])->send();
        }
    }
}
