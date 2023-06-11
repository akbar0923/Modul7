<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('user')->insert([
            'username' => 'muhbar',
            'email' => 'muhbar@gmail.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
        ]);
    }
}