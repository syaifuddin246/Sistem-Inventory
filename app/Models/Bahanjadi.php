<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahanjadi extends Model
{
    use HasFactory;
    protected $table = "bahanjadi";
    protected $fillable =['id','kodemasuk','kodekeluar','tglmasuk','tglkeluar','namabarang','namabarangkeluar','modelbarang','modelbarangkeluar','jmlmasuk','jmlkeluar','jmltotal','hargabarang','hargabarangkeluar','subtotal','subtotalkeluar','updated_at'];
}
