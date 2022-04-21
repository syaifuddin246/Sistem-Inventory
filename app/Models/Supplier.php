<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = "supplier";
    protected $fillable =['id','kode','nama','alamat','npwp','telepon','email','hp','no_rek','nama_rek','nama_bank'];
}
