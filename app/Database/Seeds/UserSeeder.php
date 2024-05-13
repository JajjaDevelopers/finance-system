<?php

namespace App\Database\Seeds;

use App\Libraries\HandlePassword;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //user data
        $password = HandlePassword::hashPassword('12345678');
        $data = [
        "name" => 'Jajja Felix',
        "email" => 'devjaja@gmail.com',
        "password" => $password,
        ];

        $this->db->table('users')->insert($data);
    }
}
