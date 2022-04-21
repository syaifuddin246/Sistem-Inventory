@extends('admin/layouts/main')
@section('title','Supplier')
@section('content')
<div class="container">
    <div class="row justify-content-center pt-4 pb-4">
        <div class="col-md-8">
            <h5 class="text-center">Input Data Supplier</h5>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{url('/supplier')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <label for="kode" class="col-md-4 col-form-label text-md-end">Kode Supplier : </label>
                            <div class="col-md-6">
                                <input id="kode" type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{ old('kode') }}" required autocomplete="kode" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">Nama Supplier : </label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">Alamat Supplier : </label>
                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="npwp" class="col-md-4 col-form-label text-md-end">No. NPWP</label>
                            <div class="col-md-6">
                                <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror" name="npwp" value="{{ old('npwp') }}" required autocomplete="npwp" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="telepon" class="col-md-4 col-form-label text-md-end">Telepon : </label>
                            <div class="col-md-6">
                                <input id="telepon" type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ old('telepon') }}" required autocomplete="telepon" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email : </label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="kode" class="col-md-4 col-form-label text-md-end">Kontak Person : </label>
                            <div class="col-md-6">
                                <input id="hp" type="text" class="form-control @error('hp') is-invalid @enderror" name="hp" value="{{ old('hp') }}" required autocomplete="hp" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="no_rek" class="col-md-4 col-form-label text-md-end">No Rekening</label>
                            <div class="col-md-6">
                                <input id="no_rek" type="text" class="form-control @error('no_rek') is-invalid @enderror" name="no_rek" value="{{ old('no_rek') }}" required autocomplete="no_rek" autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="nama_rek" class="col-md-4 col-form-label text-md-end">Rek. Atas Nama : </label>
                            <div class="col-md-6">
                                <input id="nama_rek" type="text" class="form-control @error('nama_rek') is-invalid @enderror" name="nama_rek" value="{{ old('nama_rek') }}" required autocomplete="nama_rek" autofocus>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="nama_bank" class="col-md-4 col-form-label text-md-end">Bank : </label>
                            <div class="col-md-6">
                                <input id="nama_bank" type="text" class="form-control @error('nama_bank') is-invalid @enderror" name="nama_bank" value="{{ old('nama_bank') }}" required autocomplete="nama_bank" autofocus>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-1">    
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/supplier')}}" class="btn btn-secondary w-100">Batal</a>
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
            <th>Kode</th>
            <th>Nama Supplier</th>
            <th>Alamat</th>
            <th>No. NPWP</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Kp</th>
            <th>No. Rek</th>
            <th>Rek. Atas Nama</th>
            <th>Bank</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($supplier as $key => $row)
        <tr>
            <td>{{$supplier->firstItem()+$key}}</td>
            <td>{{$row->kode}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{$row->npwp}}</td>
            <td>{{$row->telepon}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->hp}}</td>
            <td>{{$row->no_rek}}</td>
            <td>{{$row->nama_rek}}</td>
            <td>{{$row->nama_bank}}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
    </tfoot>
</table>
</div>
@endsection