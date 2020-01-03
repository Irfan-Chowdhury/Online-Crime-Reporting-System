<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CriminalRecord extends Model
{
    protected $fillable = [
        'admin_id',
        'crimeCategory_id', 
        'name',
        'description',   
        'address',  
        'status', 
        'show',
        'image',
    ];

    public function crimeCategory()
    {
        return $this->belongsTo(CrimeCategory::class,'crimeCategory_id');
    }
}
