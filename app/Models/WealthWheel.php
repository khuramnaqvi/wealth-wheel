<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WealthWheel extends Model
{
    use HasFactory;
    protected $fillable = [
       'wheel_number',
       'wheel_name',
       'cog_price',
       'image',
       'user_id',
    ];

}
