<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamar;
use App\Memesan;
use Carbon\Carbon;

class KamarController extends Controller
{

    public function checkroom(Request $req) {
        $r = $req->query();
        $inn = Carbon::createFromFormat('m/d/Y', $r['checkin'])->toDateString();
        $i = date($inn);
        $int = Carbon::createFromFormat('m/d/Y', $r['checkout'])->toDateString();
        $o = date($int);
        $memesan = Memesan::where([
            ['checkin', '>=', $i],
            ['checkin', '<=', $o],
        ])->orWhere([
            ['checkin', '<=', $i],
            ['checkout', '>=', $o],
        ])->orWhere([
            ['checkin', '<=', $i],
            ['checkout', '>=', $i],
        ])->get();
        $kamar = Kamar::all();
        $i = 0;
        return view('checkroom', [
            'r' => $r,
            'memesan' => $memesan,
            'kamar' => $kamar,
            'i' => $i
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // #GAY
        
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
        $Kamar = new Kamar;
        $Kamar->jenis_kamar = $request->jenis;
        $Kamar->harga_kamar = $request->harga;

        $gambar = $request->file('foto_kamar');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('foto_kamar')->move('image/kamar', $namaFile);
        $Kamar->foto_kamar = $namaFile;

        $Kamar->save();

        if($Kamar->save()){
            return back()->with('success','Kamar Berhasil Ditambahkan');
        }
        else{
            return back()->with('danger','Kamar Gagal Ditambahkan');
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
        $Kamar = Kamar::findOrFail($id);
        $Kamar->jenis_kamar = $request->jenis;
        $Kamar->harga_kamar = $request->harga;

        $gambar = $request->file('foto_kamar');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('foto_kamar')->move('image/kamar', $namaFile);
        $Kamar->foto_kamar = $namaFile;

        $Kamar->save();

        if($Kamar->save()){
            return back()->with('success','Kamar Berhasil diperbarui');
        }
        else{
            return back()->with('danger','Kamar Gagal diperbarui');
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
        $Kamar = Kamar::findOrFail($id);
        $Kamar->delete();
        return back()->with('success','Kamar Berhasil Dihapus');
    }
}
