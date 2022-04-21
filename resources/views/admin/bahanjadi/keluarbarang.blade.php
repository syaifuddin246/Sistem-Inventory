@extends('admin/layouts/main')
@section('title','Bahan Jadi Keluar')
@section('content')
<div class="container">
    <div class="row justify-content-center pt-4 pb-4">
        <div class="col-md-8">
            <h5 class="text-center">Input Data Hijab Keluar</h5>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/bahanjadi/keluarbarang/{{$bahankeluar->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row mb-2">
                            <label for="kodekeluar" class="col-md-4 col-form-label text-md-end">Kode Hijab : </label>
                            <div class="col-md-6">
                                <input id="kodekeluar" type="text" class="form-control @error('kodekeluar') is-invalid @enderror" name="kodekeluar" value="{{ old('kodemasuk') ? old('kodemasuk') : $bahankeluar->kodemasuk }}" required autocomplete="kodekeluar" autofocus readonly>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="tglkeluar" class="col-md-4 col-form-label text-md-end">Tanggal Keluar : </label>
                            <div class="col-md-6">
                                <input id="tglkeluar" type="date" class="form-control @error('tglkeluar') is-invalid @enderror" name="tglkeluar" value="{{ old('tglkeluar') }}" required autocomplete="tglkeluar" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="namabarangkeluar" class="col-md-4 col-form-label text-md-end">Nama Kain : </label>
                            <div class="col-md-6">
                                <input id="namabarangkeluar" type="text" class="form-control @error('namabarangkeluar') is-invalid @enderror" name="namabarangkeluar" value="{{ old('namabarang') ? old('namabarang') : $bahankeluar->namabarang }}" required autocomplete="namabarangkeluar" autofocus readonly>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="modelbarangkeluar" class="col-md-4 col-form-label text-md-end">Model Hijab : </label>
                            <div class="col-md-6">
                                <input id="modelbarangkeluar" type="text" class="form-control @error('modelbarangkeluar') is-invalid @enderror" name="modelbarangkeluar" value="{{ old('modelbarang') ? old('modelbarang') : $bahankeluar->modelbarang }}" required autocomplete="modelbarangkeluar" autofocus readonly>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="jmlkeluar" class="col-md-4 col-form-label text-md-end">Jumlah : </label>
                            <div class="col-md-6">
                                <input id="jmlkeluar" type="text" class="form-control @error('jmlkeluar') is-invalid @enderror" name="jmlkeluar" value="{{ old('jmlkeluar') }}" required autocomplete="jmlkeluar" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="hargabarangkeluar" class="col-md-4 col-form-label text-md-end">Harga : </label>
                            <div class="col-md-6">
                                <input id="hargabarangkeluar" type="text" class="form-control @error('hargabarangkeluar') is-invalid @enderror" name="hargabarangkeluar" value="{{ old('hargabarangkeluar') }}" required autocomplete="hargabarangkeluar" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="subtotalkeluar" class="col-md-4 col-form-label text-md-end">Total : </label>
                            <div class="col-md-6">
                                <input id="subtotalkeluar" type="text" class="form-control @error('subtotalkeluar') is-invalid @enderror" name="subtotalkeluar" value="{{ old('subtotalkeluar') }}" required autocomplete="subtotalkeluar" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="hargabarang" class="col-md-4 col-form-label text-md-end"> </label>
                            <div class="col-md-3">
                                <label for=""><span>info stok</span></label>
                                <input type="text" class="form-control" id="jmltotal" placeholder="" value="{{ old('jmltotal') ? old('jmltotal') : $bahankeluar->jmltotal }}" readonly>
                            </div>
                            <div class="col-md-3">
                                <label for=""><span>update stok</span></label>
                                <input id="subtotal" type="text" class="form-control @error('hargabarang') is-invalid @enderror" name="jmltotal"  required autocomplete="hargabarang" readonly>
                            </div>
                        </div>

                        <div class="row mb-4 pt-2">
                            <div class="col-md-2">    
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/bahanbaku')}}" class="btn btn-secondary w-100">Batal</a>
                            </div>

                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

{{-- tabel --}}
<div class="card" style="padding: 10px;">
<table id="example" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Hijab</th>
            <th>Tanggal Keluar</th>
            <th>Nama Kain</th>
            <th>Model Hijab</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
      
    </tbody>
    <tfoot>
    </tfoot>
</table>
</div>
@endsection
@push('js')

<script type="text/javascript">
    $(document).ready(function() {
        $("#jmltotal, #jmlkeluar, #hargabarangkeluar").keyup(function() {
            var stok  = $("#jmltotal").val();
            var jumlah = $("#jmlkeluar").val();
            // var disc = parseInt(harga) * 20/100;
            var total = parseInt(stok) - parseInt(jumlah);
            $("#subtotal").val(total);
        });
    });
    $(document).ready(function() {
        $(" #jmlkeluar, #hargabarangkeluar").keyup(function() {
            var stok  = $("#hargabarangkeluar").val();
            var jumlah = $("#jmlkeluar").val();
            var total = parseInt(stok) * parseInt(jumlah);
            $("#subtotalkeluar").val(total);
        });
    });
</script>  
@endpush