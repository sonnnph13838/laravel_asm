<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function register($params)
    {
        $data = array_merge($params['cols'],
            ['password' => Hash::make($params['cols']['password'])]
        );
        $res = DB::table($this->table)->insert($data);
        return $res;
    }
}
