@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>DATA GOLONGAN</h3>
                @if (session()->has('success'))
                <div class="alert alert-info" role="alert">
                    {{ session ('success')}}
                </div>
                @endif
            </div>
        <div class="card-body">
        <div class="mb-3">
            <a class="btn btn-primary" href="{{ url('golongan/create')}}">Tambah Data</a>    
        </div>
        <table class="table table-light table-striped-columns">
            <tr>
                <td>NO</td>
                <td>KODE</td>
                <td>NAMA</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->gol_id}}</td>
                <td>{{ $row->gol_kode}}</td>
                <td>{{ $row->gol_nama}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('golongan/' .$row->gol_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('golongan/' .$row->gol_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        </div>
        </div>
    </div>
@endsection