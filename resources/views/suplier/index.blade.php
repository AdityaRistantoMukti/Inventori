@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2p">
                <div class="mr-auto mb-2">
                    
                    <a href="{{ route('suplier.create')}}" class="btn btn-info mr-2">Tambah Data Barang Baru</a>
                </div>
                <div class="d-flex">
                    <input type="date" name="" id="" class="form-control mr-2">
                    <button type="submit" class="btn btn-info primary mb-2">Cari Data</button>
                </div>
            </div>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Nama Supplier</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PT XIAUXONG</td>
                            <td>Cileungsi</td>
                            <td>elektronik@gmail.com</td>
                            <td>+62 8764298208</td>
                            <td>
                        
                            <a href="{{ route('suplier.edit') }}" class="btn btn-outline-warning" btn-sm>Edit</a>
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