<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_key',
        'title',
        'cover_image',
        'content',
        'teaching_material',
        'robotics_kit_id',
    ];

    public function roboticsKit(): BelongsTo
    {
        return $this->belongsTo(RoboticsKit::class);
    }

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class);
    }
}
