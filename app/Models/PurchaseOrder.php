<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    protected $table = "po";
    protected $fillable =['id','no_po','tglorder','tglkirim','kode_supplier','nama_supplier',
    'nama_barang','status','tglbayar','jml','harga','subtotal'];
}
