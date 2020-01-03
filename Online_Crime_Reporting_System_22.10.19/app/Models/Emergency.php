<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{

    public function user() //use details
    {
        return $this->belongsTo(User::class);
    }

    public function emergencyType() //use details
    {
        return $this->belongsTo(EmergencyType::class);
    }

}
