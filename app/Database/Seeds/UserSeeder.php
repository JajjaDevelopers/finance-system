<?php

namespace App\Database\Seeds;

use App\Libraries\HandlePassword;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //user data
        $password = HandlePassword::hashPassword('root');
        $data = [
            "name" => 'wisaac',
            "email" => 'wisaac@gmail.com',
            "password" => $password,
        ];

        $this->db->table('users')->insert($data);
    }
}
