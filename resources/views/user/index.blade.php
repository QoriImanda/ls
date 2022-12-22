@extends('layouts.app')
@section('content')

<h1>ini halaman index user</h1>

    <div>
        <table id="example" class="display">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No_HP</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;?>
                    @foreach ($user as $item)
                <?php $no++ ;?>
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->no_hp}}</td>
                    <td>{{$item->role}}</td>
                    <td>
                        <a href="{{route('user.edit', $item->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection