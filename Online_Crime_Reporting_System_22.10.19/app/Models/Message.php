<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'user_id', 
        'admin_id',
        'subject',   
        'message',  
        'roll', 
        'status', 
    ];

    public function userName() //userName
    {
        return $this->belongsTo(User::class,'user_id'); //for laravel default problem
    }
}
