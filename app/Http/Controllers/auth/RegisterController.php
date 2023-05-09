<?php
namespace app\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register Page'
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }
    private function setRole($email)
    {
        if (strpos($email, 'mhs') !== false) {
            $role = '2';
        } else if (strpos($email, 'adm') !== false) {
            $role = '1';
        }
        return $role;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // store data registration to table user which is name,npm,password
        if (strpos($request['email'], 'mhs') !== false) {
            $role = '2';
        } else if (strpos($request['email'], 'adm') !== false) {
            $role = '1';
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        # increment id
        $id = DB::table('users')->max('id');

        // store data to table user
        DB::table('users')->insert([
            'id' => $id + 1,
            'name' => $request->name,
            'role' => $this->setRole($request['email']),
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);



        return redirect('/login');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}