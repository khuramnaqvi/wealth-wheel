<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WealthWheel;


class wallet extends Model
{
    use HasFactory;

    public function purchase_wheel()
    {
        return $this->belongsTo(WealthWheel::class,'wheel_id', 'id');
    }
}
