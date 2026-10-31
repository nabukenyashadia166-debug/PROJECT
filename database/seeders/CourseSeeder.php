<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Seed four sample courses without creating duplicates.
     */
    public function run(): void
    {
        $courses = [
            [
                'course_code' => 'BUC3101',
                'course_name' => 'Database Management Systems',
                'email' => 'buc3101@example.com',
                'description' => 'Database design, SQL and database management.',
                'credit_units' => 4,
            ],
            [
                'course_code' => 'BUC3131',
                'course_name' => 'Advanced Web Application Development',
                'email' => 'buc3131@example.com',
                'description' => 'Development of dynamic web applications using modern frameworks.',
                'credit_units' => 4,
            ],
            [
                'course_code' => 'BUC3103',
                'course_name' => 'Systems Analysis and Design',
                'email' => 'buc3103@example.com',
                'description' => 'Analysis, modelling and design of information systems.',
                'credit_units' => 3,
            ],
            [
                'course_code' => 'BUC3104',
                'course_name' => 'Computer Networks',
                'email' => 'buc3104@example.com',
                'description' => 'Fundamentals of computer networks and communication.',
                'credit_units' => 3,
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(
                ['course_code' => $course['course_code']],
                $course
            );
        }
    }
}
