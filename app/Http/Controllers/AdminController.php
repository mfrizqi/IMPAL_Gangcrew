<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamar;
use App\User;

class AdminController extends Controller
{
    public function index() {
        $countKams = Kamar::count();
        $countTams = User::where('role', 0)->count();
        $countPegs = User::where('role', 2)->count();
        $kamars = Kamar::all();
        $pegawai = User::where('role', 2)->get();
        $tamu = User::where('role', 0)->get();
        return view('admin', [
            'ck' => $countKams,
            'ct' => $countTams,
            'cp' => $countPegs,
            'kamars' => $kamars,
            'pegawai' => $pegawai,
            'tamu' => $tamu
        ]);
    }
}
