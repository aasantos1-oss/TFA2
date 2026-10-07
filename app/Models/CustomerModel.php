<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table            = 'customers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $allowedFields = [
        'full_name',
        'email',
        'phone',
    ];

    // Timestamps are managed manually (created_at set on INSERT)
    protected $useTimestamps = false;
}
