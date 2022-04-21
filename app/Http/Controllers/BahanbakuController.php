<?php

namespace App\Http\Controllers;

use App\Models\Bahanbaku;
use Illuminate\Http\Request;

class BahanbakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect('/bahanbaku/masuk');
    }

    public function stokbahan(){
        $stokbahan = Bahanbaku::select('id','kodemasuk','kodekeluar','tglmasuk','tglkeluar','namabarang','namabarangkeluar','jmlmasuk','jmlkeluar','jmltotal','hargabarang','subtotal','kodesupplier','namasupplier','updated_at')->latest()->paginate(5);
        return view('admin/bahanbaku/stok',compact('stokbahan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function masuk()
    {
        //
        $bahanmasuk = Bahanbaku::select('id','kodemasuk','kodekeluar','tglmasuk','tglkeluar','namabarang','namabarangkeluar','jmlmasuk','jmlkeluar','jmltotal','hargabarang','subtotal','kodesupplier','namasupplier')->latest()->paginate(5);

        return view('admin/bahanbaku/create',compact('bahanmasuk'));
    }
    public function keluar()
    {
        //
        $bahankeluar = Bahanbaku::select('id','kodemasuk','namabarang','kodekeluar','tglkeluar','namabarangkeluar','jmlkeluar','jmlmasuk','jmltotal')->latest()->paginate(5);

        return view('admin/bahanbaku/updatecreate',compact('bahankeluar'));
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
        Bahanbaku::create([
            'kodemasuk' => $request->kodemasuk,
            'tglmasuk' => $request->tglmasuk,
            'namabarang' => $request->namabarang,
            'jmlmasuk' => $request->jmlmasuk,
            'jmltotal' => $request->jmlmasuk,
            'hargabarang' => $request->hargabarang,
            'subtotal' => $request->subtotal,
            'kodesupplier' => $request->kodesupplier,
            'namasupplier' => $request->namasupplier
        ]);
        return back();
    }
    public function storekeluar(Request $request)
    {
        //
        Bahanbaku::create([
            'kodekeluar' => $request->kodekeluar,
            'tglkeluar' => $request->tglkeluar,
            'namabarangkeluar' => $request->namabarangkeluar,
            'jmlkeluar' => $request->jmlmasuk,
            'jmltotal' => $request->jmlmasuk
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
        $bahankeluar = Bahanbaku::select('id','kodemasuk','kodekeluar','tglmasuk','tglkeluar','namabarang','namabarangkeluar','jmlmasuk','jmlkeluar','jmltotal','hargabarang','subtotal','kodesupplier','namasupplier')->whereId($id)->firstOrFail();

        return view('admin/bahanbaku/keluarbarang',compact('bahankeluar'));
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
        Bahanbaku::whereId($id)->update([
            'kodekeluar' => $request->kodekeluar,
            'tglkeluar' => $request->tglkeluar,
            'namabarangkeluar' => $request->namabarangkeluar,
            'jmlkeluar' => $request->jmlkeluar,
            'jmltotal' => $request->jmltotal
        ]);
        return redirect('/bahanbaku/keluar');
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
