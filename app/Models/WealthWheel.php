<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\wallet;
use App\Models\UserWallet;

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

    public function wallet()
    {
        return $this->hasMany(wallet::class,'wheel_id', 'id');
    }

    public function payout_wheel()
    {
        return $this->hasMany(wallet::class,'wheel_id', 'id')->where('cog_percnt', 'given');
    }
    public function user_wallet()
    {
        return $this->belongsTo(UserWallet::class, 'id' ,'wheel_id');
    }

}
