<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function status()
    {
        if ($this->status == 'completed')
            return 'text-success';
        else
            return 'text-danger';
    }

    public function chanel()
    {
        return $this->belongsTo(Chanel::class, 'chanel_id');
    }
}
