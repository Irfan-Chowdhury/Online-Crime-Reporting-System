<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MissingPerson extends Model
{
    protected $table = 'missing_persons';

    protected $fillable = [
        'admin_id', //nullable
        'user_id', //nullable
        'name',   
        'gender',  
        'age', 
        'physical_details', //nullable
        'description',  
        'address', //nullable
        'phone',   //nullable
        // 'division',
        // 'district',
        // 'thana',
        'status',
        'show',
        'image', 
        
    ];


}
