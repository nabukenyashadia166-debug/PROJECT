<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{

    protected $fillable = [
        'course_code',
        'course_name',
        'email',
        'description',
        'credit_units',
    ];

public function registrations():HasMany
{
    return
    $this-> hasMany(Registration::class);
}
public function course():BelongsToMany
{
    return
    $this-> belongsToMany(Student::class,
    'registrations')
    'registration')
    ->withPivot('id','registration_date','status')
    ->withTimestamps();
}
}
