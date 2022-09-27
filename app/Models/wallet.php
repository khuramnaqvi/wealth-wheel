<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WealthWheel;
use App\Models\UserWallet;
use App\Models\User;


class wallet extends Model
{
    use HasFactory;

    public function purchase_wheel()
    {
        return $this->belongsTo(WealthWheel::class,'wheel_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public function payout()
    {
        return $this->hasMany(UserWallet::class,'wheel_id', 'wheel_id')->where();
    }
}
