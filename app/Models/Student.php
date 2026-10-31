<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
    //One student has many registrations
public function registrations():HasMany
{
    return
    $this-> hasMany(Registration::class);
}
//one can register for many courses
public function course():BelongsToMany
{
     return
    $this-> belongsToMany(Student::class,
    'registration')
    ->withPivot('id','registration_date','status')
    ->withTimestamps();
}
}
