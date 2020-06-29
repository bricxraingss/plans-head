<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  public function index()
  {
    return view('user.dashboard');
  }
  
  public function login()
  {
    return view('login');
  }
  
  public function logout()
  {
    Auth::logout();
    return redirect()->route('user.login');
  }

  public function create()
  {
    return view('create');
  }

  public function verify(Request $request)
  {
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
      if(Auth::user()->type == 0){
        return redirect()->route('admin.dashboard');
      }
      
      return redirect()->route('user.dashboard');
    } else {
      return redirect()->route('user.login')->with('error', 'invalid username or password');
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $user = new User();
    $fillable = User::fillableData();
    $message = '';

    foreach($request->all() as $key => $value){
      if(in_array($key, $fillable)){
        $key == 'password' ? $user->$key = Hash::make($value) : $user->$key = $value;
      }
    }

    if($user->save()){
      $message = "User saved successfully";
      return redirect()->route('user.login')->with(['message' => $message, 'class' => 'alert-success']);
    } else {
      $message = "User saving failed";
      return redirect()->route('user.store')->with(['message' => $message, 'class' => 'alert-danger']);
    }
  }
}
