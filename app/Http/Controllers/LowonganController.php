<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Lowongan;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LowonganController extends Controller
{
    public function lowongan(): View
    {
        $role = Auth::user()->role;
        $lowongan = Lowongan::all();
        if ($role == '1') {
            return view('admin.lowongan')->with('lowongan', $lowongan);
        }
        if ($role == '2') {
            return view('user.lowongan')->with('lowongan', $lowongan);
        }
        return $role;
    }

    public function create(): View
    {
        return view('admin.tambahloker');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Lowongan::create($input);
        return redirect('lowongan')->with('flash_message', 'Student Addedd!');
    }

    public function edit($id)
    {
        $lowongan = Lowongan::findorfail($id);
        return view('admin.editlowongan', compact('lowongan'));
    }

    public function update(Request $request, $id)
    {
        $lowongan = Lowongan::findorfail($id);
        $lowongan->update($request->all());
        return redirect('lowongan')->with('flash_message', 'lowongan Addedd!');
    }

    public function search(Request $request)
    {
        if ($request->keyword) {
            $lowongan = Lowongan::search($request->keyword)->get();
        } else {
            $lowongan = Lowongan::all();
        }

        return view('admin.lowongan', ['lowongan' => $lowongan]);
    }
    public function destroy(string $id): RedirectResponse
    {
        $lowongan = Lowongan::findorfail($id);
        $lowongan->delete();
        return back();
    }
    public function show($id)
    {
        $lowongan = Lowongan::findorfail($id);
        return view('user.lihatlowongan', compact('lowongan'));
    }
}