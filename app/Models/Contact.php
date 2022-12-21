<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id','id');
      
    }

    // public function qualifications()
    // {
    //     return $this->belongsTo(Qualification::class);
    // }
}
