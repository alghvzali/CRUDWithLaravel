@extends('template/t_index')
@section('content')

<div class="container">
@if(Auth::user()->hak_akses=="admin")
<p class="mt-3">Halo Admin {{Auth::user()->username}}!</p>
<a class="btn btn-danger" href="{{url('logout')}}"><span class="fas fa-sign-out-alt"></span> Logout</a>
@else <p class="mt-3">Halo {{Auth::user()->username}}!</p>
<a class="btn btn-danger" href="{{url('logout')}}"><span class="fas fa-sign-out-alt"></span> Logout</a>
@endif
<br>

@if(Session::has('message'))
    <span class="badge badge-success mt-4">{{Session::get('message')}}</span>
@endif

    <div class="table-responsive mt-4">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                @if(Auth::user()->hak_akses=="admin")
                <th>Pilihan</th>
                @else
                @endif
            </tr>
            <?php $no=1; $mahasiswa=DB::table('mahasiswa')->get(); ?>
            @foreach ($mahasiswa as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->nim}}</td>
                <td>{{$data->jurusan}}</td>
                <td>{{$data->alamat}}</td>
                @if(Auth::user()->hak_akses=="admin")
                <td><a class="fas fa-trash-alt" href="hapus/{{$data->id}}"></a> || <a class="fas fa-edit" href="formedit/{{$data->id}}"></a></td>
                @else
                @endif
            </tr>
            @endforeach
        </table>
    
    @if(Auth::user()->hak_akses=="admin")        
    <p><a class="btn btn-primary" href="{{url('/')}}">Tambah data</a><p>
    @else
    <!--<p><a class="btn btn-dark disabled" href="{{url('#')}}">Tambah data hanya untuk Admin</a><p> -->
    @endif   
    </div>
</div>

@stop