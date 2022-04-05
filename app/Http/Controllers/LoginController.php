<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        # code...
        echo "<h1>LOGIN FORM<h1>";
    }

    public function register(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'level' => 'pelanggan',
            'api_token' => '123456',
            'status' => '1',
            'relasi' => $request->input('email'),
        ];

        User::create($data);

        return response()->json($data);
    }

    public function login()
    {
        # code...
        echo "<h1>LOGIN<h1>";
    }

    //
}
