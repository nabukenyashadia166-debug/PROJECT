<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    protected $fillable = [
        'student_name',
        'first_name',
        'email',
        'phone',
        'gender',
        'course_of_study',
    ];

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'registrations')
            ->withPivot('id', 'registration_date', 'status')
            ->withTimestamps();
    }
}
