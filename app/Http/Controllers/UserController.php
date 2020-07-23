<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Equipment;
class UserController extends Controller
{
  function index() {
  return view('login.index');
}
function checklogin(Request $request)   {
    $this->validate($request, [
    'username' => 'required',
    'password' => 'required']);
    $user_data = array(
      'username'  => $request->get('username'),
      'password' => $request->get('password'));
        if(Auth::attempt($user_data))  {
            return redirect()->intended('/home');
        }else{
          return back()->with('error', 'เกิดข้อผิดพลาด');
    }
  }

  function successlogin(){
      return view('login/successlogin');
  }
  function logout(){
    Auth::logout();
    return redirect('/login');
  }

  function admin(){
    return view('admin.index');
  }

  function users(){
      return view('home.index');
  }
}
