@extends('Layout.mainlayout')
@section('title', 'Register')
@section('', 'active')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4 shadow" style="width: 400px;">
            <h4 class="d-flex justify-content-center mb-4">TAMBAH PRODUK</h4>
            <form>
                <div class="mb-3">
                    <label for="inputProduk" class="form-label">Nama Produk</label>
                    <input type="name" class="form-control" id="inputProduk">
                </div>

                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword">
                </div>

                <div class="mb-3">
                    <label for="inputHarga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="inputHarga">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto Produk</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
