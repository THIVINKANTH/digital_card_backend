<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;
    protected $table = "cards";
    protected $fillable = ['id', 'card_name', 'user_id', 'photo','card_logo','card_frame','card_background','card_color','card_type','first_name','middle_name','last_name','desgination','social_media_links','others'];
}
