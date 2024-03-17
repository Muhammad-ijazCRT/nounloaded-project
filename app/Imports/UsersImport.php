<?php

namespace App\Imports;

use App\Models\Admin;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        return new Admin([
            'name'     => $row['name'],
            'email'    => $row['email'],
            'admin_type' => $row['admin'],
            'password' => \Hash::make($row['password']),
        ]);
    }
}
