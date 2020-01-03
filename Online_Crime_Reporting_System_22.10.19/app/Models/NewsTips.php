<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsTips extends Model
{
    protected $fillable = [
        'admin_id', 
        'title',
        'slug',   
        'description',  
        'type', 
        'image_video',
    ];
}
