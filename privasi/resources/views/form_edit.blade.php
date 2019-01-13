@extends('template/t_index')
@section('content')

<div class="container">
@if(Session::has('message'))
    <span class="badge badge-success">{{Session::get('message')}}</span>
@endif

    <div class="card mt-4">
        <div class="card-header">
            Edit data
        </div>
        <div class="card-body">
            {{Form::open(['url' => '/prosesedit'])}}
            {{Form::hidden('id', $mahasiswa->id, ['class' => 'form-control'])}}

            Nama :
            {{Form::text('nama', $mahasiswa->nama, ['class' => 'form-control'])}}
            <br>
            
            NIM :
            {{Form::text('nim', $mahasiswa->nim, ['class' => 'form-control'])}}
            <br>

            Jurusan :
            {{Form::text('jurusan', $mahasiswa->jurusan, ['class' => 'form-control'])}}
            <br>

            Alamat :
            {{Form::text('alamat', $mahasiswa->alamat, ['class' => 'form-control'])}}
            <br>

            {{Form::submit('Ubah data', ['class' => 'btn btn-success'])}}
            <a href ="{{url('read')}}" class="btn btn-danger" style="text-decoration:none; color:white;">Batal</a>
            {{--{{Form::reset('Reset', ['class' => 'btn btn-danger'])}}--}}
            {{Form::close()}}
        </div>
    </div>

</div>
@stop