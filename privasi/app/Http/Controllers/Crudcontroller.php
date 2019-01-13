<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\validasiregister;
use Input;
use DB;
use Redirect;
use View;

class Crudcontroller extends Controller
{
    public function tambahdata(Request $data){

        $this->validate($data,[
            'nama'  => 'required',
            'nim'  => 'required',
            'jurusan'=>'required',
            'alamat'=>'required|min:6'
        ]);

        $data = array(
            'nama' => Input::get('nama'),
            'nim' => Input::get('nim'),
            'jurusan' => Input::get('jurusan'),
            'alamat' => Input::get('alamat')
        );
    
        DB::table('mahasiswa')->insert($data);
        return Redirect::to('read')->with('message', 'Data berhasil ditambah');
    }

    public function lihatdata(){
        
        $data = DB::table('mahasiswa')->get();

        return View::make('read')->with('mahasiswa', $data);
    }

    public function hapusdata($id){
        
        DB::table('mahasiswa')->where('id', '=', $id)->delete();

        return Redirect::to('read')->with('message', 'Data berhasil dihapus');
    }

    public function editdata($id){
        
        $data = DB::table('mahasiswa')->where('id', '=', $id)->first();

        return View::make('form_edit')->with('mahasiswa', $data);
    }

    public function proseseditdata() {
        
        $data = array(

            'nama'=>Input::get('nama'),
            'nim'=>Input::get('nim'),
            'jurusan'=>Input::get('jurusan'),
            'alamat'=>Input::get('alamat')
        );

        DB::table('mahasiswa')->where('id', '=', Input::get('id'))->update($data);
        
        return Redirect::to('read')->with('message', 'Data berhasil diubah');
    }

    public function tambahlogin(Request $request){

        $this->validate($request, [
            'username'=> 'required|email|min:6',
            'password'=> 'required|min:8'
        ]);
        $username = $request->username;
        $password = bcrypt($request->password);

        $request = array(
            //'username'=> $username,
            //'password'=> $password,
            //'hak_akses'=>'user'
            'username' => Input::get('username'),
            'password' => bcrypt(Input::get('password')),
            'hak_akses' => 'user'
        );

        DB::table('login')->insert($request);
        return Redirect::to('/login')->with('message', 'berhasil mendaftar');
    }

    public function login(Request $request) {

        $this->validate($request,[
            'username'  => 'required|min:6',
            'password'  => 'required|min:8'
        ]);
        
        if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')])){
            
            if(Auth::user()->hak_akses=="admin"){
                return Redirect::to('/');
            }
            else{
                return Redirect::to('read');
            }
        
        }
        else{
            return Redirect::to('login')->with('message', 'Login gagal');
        }
    }

    public function logout() {

        Auth::logout();
        return Redirect::to('login')->with('message', 'Berhasil Logout!');
    }
}



?>