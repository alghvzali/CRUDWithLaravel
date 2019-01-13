@extends('template/t_index')
@section('content')

<div class="container">
    <div class="card mt-4">
        <div class="card-header"><span class="fas fa-user"></span> Register @if(Session::has('message')) <span class="badge badge-primary">{{Session::get('message')}}</span> @endif</div>
            <!--<span class="fas fa-user"></span>-->
            <!--<span class="badge badge-primary"></span>-->
        <div class="card-body">
            {{Form::open(['url' => '/tambahlogin'])}}
            Username:   @if(count($errors)>0)
            <span class="badge badge-danger">ada kesalahan pada username, username harus email dan minimal 6 karakter{{--$errors->first('username')--}}</span>
            @endif
            {{Form::text('username', '', ['placeholder' => 'Username', 'class' => 'form-control mb-3'])}}

            Password:   @if(count($errors)>0)
            <span class="badge badge-danger">ada kesalahan pada password, password minimal 8 karakter{{--$errors->first('password')--}}</span>
            @endif
            {{Form::password('password', array('class' => 'form-control mb-3', 'placeholder' => 'Password'))}}

            <p class="mb-3" style="color:black;">Sudah punya akun? <a href="{{url('login')}}" style="text-decoration:none;">login disini</a></p>

            {{Form::submit('Register', ['class' => 'btn btn-success mb-3'])}}
            {{Form::close()}}
        </div>
    </div>
</div>
@stop