<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseBenefit extends Model
{
    //

    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'course_id'
    ];
    
}