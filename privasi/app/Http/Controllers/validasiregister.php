<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validasiregister extends Controller
{
    //
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'username'=>'email|required',
            'password'=>'required'
        ];
    }

    public function messages(){
        return [
            'username.required'=>'harus mengisi email',
            'username.email'=>'format bukan email',
            'password.required'=>'harus mengisi password',
        ];
    }
}
