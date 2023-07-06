@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA GOLONGAN</h3>      
            </div>
            <div class="card-body">
                <form action="{{ url('/golongan')}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label for="">KODE</label>
                        <input type="text" name="gol_kode" class="form-control" placeholder="Kode Golongan">
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA</label>
                        <input type="text" name="gol_nama" class="form-control" placeholder="Nama Golongan">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection