<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memesan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class MemesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function reserve(Request $req){
        $r = $req->query();
            $end = Carbon::parse($r['checkout']);
            $start = Carbon::parse($r['checkin']);
            $length = $end->diffInDays($start); 
            $hasil = $r['harga'];
            return view('reserve',[
                'r' => $r,
                'harga' => $hasil
            ]);
    }

    public function payment() {
        $tagihan = Auth::user()->memesan()->get();
        $bills = Auth::user()->memesan()->get();
        $cash = 0;
        foreach($bills as $b) {
            $cash += $b->kamar()->first()->harga_kamar;
        }
        return view('payment', [
            'tagihan' => $tagihan,
            'bills' => $cash
        ]);
    }

    public function index()
    {
        $Memesan = Memesan::orderBy('id_memesan','desc')->get();

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
        $Memesan = new Memesan;
        $Memesan->kamar_id = $request->id_kamar;
        $Memesan->user_id = Auth::user()->id;
        $Memesan->Checkin = Carbon::parse($request->checkin)->format('Y-m-d');
        $Memesan->Checkout = Carbon::parse($request->checkout)->format('Y-m-d');

        $Memesan->save();

        if($Memesan->save()){
            return redirect()->route('payment')->with('success','Memesan Berhasil Dibuat');
        }
        else{
            return redirect()->route('payment')->with('danger','Memesan Gagal Dibuat');
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
        $Memesan = Memesan::findorFail($id);
        $Memesan->id_memesan = $request->id;
        $Memesan->id_kamar = $request->id_kamar;
        $Memesan->id_user = $request->id_user;
        $Memesan->jenis_kamar = $request->jenis;
        $Memesan->harga = $request->harga;
        $Memesan->status = $request->status;

        $Kamar->save();

        if($Kamar->save()){
            return back()->with('success','Pesanan Berhasil Diupdate');
        }
        else{
            return back()->with('danger','Pesanan Gagal Diupdate');
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
        Memesan::findorFail($id)->delete();
    }
}
