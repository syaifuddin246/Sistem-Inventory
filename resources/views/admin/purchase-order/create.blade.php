@extends('admin/layouts/main')
@section('title','Purchase Order')
@section('content')
<div class="container">
    <div class="row justify-content-center pt-4" style="padding-bottom: 60px;">
        <div class="col-md-8">
            <h5 class="text-center">Input Purchase Order</h5>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{url('/purchase-order')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <label for="no_po" class="col-md-4 col-form-label text-md-end">No PO : </label>
                            <div class="col-md-6">
                                <input id="no_po" type="text" class="form-control @error('no_po') is-invalid @enderror" name="no_po" value="{{ old('no_po') }}" required autocomplete="no_po" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="tglorder" class="col-md-4 col-form-label text-md-end">Tanggal Order : </label>
                            <div class="col-md-6">
                                <input id="tglorder" type="date" class="form-control @error('tglorder') is-invalid @enderror" name="tglorder" value="{{ old('tglorder') }}" required autocomplete="tglorder" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="tglkirim" class="col-md-4 col-form-label text-md-end">Tanggal Kirim Barang : </label>
                            <div class="col-md-6">
                                <input id="tglkirim" type="date" class="form-control @error('tglkirim') is-invalid @enderror" name="tglkirim" value="{{ old('tglkirim') }}" required autocomplete="tglkirim" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="kode_supplier" class="col-md-4 col-form-label text-md-end">Kode Supplier : </label>
                            <div class="col-md-6">
                                <input id="kode_supplier" type="text" class="form-control @error('kode_supplier') is-invalid @enderror" name="kode_supplier" value="{{ old('kode_supplier') }}" required autocomplete="kode_supplier" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="nama_supplier" class="col-md-4 col-form-label text-md-end">Nama Supplier : </label>
                            <div class="col-md-6">
                                <input id="nama_supplier" type="text" class="form-control @error('nama_supplier') is-invalid @enderror" name="nama_supplier" value="{{ old('nama_supplier') }}" required autocomplete="nama_supplier" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="nama_barang" class="col-md-4 col-form-label text-md-end">Nama Barang : </label>
                            <div class="col-md-6">
                                <input id="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang') }}" required autocomplete="nama_barang" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="status" class="col-md-4 col-form-label text-md-end">Status : </label>
                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="tglbayar" class="col-md-4 col-form-label text-md-end">Rencanan/Tanggal Bayar : </label>
                            <div class="col-md-6">
                                <input id="tglbayar" type="date" class="form-control @error('tglbayar') is-invalid @enderror" name="tglbayar" value="{{ old('tglbayar') }}" required autocomplete="tglbayar" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="jml" class="col-md-4 col-form-label text-md-end">Jumlah : </label>
                            <div class="col-md-6">
                                <input id="jmlmasuk" type="text" class="form-control @error('jml') is-invalid @enderror" name="jml" value="{{ old('jml') }}" required autocomplete="jml" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="harga" class="col-md-4 col-form-label text-md-end">Harga : </label>
                            <div class="col-md-6">
                                <input id="hargabarang" type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" required autocomplete="harga" autofocus>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="subtotal" class="col-md-4 col-form-label text-md-end">Sub Total : </label>
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
                                <a href="{{url('/purchase-order')}}" class="btn btn-secondary w-100">Batal</a>
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
            <th>No PO</th>
            <th>Tanggal Order</th>
            <th>Tanggal Kirim Barang</th>
            <th>Nama Supplier</th>
            <th>Nama Barang</th>
            <th>Status</th>
            <th>Tanggal Bayar</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($po as $key => $row)
        <tr>
            <td>{{$po->firstItem()+$key}}</td>
            <td>{{$row->no_po}}</td>
            <td>{{$row->tglorder}}</td>
            <td>{{$row->tglkirim}}</td>
            <td>{{$row->nama_supplier}}</td>
            <td>{{$row->nama_barang}}</td>
            <td>{{$row->status}}</td>
            <td>{{$row->tglbayar}}</td>
            <td>{{$row->jml}}</td>
            <td>{{$row->harga}}</td>
            <td>{{$row->subtotal}}</td>
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