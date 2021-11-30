<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Carbon\Carbon;
class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new User([
            
           'name'     => $row[0],
           'email'    => $row[1], 
           'password' => Hash::make($row[2]),

           'email_verified_at' => now(),
           
            'remember_token' => Str::random(10),
        ]);
    }
}