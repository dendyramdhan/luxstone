<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User_bo extends Model
{
    protected $table= 'users';
    protected $fillable = ['userid', 'name', 'email', 'password', 'username', 'picture', 'level_user', 'del_stat'];
}
 