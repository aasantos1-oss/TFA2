<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title'   => 'User Accounts',
            'heading' => 'User Accounts',
            'users' => [
                ['username' => 'admin', 'full_name' => 'Adrian Santos', 'role' => 'Administrator'],
                ['username' => 'maria_r', 'full_name' => 'Maria Reyes', 'role' => 'Staff'],
                ['username' => 'juan_d', 'full_name' => 'Juan Dela Cruz', 'role' => 'Staff'],
                ['username' => 'sofia_ram', 'full_name' => 'Sofia Ramirez', 'role' => 'Cashier'],
                ['username' => 'paolo_s', 'full_name' => 'Paolo Santos', 'role' => 'Cashier'],
            ],
        ];

        return view('users/index', $data);
    }
}
