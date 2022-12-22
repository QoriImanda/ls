@extends('layouts.app')
@section('content')
    <h1>Ini Halaman Edit</h1>

<form action="#" method="post">
    {{csrf_field()}}
    <div class="mb-2">
        <input type="text" name="nama" placeholder="Nama" value="">
    </div>
    <div class="mb-2">
         <input type="text-center bg-dark" name="alamat" placeholder="Alamat" value="">
    </div>
    <div class="mb-2">
         <input type="text-center bg-dark" name="no_hp" placeholder="tujuan_keberangkatan" value="">
    </div>
    <div class="mb-2">
        <input type="text-center bg-dark" name="role" placeholder="no_penerbangan" value="">
    </div>

    <div style="padding-bottom: 15px">
        <button type="submit"class="btn btn-primary">Ubah Data</button>
    </div>  
</form>
@endsection