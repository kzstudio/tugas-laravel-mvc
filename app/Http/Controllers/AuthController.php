<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    
    public function welcome(Request $request){
        $arr['nama_lengkap'] = $request->input('first_name').' '.$request->input('last_name');
        
        return view('selamatdatang',['input'=>$arr]);
    }
}
