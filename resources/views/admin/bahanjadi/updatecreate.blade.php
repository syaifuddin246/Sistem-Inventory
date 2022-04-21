@extends('admin/layouts/main')
@section('title','Bahan Jadi Keluar')
@section('content')
<div class="container">
    <div class="row justify-content-center pt-4" style="padding-bottom: 90px;">
        <div class="col-md-8">
            <h5 class="text-center">Input Data Hijab Keluar</h5>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{url('/bahanjadi')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <label for="kodekeluar" class="col-md-4 col-form-label text-md-end">Kode Hijab : </label>
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-right: 90%">
                                      
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @foreach ($bahankeluar as $item)
                                            <a class="dropdown-item" href="/bahanjadi/{{$item->id}}/keluarbarang"><h6 style="text-align: center">Kode : {{$item->kodemasuk}} - Nama : {{$item->namabarang}}</h6></a>
                                        @endforeach
                                    </div>
                                  </div>
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
                                <input id="namabarangkeluar" type="text" class="form-control @error('namabarangkeluar') is-invalid @enderror" name="namabarangkeluar" value="{{ old('namabarangkeluar') }}" required autocomplete="namabarangkeluar" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="modelbarangkeluar" class="col-md-4 col-form-label text-md-end">Model Hijab : </label>
                            <div class="col-md-6">
                                <input id="modelbarangkeluar" type="text" class="form-control @error('modelbarangkeluar') is-invalid @enderror" name="modelbarangkeluar" value="{{ old('modelbarangkeluar') }}" required autocomplete="modelbarangkeluar" autofocus>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="jmlkeluar" class="col-md-4 col-form-label text-md-end">Jumlah : </label>
                            <div class="col-md-6">
                                <input id="jmlkeluar" type="text" class="form-control @error('jmlkeluar') is-invalid @enderror" name="jmlkeluar" value="{{ old('jmlkeluar') }}" required autocomplete="jmlkeluar" autofocus>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="hargakeluar" class="col-md-4 col-form-label text-md-end">Harga : </label>
                            <div class="col-md-6">
                                <input id="hargakeluar" type="text" class="form-control @error('hargakeluar') is-invalid @enderror" name="hargakeluar" value="{{ old('hargakeluar') }}" required autocomplete="hargakeluar" autofocus>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="subtotal" class="col-md-4 col-form-label text-md-end">Total : </label>
                            <div class="col-md-6">
                                <input id="subtotal" type="text" class="form-control @error('subtotal') is-invalid @enderror" name="subtotal" value="{{ old('subtotal') }}" required autocomplete="subtotal" autofocus>
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
        @foreach ($bahankeluar as $key => $row)
        <tr>
            <td>{{$bahankeluar->firstItem()+$key}}</td>
            <td>{{$row->kodekeluar}}</td>
            <td>{{$row->tglkeluar}}</td>
            <td>{{$row->namabarangkeluar}}</td>
            <td>{{$row->modelbarangkeluar}}</td>
            <td>{{$row->jmlkeluar}}</td>
            <td>{{$row->hargabarangkeluar}}</td>
            <td>{{$row->subtotalkeluar}}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
    </tfoot>
</table>
</div>
@push('js')
<script type="text/javascript">
    $(document).ready(function() {
        $("#hargabarang, #jmlmasuk").keyup(function() {
            var harga  = $("#hargabarang").val();
            var jumlah = $("#jmlmasuk").val();
            // var disc = parseInt(harga) * 20/100;
            var total = parseInt(harga) * parseInt(jumlah);
            $("#subtotal").val(total);
        });
    });
</script>  
@endpush

@endsection
