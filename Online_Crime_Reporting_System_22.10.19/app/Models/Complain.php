<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    // protected $fillable = [
    //     'crimeCategoryName'
    // ];


    public function crimeCategory() //crimeCategoryName
    {
        return $this->belongsTo(CrimeCategory::class,'crimeCategory_id'); //for laravel default problem
    }

    public function city() //cityName
    {
        return $this->belongsTo(City::class);
    }

    public function user() //cityName
    {
        return $this->belongsTo(City::class);
    }

    public function imageComplain()
    {
        return $this->hasMany(ImageComplain::class,'complain_id');
    }
}
