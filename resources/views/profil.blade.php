@extends('Layout.mainlayout')

@section('title', 'Profil User')
@section('userActive', 'active')

@section('content')
    <h1>Profil User</h1>

    @if($users)
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->phone }}</td>
                    <td>{{ $users->address }}</td>
                </tr>
            </tbody>
        </table>
    @else
        <p>User tidak ditemukan.</p>
    @endif
@endsection
