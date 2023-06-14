<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
   

  

    
protected $table = 'admin_users';
    protected $fillable = [
        'fullname',
        'emailaddress',
        'password',
        'password_confirmation',
    ];
}
