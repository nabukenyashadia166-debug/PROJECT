<!DOCTYPE html>
<html><head><meta charset="utf-8"><title>Students</title>
<style>
body{font-family:sans-serif;max-width:1000px;margin:30px auto;padding:0 12px}
table{width:100%;border-collapse:collapse}
th,td{border:1px solid #ccc;padding:8px;text-align:left}
.ok{background:#d4edda;padding:8px;margin-bottom:10px}
.btn{padding:6px 12px;background:#2563eb;color:#fff;text-decoration:none;border:0;cursor:pointer}
.del{background:#dc2626}
</style></head><body>
<h1>Students</h1>
<p><a class="btn" href="{{ route('admin.students.create') }}">Add Student</a></p>
@if (session('success'))<div class="ok">{{ session('success') }}</div>@endif
<table>
<tr><th>#</th><th>Student Name</th><th>First Name</th><th>Email</th><th>Phone</th><th>Gender</th><th>Course</th><th>Actions</th></tr>
@forelse ($students as $s)
<tr>
<td>{{ $s->id }}</td>
<td>{{ $s->student_name }}</td>
<td>{{ $s->first_name }}</td>
<td>{{ $s->email }}</td>
<td>{{ $s->phone }}</td>
<td>{{ $s->gender }}</td>
<td>{{ $s->course_of_study }}</td>
<td>
<a href="{{ route('admin.students.edit', $s) }}">Edit</a>
<form method="POST" action="{{ route('admin.students.destroy', $s) }}" style="display:inline" onsubmit="return confirm('Delete this student?')">
@csrf @method('DELETE')<button class="btn del">Delete</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="8">No students yet.</td></tr>
@endforelse
</table>
<div style="margin-top:12px">{{ $students->links() }}</div>
</body></html>