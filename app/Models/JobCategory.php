<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // ✅ Added

class JobCategory extends Model
{
    use SoftDeletes; // ✅ Added

    protected $fillable = ['name', 'description'];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'job_category_id');
    }
}
