<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;


class myController extends Controller
{
     public function home(){

        return view('home.index');
      }
      // end methode

     public function adminLogin(){

      return view('home.login');
     }
     // end methode

     public function adminRegister(){

      return view('home.register');
     }
     public function storeRegister(Request $request){

      User::insert([
         'name' => $request->name,
         'uaername' => $request->username,
         'email' => $request->email,
         'phone' => $request->mobile,
         'address' => $request->address,
         'password' => Hash::make($request->password),
      ]);


      return redirect()->route('admin.login');



     }
     // end methode

     public function adminLogging(LoginRequest $request){

      $request->authenticate();

      $request->session()->regenerate();

      return redirect()->route('admin.dashboard');
  }
     }

