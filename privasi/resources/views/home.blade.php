@extends('template/t_index')
@section('content')

<div class="container">
@if(Auth::user()->hak_akses=="admin")
<p class="mt-3">Halo <span class="badge badge-dark">Admin</span> {{Auth::user()->username}}!</p>
<a class="btn btn-danger" href="{{url('logout')}}"><span class="fas fa-sign-out-alt"></span> Logout</a>
@endif 
    <div class="card mt-4">
        <div class="card-header">
            Tambah data
        </div>
        <div class="card-body">
            {{Form::open(['url' => '/prosestambah'])}}
            
            Nama :
            @if(count($errors)>0)
            <span class="badge badge-danger">Kolom nama ada kesalahan, kolom nama harus diisi.{{--$errors->first('nama')--}}</span>
            @endif
            {{Form::text('nama', '', ['placeholder' => 'Nama', 'class' => 'form-control'])}}
            <br>

            NIM :
            @if(count($errors)>0)
            <span class="badge badge-danger">Kolom nim ada kesalahan, kolom nim harus diisi.{{--$errors->first('nim')--}}</span>
            @endif
            {{Form::text('nim', '', ['placeholder' => 'NIM', 'class' => 'form-control'])}}
            <br>

            Jurusan :
            @if(count($errors)>0)
            <span class="badge badge-danger">Kolom jurusan ada kesalahan, kolom jurusan harus diisi.{{--$errors->first('jurusan')--}}</span>
            @endif
            {{Form::text('jurusan', '', ['placeholder' => 'Jurusan/Prodi', 'class' => 'form-control'])}}
            <br>
        
            Alamat :
            @if(count($errors)>0)
            <span class="badge badge-danger">Kolom alamat ada kesalahan, kolom alamat harus diisi dan minimal 6 karakter.{{--$errors->first('alamat')--}}</span>
            @endif
            {{Form::text('alamat', '', ['placeholder' => 'Alamat', 'class' => 'form-control'])}}
            <br>

            {{Form::submit('Tambah', ['class' => 'btn btn-success'])}}
            {{Form::reset('Reset', ['class' => 'btn btn-danger'])}}
            {{Form::close()}}

        </div>
    </div>
    <p class="mt-3"><a class="btn btn-primary" href="{{url('read')}}">Lihat data</a><p>
</div>
@stop