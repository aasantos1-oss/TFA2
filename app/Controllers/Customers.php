<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data = [
            'title'   => 'Customer Accounts',
            'heading' => 'Customer Accounts',
            'customers' => [
                ['full_name' => 'Adrian Axel Santos', 'email' => 'adrian.santos@example.com', 'phone' => '(02) 555-0101'],
                ['full_name' => 'Maria Clara Reyes', 'email' => 'maria.reyes@example.com', 'phone' => '(02) 555-0102'],
                ['full_name' => 'Juan Dela Cruz', 'email' => 'juan.cruz@example.com', 'phone' => '(02) 555-0103'],
                ['full_name' => 'Sofia Ramirez', 'email' => 'sofia.ramirez@example.com', 'phone' => '(02) 555-0104'],
                ['full_name' => 'Paolo Santos', 'email' => 'paolo.santos@example.com', 'phone' => '(02) 555-0105'],
            ],
        ];

        return view('customers/index', $data);
    }
}
