@extends('layouts.app')
@section('content')
<h1>Halaman Tiket</h1>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('sukses'))
<script>
    swal("Good job!", "You clicked the button!", "success");
</script>
@endif

<form action="{{ route('simpan') }}" method="post">
    {{csrf_field()}}
    <div class="mb-2">
        <input type="text" name="user_id" placeholder="user_id">
    </div>
    <div class="mb-2">
         <input type="text-center bg-dark" name="awal_keberangkatan" placeholder="awal_keberangkatan">
    </div>
    <div class="mb-2">
         <input type="text-center bg-dark" name="tujuan_keberangkatan" placeholder="tujuan_keberangkatan">
    </div>
    <div class="mb-2">
        <input type="text-center bg-dark" name="no_penerbangan" placeholder="no_penerbangan">
    </div>
    <div class="mb-2">
         <input type="text-center bg-dark" name="harga" placeholder="harga">
    </div>

    <div style="padding-bottom: 15px">
        <button type="submit"class="btn btn-primary">Simpan Data</button>
    </div>  
</form>

  
<table id="example" class="display">
    <thead>
        <tr>
            <th>user_id</th>
            <th>awal_keberangkatan</th>
            <th>tujuan_keberangkatan</th>
            <th>no_penerbangan</th>
            <th>harga</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tiket as $item)
        
        <tr>
            <td>{{$item->user_id}}</td>
            <td>{{$item->awal_keberangkatan}}</td>
            <td>{{$item->tujuan_keberangkatan}}</td>
            <td>{{$item->no_penerbangan}}</td>
            <td>{{$item->harga}}</td>
            <td>
                <a href="{{ route('edit',$item->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                <a href="{{route('tiket.delete', $item->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>

                
            </td>
          
            
        </tr>
        @endforeach
    </tbody>
</table>



@endsection

@section('alert')
@if (session('sukses'))
<script>
    swal("Good job!", "Data Berhasil Di Tambahkan", "success");
</script>
@endif

@if (session('sukses_delete'))
<script>
    swal("Good job!", "Data Berhasil Di Hapus!", "success");
</script>
@endif
@endsection