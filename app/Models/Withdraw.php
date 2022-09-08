<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Withdraw extends Model
{
    use HasFactory;

    public function userr()
    {
        return $this->belongsTo(User::class ,'user_id', 'id');
    }
}
