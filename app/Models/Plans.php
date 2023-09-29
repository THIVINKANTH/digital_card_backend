<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;
    protected $table = "plans";
    protected $fillable = ['id', 'plan_name', 'plan_price', 'plan_future','plan_status'];
}
