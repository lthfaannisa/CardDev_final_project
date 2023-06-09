<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class StudentController extends Controller
{

    public function dataalumni(): View
    {
        $role = Auth::user()->role;
        $students = Student::all();
        if ($role == '1') {
            return view('admin.dataalumni')->with('students', $students);
        }
        if ($role == '2') {
            return view('user.dataalumni')->with('students', $students);
        }
        return $role;
    }

    public function create(): View
    {
        return view('students.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Student::create($input);
        return redirect('dataalumni')->with('flash_message', 'Student Addedd!');
    }

    public function show($id)
    {
        $student = Student::findorfail($id);
        return view('admin.profile', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findorfail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findorfail($id);
        $student->update($request->all());
        return redirect('dataalumni')->with('flash_message', 'Student Addedd!');
    }


    public function destroy(string $id): RedirectResponse
    {
        $student = Student::findorfail($id);
        $student->delete();
        return back();
    }

    public function search(Request $request)
    {
        $role = Auth::user()->role;
        if ($request->keyword) {
            $student = Student::search($request->keyword)->get();
        } else {
            $student = Student::all();
        }

        if ($role == '1') {
            return view('admin.dataalumni', ['students' => $student]);
        } else if ($role == '2') {
            return view('user.dataalumni', ['students' => $student]);
        }
    }
}