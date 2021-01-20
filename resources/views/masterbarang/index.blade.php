@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2p">
                <div class="mr-auto mb-2">
                    
                    <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info mr-2">Tambah Data Barang Baru</a>
                </div>
                <div class="d-flex">
                    <input type="date" name="" id="" class="form-control mr-2">
                    <button type="submit" class="btn btn-info primary mb-2">Cari Data</button>
                </div>
            </div>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Supplier</th>
                            <th>Nama Barang</th>
                            <th>Quantity</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>NMA-213-434-213</td>
                            <td>PT XIAUXONG</td>
                            <td>Charger</td>
                            <td>10</td>
                            <td>
                        
                            <a href="{{ route('master-barang.edit') }}" class="btn btn-outline-warning" btn-sm>Edit</a>
                            <a href="{{ route('master-barang.show') }}" class="btn btn-outline-info" btn-sm>Detail</a>
                            <a href="" class="btn btn-outline-danger" btn-sm>Delete</a>
                            
                            
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
          
        </div>
    </div>
</div>

@endsection