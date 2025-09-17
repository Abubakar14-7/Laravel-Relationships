<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // protected $table = "customers";
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
