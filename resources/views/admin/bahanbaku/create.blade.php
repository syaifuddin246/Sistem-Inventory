@extends('admin/layouts/main')
@section('title','Bahan Baku Masuk')
@section('content')
<div class="container">
    <div class="row justify-content-center pt-4 pb-4">
        <div class="col-md-8">
            <h5 class="text-center">Input Bahan Baku Masuk</h5>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{url('/bahanbaku')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <label for="kodemasuk" class="col-md-4 col-form-label text-md-end">Kode Barang : </label>
                            <div class="col-md-6">
                                <input id="kodemasuk" type="text" class="form-control @error('kodemasuk') is-invalid @enderror" name="kodemasuk" value="{{ old('kodemasuk') }}" required autocomplete="kodemasuk" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="tglmasuk" class="col-md-4 col-form-label text-md-end">Tanggal Masuk : </label>
                            <div class="col-md-6">
                                <input id="tglmasuk" type="date" class="form-control @error('tglmasuk') is-invalid @enderror" name="tglmasuk" value="{{ old('tglmasuk') }}" required autocomplete="tglmasuk" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="namabarang" class="col-md-4 col-form-label text-md-end">Nama Barang : </label>
                            <div class="col-md-6">
                                <input id="namabarang" type="text" class="form-control @error('namabarang') is-invalid @enderror" name="namabarang" value="{{ old('namabarang') }}" required autocomplete="namabarang" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="jmlmasuk" class="col-md-4 col-form-label text-md-end">Jumlah : </label>
                            <div class="col-md-6">
                                <input id="jmlmasuk" type="text" class="form-control @error('jmlmasuk') is-invalid @enderror" name="jmlmasuk" value="{{ old('jmlmasuk') }}" required autocomplete="jmlmasuk" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="hargabarang" class="col-md-4 col-form-label text-md-end">Harga : </label>
                            <div class="col-md-6">
                                <input id="hargabarang" type="text" class="form-control @error('hargabarang') is-invalid @enderror" name="hargabarang" value="{{ old('hargabarang') }}" required autocomplete="hargabarang" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="subtotal" class="col-md-4 col-form-label text-md-end">Sub Total : </label>
                            <div class="col-md-6">
                                <input id="subtotal" type="text" class="form-control @error('subtotal') is-invalid @enderror" name="subtotal" value="{{ old('subtotal') }}" required autocomplete="subtotal" autofocus>
                            </div>
                        </div>
                       
                        <div class="row mb-2">
                            <label for="kodesupplier" class="col-md-4 col-form-label text-md-end">Kode Supplier : </label>
                            <div class="col-md-6">
                                <input id="kodesupplier" type="text" class="form-control @error('kodesupplier') is-invalid @enderror" name="kodesupplier" value="{{ old('kodesupplier') }}" required autocomplete="kodesupplier" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="namasupplier" class="col-md-4 col-form-label text-md-end">Nama Supplier : </label>
                            <div class="col-md-6">
                                <input id="namasupplier" type="text" class="form-control @error('namasupplier') is-invalid @enderror" name="namasupplier" value="{{ old('namasupplier') }}" required autocomplete="namasupplier" autofocus>
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
            <th>Kode Barang</th>
            <th>Tanggal Masuk</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subtotal</th>
            <th>Nama Supplier</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bahanmasuk as $key => $row)
        <tr>
            <td>{{$bahanmasuk->firstItem()+$key}}</td>
            <td>{{$row->kodemasuk}}</td>
            <td>{{$row->tglmasuk}}</td>
            <td>{{$row->namabarang}}</td>
            <td>{{$row->jmlmasuk}}</td>
            <td>{{$row->hargabarang}}</td>
            <td>{{$row->subtotal}}</td>
            <td>{{$row->namasupplier}}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
    </tfoot>
</table>
</div>
@endsection
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