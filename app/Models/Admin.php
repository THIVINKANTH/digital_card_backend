<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
     protected $table = "admin";
    protected $fillable = [
        'id',
        'admin_name',
        'email',
        'email_verified_at',
        'password',
        // 'name',
        // 'mobile_no',
        // 'email',
        // 'password',
        // 'status',

    ];
    protected $hidden = [
        'password',

    ];
}
