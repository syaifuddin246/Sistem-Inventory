<?php

namespace App\Http\Controllers;

use App\Models\Bahanjadi;
use Illuminate\Http\Request;

class BahanjadiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect('/bahanjadi/masuk');
    }
    public function stokbahan(){
        $stokbahan = Bahanjadi::select('id','kodemasuk','kodekeluar','tglmasuk','tglkeluar','namabarang','namabarangkeluar','modelbarang','modelbarangkeluar','jmlmasuk','jmlkeluar','jmltotal','hargabarang','hargabarangkeluar','subtotal','subtotalkeluar','updated_at')->latest()->paginate(5);
        return view('admin/bahanjadi/stok',compact('stokbahan'));
    }

    public function penjualanhijab(){
        $subtotalpenjualan = Bahanjadi::sum('subtotalkeluar');
        $laporanpenjualan = Bahanjadi::select('id','kodemasuk','kodekeluar','tglmasuk','tglkeluar','namabarang','namabarangkeluar','modelbarang','modelbarangkeluar','jmlmasuk','jmlkeluar','jmltotal','hargabarang','hargabarangkeluar','subtotal','subtotalkeluar','updated_at')->latest()->paginate(5);

        return view('admin/laporan/penjualanhijab',compact('laporanpenjualan','subtotalpenjualan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function masuk()
    {
        //
        $bahanmasuk = Bahanjadi::select('id','kodemasuk','kodekeluar','tglmasuk','tglkeluar','namabarang','namabarangkeluar','modelbarang','modelbarangkeluar','jmlmasuk','jmlkeluar','jmltotal','hargabarang','hargabarangkeluar','subtotal','subtotalkeluar','updated_at')->latest()->paginate(5);

        return view('admin/bahanjadi/create',compact('bahanmasuk'));
    }
    public function keluar()
    {
        //
        $bahankeluar = Bahanjadi::select('id','kodemasuk','kodekeluar','tglmasuk','tglkeluar','namabarang','namabarangkeluar','modelbarang','modelbarangkeluar','jmlmasuk','jmlkeluar','jmltotal','hargabarang','hargabarangkeluar','subtotal','subtotalkeluar','updated_at')->latest()->paginate(5);

        return view('admin/bahanjadi/updatecreate',compact('bahankeluar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Bahanjadi::create([
            'kodemasuk' => $request->kodemasuk,
            'tglmasuk' => $request->tglmasuk,
            'namabarang' => $request->namabarang,
            'modelbarang' => $request->modelbarang,
            'jmlmasuk' => $request->jmlmasuk,
            'jmltotal' => $request->jmlmasuk,
            'hargabarang' => $request->hargabarang,
            'subtotal' => $request->subtotal,
        ]);
        return back();
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
    public function keluarbarang($id)
    {
        //
        $bahankeluar = Bahanjadi::select('id','kodemasuk','kodekeluar','tglmasuk','tglkeluar','namabarang','namabarangkeluar','modelbarang','modelbarangkeluar','jmlmasuk','jmlkeluar','jmltotal','hargabarang','hargabarangkeluar','subtotal','subtotalkeluar','updated_at')->whereId($id)->firstOrFail();

        return view('admin/bahanjadi/keluarbarang',compact('bahankeluar'));
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
        //
        Bahanjadi::whereId($id)->update([
            'kodekeluar' => $request->kodekeluar,
            'tglkeluar' => $request->tglkeluar,
            'namabarangkeluar' => $request->namabarangkeluar,
            'modelbarangkeluar' => $request->modelbarangkeluar,
            'jmlkeluar' => $request->jmlkeluar,
            'jmltotal' => $request->jmltotal,
            'hargabarangkeluar' => $request->hargabarangkeluar,
            'subtotalkeluar' => $request->subtotalkeluar
        ]);
        return redirect('/bahanjadi/keluar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
