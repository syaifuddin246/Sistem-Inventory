<?php

namespace App\Http\Controllers;

use App\Models\Bahanbaku;
use App\Models\Bahanjadi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $jumlah_user = User::count();
        // $jumlah_opd = Profilopd::count();
        // $jumlah_barang = AsetTik::sum('jumlah_barang');
        // $total_harga = AsetTik::sum('harga');
        $totalbakumasuk = Bahanbaku::sum('jmlmasuk');
        $totalbakukeluar = Bahanbaku::sum('jmlkeluar');
        $totaljadimasuk = Bahanjadi::sum('jmlmasuk');
        $totaljadikeluar = Bahanjadi::sum('jmlkeluar');
    
        return view('admin/dashboard',compact('totalbakumasuk','totalbakukeluar','totaljadimasuk','totaljadikeluar'));
    }
}
