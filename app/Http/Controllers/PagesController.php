<?php
namespace App\Http\Controllers;

use App\Models\Student;
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
        $students = Student::all();

        if ($role == '1') {
            $categories1 = Student::where('bidang_minat', 'Data Mining & Kecerdasan Artfisial')->count();
            $categories2 = Student::where('bidang_minat', 'Rekayasa Perangkat Lunak')->count();
            $categories3 = Student::where('bidang_minat', 'Jaringan Komputer & Keamanan Siber')->count();
            $categories4 = Student::where('bidang_minat', 'GeoSpasial')->count();
            $categories5 = Student::where('tahun_lulus', '2020')->count();
            $categories6 = Student::where('tahun_lulus', '2021')->count();
            $categories7 = Student::where('tahun_lulus', '2022')->count();
            return view('admin.dashboard', [
                'title' => 'Dashboard',
            ])->with('students', $students, )->with('categories1', $categories1)->with('categories2', $categories2)->with('categories3', $categories3)->with('categories4', $categories4)->with('categories5', $categories5)->with('categories6', $categories6)->with('categories7', $categories7);
        }

        if ($role == '2') {
            $categories1 = Student::where('bidang_minat', 'Data Mining & Kecerdasan Artfisial')->count();
            $categories2 = Student::where('bidang_minat', 'Rekayasa Perangkat Lunak')->count();
            $categories3 = Student::where('bidang_minat', 'Jaringan Komputer & Keamanan Siber')->count();
            $categories4 = Student::where('bidang_minat', 'GeoSpasial')->count();
            return view('user.dashboard', [
                'title' => 'Dashboard',
            ])->with('students', $students, )->with('categories1', $categories1)->with('categories2', $categories2)->with('categories3', $categories3)->with('categories4', $categories4);
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