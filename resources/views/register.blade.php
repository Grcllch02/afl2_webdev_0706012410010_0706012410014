@extends('Layout.mainlayout')
@include("Layout.navigation")
@section('title', 'Register') 
@section('', 'active')

@section('content')
<div>
    <form>
        <div class="mb-3">
            <label for="inputNama" class="form-label">Nama</label>
            <input type="name" class="form-control" id="inputNama" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection