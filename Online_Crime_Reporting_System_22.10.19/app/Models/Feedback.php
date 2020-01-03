<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    // protected $fillable = [
    //     'crimeCategoryName'
    // ];

    public function user() //cityName
    {
        return $this->belongsTo(User::class);
    }

    public function complain() //complainName
    {
        return $this->belongsTo(Complain::class);
    }
}
