<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Seed at least five students without creating duplicates.
     */
    public function run(): void
    {
        $students = [
            [
                'student_name' => 'Amina Nansubuga',
                'first_name' => 'Amina',
                'email' => 'amina.nansubuga@example.com',
                'phone' => '0701000001',
                'gender' => 'Female',
                'course_of_study' => 'Bachelor of Business Computing',
            ],
            [
                'student_name' => 'Brian Okello',
                'first_name' => 'Brian',
                'email' => 'brian.okello@example.com',
                'phone' => '0701000002',
                'gender' => 'Male',
                'course_of_study' => 'Bachelor of Business Computing',
            ],
            [
                'student_name' => 'Cynthia Namusoke',
                'first_name' => 'Cynthia',
                'email' => 'cynthia.namusoke@example.com',
                'phone' => '0701000003',
                'gender' => 'Female',
                'course_of_study' => 'Bachelor of Business Computing',
            ],
            [
                'student_name' => 'Daniel Mugisha',
                'first_name' => 'Daniel',
                'email' => 'daniel.mugisha@example.com',
                'phone' => '0701000004',
                'gender' => 'Male',
                'course_of_study' => 'Bachelor of Business Computing',
            ],
            [
                'student_name' => 'Esther Akello',
                'first_name' => 'Esther',
                'email' => 'esther.akello@example.com',
                'phone' => '0701000005',
                'gender' => 'Female',
                'course_of_study' => 'Bachelor of Business Computing',
            ],
        ];

        foreach ($students as $student) {
            Student::updateOrCreate(
                ['email' => $student['email']],
                $student
            );
        }
    }
}
