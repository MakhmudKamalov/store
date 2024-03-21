<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
  //

  protected function check(Request $request)
  {
    if (Auth::attempt($request->only('email', 'password'))) {
      $request->session()->regenerate();
      return view('welcome');
    } else {
      return back();
    }
  }

  protected function logout()
  {
    Auth::logout();
    return view('index');
  }

  protected function editProfile(Request $request)
  {
    $id = $request->id;
    if ($request->password != null) {
      $user = User::find($id)->update([
        'name' => $request->name,
        'surname' => $request->surname,
        'phone' => $request->phone,
        'email' => $request->login,
        'password' => Hash::make($request->password)
      ]);
    } else {
      $user = User::find($id)->update([
        'name' => $request->name,
        'surname' => $request->surname,
        'phone' => $request->phone,
        'email' => $request->login
      ]);
    }

    return view('profile');
  }
}
