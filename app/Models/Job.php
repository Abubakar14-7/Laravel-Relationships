<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // ✅ Added

class Job extends Model
{
     use SoftDeletes; // ✅ Added

    protected $fillable = ['title', 'description', 'location', 'salary'];
}
