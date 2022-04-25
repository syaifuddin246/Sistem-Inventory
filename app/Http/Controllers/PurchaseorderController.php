<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use Illuminate\Http\Request;

class PurchaseorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect('/purchase-order/request');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function purchaseorder()
    {
        //
        $po = PurchaseOrder::select('id','no_po','tglorder','tglkirim','kode_supplier','nama_supplier',
        'nama_barang','status','tglbayar','jml','harga','subtotal','updated_at')->latest()->paginate(5);

        return view('admin/purchase-order/create',compact('po'));
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
        PurchaseOrder::create([
            'no_po' => $request->no_po,
            'tglorder' => $request->tglorder,
            'tglkirim' => $request->tglkirim,
            'kode_supplier' => $request->kode_supplier,
            'nama_supplier' => $request->nama_supplier,
            'nama_barang' => $request->nama_barang,
            'status' => $request->status,
            'tglbayar' => $request->tglbayar,
            'jml' => $request->jml,
            'harga' => $request->harga,
            'subtotal' => $request->subtotal
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
        //
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
