<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function currency(){
        return $this->belongsTo(Currency::class,'currency_id');
    }

    public function status(){
        if ($this->status=='completed')
            return 'text-success';
        else
            return 'text-danger';
    }
}
