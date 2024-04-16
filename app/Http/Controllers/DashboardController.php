<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function utama()
    {
        return view('home');
    }

    public function daftar()
    {
        return view('register');
    }
    public function welcome(Request $request)
    {
        $namaDepan = $request->input('fname');
        $namaBelakang = $request->input('lname');
        return view('welcome', ["namaDepan" => $namaDepan, "namaBelakang" => $namaBelakang]);
    }
}
