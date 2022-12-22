<div></div>
@extends('layouts.app')
@section('content')
<h1>Halaman Edit Data</h1>
<form action="{{route('tiket.update', $tiket->id)}}" method="post">
    {{csrf_field()}}
    <div class="mb-2">
        <input type="text" name="user_id" placeholder="user_id" value="{{$tiket->user_id}}">
    </div>
    <div class="mb-2">
         <input type="text-center bg-dark" name="awal_keberangkatan" placeholder="awal_keberangkatan" value="{{$tiket->awal_keberangkatan}}">
    </div>
    <div class="mb-2">
         <input type="text-center bg-dark" name="tujuan_keberangkatan" placeholder="tujuan_keberangkatan" value="{{$tiket->tujuan_keberangkatan}}">
    </div>
    <div class="mb-2">
        <input type="text-center bg-dark" name="no_penerbangan" placeholder="no_penerbangan" value="{{$tiket->no_penerbangan}}">
    </div>
    <div class="mb-2">
         <input type="text-center bg-dark" name="harga" placeholder="harga" value="{{$tiket->harga}}">
    </div>

    <div style="padding-bottom: 15px">
        <button type="submit"class="btn btn-primary">Ubah Data</button>
    </div>  
</form>

  

@endsection