@extends('Layout.mainlayout')
@section('title', 'Register')
@section('', 'active')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4 shadow" style="width: 400px;">
            <form>
                <div class="mb-3">
                    <label for="inputProduk" class="form-label">Nama Produk</label>
                    <input type="name" class="form-control" id="inputProduk">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
