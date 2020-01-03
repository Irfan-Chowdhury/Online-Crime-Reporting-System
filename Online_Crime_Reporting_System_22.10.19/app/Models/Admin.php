<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'fullname', 
        'username',
        'email',   
        'voterId',  
        'district', 
        'thana',
        'phone',
        'password',
        'image',
        
    ];
}
