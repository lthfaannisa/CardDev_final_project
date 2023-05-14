<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PagesController extends Controller
{
    public function halamanUtama()
    {
        return view('auth.login', [
            'title' => 'SIMBA'
        ]);
    }


    public function dashboard()
    {

        $role = Auth::user()->role;

        if ($role == '1') {
            return view('admin.dashboard', [
                'title' => 'Dashboard',
            ]);
        }

        if ($role == '2') {
            return view('user.dashboard', [
                'title' => 'Dashboard',
            ]);
        }
    }

    public function bantuan()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('admin.bantuan', [
                'title' => 'Bantuan',
            ]);
        }

        if ($role == '2') {
            return view('user.bantuan', [
                'title' => 'Bantuan',
            ]);
        }
    }
    public function lowongan()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('admin.lowongan', [
                'title' => 'Lowongan',
            ]);
        }

        if ($role == '2') {
            return view('user.lowongan', [
                'title' => 'Lowongan',
            ]);
        }
    }


}