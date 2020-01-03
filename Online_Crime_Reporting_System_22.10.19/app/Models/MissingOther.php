<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MissingOther extends Model
{
    protected $fillable = [
        'admin_id', //nullable
        'user_id', //nullable
        'missing_category_id', //nullable
        'missing_title',   
        'owner_name', //nullable  
        'description', //nullable 
        // 'location', 
        'address', 
        'phone',
        'status',
        'show',
        'image', 
        
    ];

    public function missing_category()
    {
        return $this->belongsTo(MissingCategory::class,'missing_category_id');
    }
}
