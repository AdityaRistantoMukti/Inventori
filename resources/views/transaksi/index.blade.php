@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2p">
                <div class="mr-auto mb-2">
                    
                    <a href="{{route('transaksi.barang-masuk')}}" class="btn btn-info mr-2">Tambah Data Barang Masuk</a>
                    <a href="{{route('transaksi.barang-keluar')}}" class="btn btn-danger mr-2">Tambah Data Barang Keluar</a>
                </div>
            </div>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Supplier</th>
                            <th>Nama Barang</th>
                            <th>Quantiy</th>
                            <th>Tgl Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>NMA-213-434-213</td>
                            <td>PT XIAUXONG</td>
                            <td>Charger</td>
                            <td>10</td>
                            <td> 1 Januari 2021</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
          
        </div>
    </div>
</div>

@endsection