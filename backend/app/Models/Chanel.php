<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chanel extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function curancy(){
        return $this->belongsTo(Currency::class,'currency_id');
    }
}
