<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->nama;
        $user->email = $request->email_user;
        $user->password = Hash::make('secret');
        $user->alamat = $request->almt;
        $user->role = 2;
        $user->umur = $request->umr;
        $user->no_tlp = $request->tlp;
        $user->gaji = $request->gji;

        $user->save();

        if($user->save()){
            return back()->with('success','User Berhasil Ditambahkan');
        }
        else{
            return back()->with('danger','User Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $User = User::findorFail($id);
        $User->id = $request->id;
        $User->name = $request->nama;
        $User->email = $request->email_user;
        $User->password = $request->pass;
        $User->alamat = $request->almt;
        $User->umur = $request->umr;
        $User->no_tlp = $request->tlp;
        $User->gaji = $request->gji;

        $Kamar->save();

        if($Kamar->save()){
            return back()->with('succes','User Berhasil Diupdate');
        }
        else{
            return back()->with('danger','User Gagal Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findorFail($id)->delete();
    }
}
