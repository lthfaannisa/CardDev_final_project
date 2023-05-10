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

    public function profile()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('admin.profile', [
                'title' => 'My Profile',
            ]);
        }

        if ($role == '2') {
            return view('user.profile', [
                'title' => 'My Profile',
            ]);
        }
    }

    public function dataalumni()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('admin.dataalumni', [
                'title' => 'Data Alumni',
            ]);
        }

        if ($role == '2') {
            return view('user.dataalumni', [
                'title' => 'Data Alumni',
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


}