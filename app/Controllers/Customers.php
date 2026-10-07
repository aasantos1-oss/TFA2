<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $model = new CustomerModel();
        $data = [
            'title'     => 'Customer Accounts',
            'heading'   => 'Customer Accounts',
            'customers' => $model->orderBy('id', 'ASC')->findAll(),
        ];

        return view('customers/index', $data);
    }
}
