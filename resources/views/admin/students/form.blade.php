<!DOCTYPE html>
<html><head><meta charset="utf-8"><title>{{ $student ? 'Edit' : 'Add' }} Student</title>
<style>
body{font-family:sans-serif;max-width:500px;margin:30px auto;padding:0 12px}
input,select{width:100%;padding:8px;margin:4px 0 10px;box-sizing:border-box}
.err{color:#dc2626;font-size:14px;margin-bottom:8px}
.btn{padding:8px 14px;background:#2563eb;color:#fff;border:0;cursor:pointer}
</style></head><body>
<h1>{{ $student ? 'Edit' : 'Add' }} Student</h1>
<form method="POST" action="{{ $student ? route('admin.students.update', $student) : route('admin.students.store') }}">
@csrf
@if ($student) @method('PUT') @endif

<label>Student Name</label>
<input type="text" name="student_name" value="{{ old('student_name', $student->student_name ?? '') }}">
@error('student_name')<div class="err">{{ $message }}</div>@enderror

<label>First Name</label>
<input type="text" name="first_name" value="{{ old('first_name', $student->first_name ?? '') }}">
@error('first_name')<div class="err">{{ $message }}</div>@enderror

<label>Email</label>
<input type="email" name="email" value="{{ old('email', $student->email ?? '') }}">
@error('email')<div class="err">{{ $message }}</div>@enderror

<label>Phone</label>
<input type="text" name="phone" value="{{ old('phone', $student->phone ?? '') }}">
@error('phone')<div class="err">{{ $message }}</div>@enderror

<label>Gender</label>
<select name="gender">
<option value="">-- Select --</option>
@foreach (['Male','Female','Other'] as $g)
<option value="{{ $g }}" @selected(old('gender', $student->gender ?? '') === $g)>{{ $g }}</option>
@endforeach
</select>
@error('gender')<div class="err">{{ $message }}</div>@enderror

<label>Course of Study</label>
<input type="text" name="course_of_study" value="{{ old('course_of_study', $student->course_of_study ?? '') }}">
@error('course_of_study')<div class="err">{{ $message }}</div>@enderror

<button class="btn">Save</button> <a href="{{ route('admin.students.index') }}">Cancel</a>
</form>
</body></html>