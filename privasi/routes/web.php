<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::user()){
        if(Auth::user()->hak_akses=="admin"){
            return view('home');
        }
        else{
            return view('user');
        }
    }
    else{
        return view('login');
    }
});

Route::post('prosestambah', 'Crudcontroller@tambahdata');

Route::get('read', function(){
    return view('read');
});

Route::get('read', 'Crudcontroller@lihatdata');

Route::get('hapus/{id}', 'Crudcontroller@hapusdata');

Route::get('formedit/{id}', 'Crudcontroller@editdata');

Route::post('prosesedit', 'Crudcontroller@proseseditdata');

Route::get('login', function(){
    if(Auth::user()){
        if(Auth::user()->hak_akses=="admin"){
            return view('home');
        }
        else{
            return view('user');
        }
    }
    else{
        return view('login');
    }
});

Route::get('register', function(){
    if(Auth::user()){
        if(Auth::user()->hak_akses=="admin"){
            return view('home');
        }
        else{
            return view('user');
        }
    }
    else{
        return view('register');
    }
});

Route::post('tambahlogin', 'Crudcontroller@tambahlogin');

Route::post('login', 'Crudcontroller@login');

Route::get('user', function(){
    if(Auth::user()){
        if(Auth::user()->hak_akses=="admin"){
            return view('home');
        }
        else{
            return view('user');
        }
    }
    else{
        return view('login');
    }
});

Route::get('logout', 'Crudcontroller@logout');
