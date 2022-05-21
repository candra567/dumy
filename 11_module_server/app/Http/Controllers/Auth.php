<?php

namespace App\Http\Controllers;

use App\Models\UserTrial;
use Database\Seeders\UserTrialSeeder;
use Illuminate\Http\Request;

class Auth extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
      $email=$request->email_users ;
      $sandi=$request->password_users;
     $data= UserTrial::where('email',$email)->first();
     if (!empty($data)) {
         if (password_verify($sandi,$data->password)) {
             return redirect('/admin');
         }
         else{
             return back()->with('logingagal','Kata sandi salah')->withInput();
         }
     } else {
        return back()->with('logingagal','Akun tak terdaftar')->withInput();
     }
     
    }
}
