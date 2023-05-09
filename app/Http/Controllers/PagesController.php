<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PagesController extends Controller
{
    public function halamanUtama()
    {
        return view('auth.login', [
            'title' => 'Rubbish Revive'
        ]);
    }

    public function dashboard()
    {

        return view('user.dashboard', [
            'title' => 'Dashboard',
        ]);
    }

    public function profile()
    {
        return view('user.profile', [
            'title' => 'My Profile',
        ]);
    }

    public function dataalumni()
    {
        return view('user.dataalumni', [
            'title' => 'Data Alumni',
        ]);
    }

    public function bantuan()
    {
        return view('user.bantuan', [
            'title' => 'Bantuan',
        ]);
    }


}