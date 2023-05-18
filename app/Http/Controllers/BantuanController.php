<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BantuanController extends Controller
{
    public function bantuan(): View
    {
        $role = Auth::user()->role;
        $bantuan = Bantuan::all();
        if ($role == '1') {
            return view('admin.bantuan')->with('bantuan', $bantuan);
        }
        if ($role == '2') {
            return view('user.bantuan')->with('bantuan', $bantuan);
        }
        return $role;
    }

    public function create(): View
    {
        return view('user.bantuan');
    }
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Bantuan::create($input);
        return redirect('bantuan')->with('flash_message', 'Bantuan ditambahkan!');
    }
    public function destroy(string $id): RedirectResponse
    {
        $bantuan = Bantuan::findorfail($id);
        $bantuan->delete();
        return back();
    }

}