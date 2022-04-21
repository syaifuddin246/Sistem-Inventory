@extends('admin/layouts/main')
@section('title', 'Stok Bahan Baku')
@section('content')
    <div class="container">
        <div class="row justify-content-center pt-4" style="padding-bottom: 90px;">
            <div class="col-md-12">
                <h5 class="text-center pb-4">Laporan Stok Hijab</h5>
                <div class="card" style="padding: 10px;">
                   
                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Hijab</th>
                                    <th scope="col">Jenis Kain</th>
                                    <th scope="col">Tanggal Masuk</th>
                                    <th scope="col">Stok Masuk</th>
                                    <th scope="col">Tanggal Keluar</th>
                                    <th scope="col">Stok Keluar</th>
                                    <th scope="col">Tanggal Akhir</th>
                                    <th scope="col">Stok Akhir</th>
                                </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stokbahan as $key => $row)
                            <tr>
                                <td>{{ $stokbahan->firstItem() + $key }}</td>
                                <td>{{ $row->kodemasuk }}</td>
                                <td>{{ $row->namabarang }}</td>
                                <td>{{ $row->tglmasuk }}</td>
                                <td>{{ $row->jmlmasuk }}</td>
                                <td>{{ $row->tglkeluar }}</td>
                                <td>{{ $row->jmlkeluar }}</td>
                                <td>{{ $row->updated_at }}</td>
                                <td>{{ $row->jmltotal }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
