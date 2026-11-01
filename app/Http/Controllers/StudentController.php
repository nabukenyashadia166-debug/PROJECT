<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    private function rules($id = null): array
    {
        return [
            'student_name'    => 'required|string|max:255',
            'first_name'      => 'required|string|max:255',
            'email'           => ['required', 'email', 'max:255', Rule::unique('students', 'email')->ignore($id)],
            'phone'           => 'nullable|string|max:20',
            'gender'          => 'nullable|in:Male,Female,Other',
            'course_of_study' => 'nullable|string|max:255',
        ];
    }

    public function index()
    {
        $students = Student::latest()->paginate(10);
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('admin.students.list', ['student' => null]);
    }

    public function store(Request $request)
    {
        Student::create($request->validate($this->rules()));
        return redirect()->route('admin.students.index')->with('success', 'Student added.');
    }

    public function edit(Student $student)
    {
        return view('admin.students.form', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->validate($this->rules($student->id)));
        return redirect()->route('admin.students.index')->with('success', 'Student updated.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.students.index')->with('success', 'Student deleted.');
    }
}