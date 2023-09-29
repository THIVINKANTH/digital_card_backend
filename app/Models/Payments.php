<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $table = "payments";
    protected $fillable = ['id', 'plan_id', 'user_id', 'amount','payment_reference','payment_response','invoice_date','payment_status'];
}
