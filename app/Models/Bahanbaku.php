<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahanbaku extends Model
{
    use HasFactory;
    protected $table = "bahanbaku";
    protected $fillable =['id','kodemasuk','kodekeluar','tglmasuk','tglkeluar','namabarang','namabarangkeluar','jmlmasuk','jmlkeluar','jmltotal','hargabarang','subtotal','kodesupplier','namasupplier','updated_at'];
}
