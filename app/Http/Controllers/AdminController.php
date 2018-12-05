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
        return view('admin', [
            'ck' => $countKams,
            'ct' => $countTams,
            'cp' => $countPegs,
            'kamars' => $kamars
        ]);
    }
}
