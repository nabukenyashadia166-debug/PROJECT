<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Registration extends Model
{

    protected $fillable = [
        'student_id',
        'course_id',
        'registration_date',
        'status',
    ];
protected $casts =[
    'registration_date' => 'date'
];

public function student():BelongsToMany
{
    return
    $this-> belongTO(Student::class);
}

public function course():BelongsToMany
{
     return
    $this-> belongsToMany(Course::class);
}
}
