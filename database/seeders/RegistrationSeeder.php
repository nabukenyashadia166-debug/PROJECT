<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Registration;
use App\Models\Student;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    /**
     * Seed sample student-course registrations without duplicates.
     */
    public function run(): void
    {
        $registrations = [
            ['student' => 'amina.nansubuga@example.com', 'course' => 'BUC3101'],
            ['student' => 'amina.nansubuga@example.com', 'course' => 'BUC3131'],
            ['student' => 'brian.okello@example.com', 'course' => 'BUC3131'],
            ['student' => 'brian.okello@example.com', 'course' => 'BUC3103'],
            ['student' => 'cynthia.namusoke@example.com', 'course' => 'BUC3101'],
            ['student' => 'cynthia.namusoke@example.com', 'course' => 'BUC3104'],
            ['student' => 'daniel.mugisha@example.com', 'course' => 'BUC3103'],
            ['student' => 'daniel.mugisha@example.com', 'course' => 'BUC3131'],
            ['student' => 'esther.akello@example.com', 'course' => 'BUC3104'],
            ['student' => 'esther.akello@example.com', 'course' => 'BUC3101'],
        ];

        foreach ($registrations as $item) {
            $student = Student::where('email', $item['student'])->firstOrFail();
            $course = Course::where('course_code', $item['course'])->firstOrFail();

            Registration::updateOrCreate(
                [
                    'student_id' => $student->id,
                    'course_id' => $course->id,
                ],
                [
                    'registration_date' => now()->toDateString(),
                    'status' => 'active',
                ]
            );
        }
    }
}
