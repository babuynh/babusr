<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Mail;
use Session;     
class LoginController extends Controller
{
    public function register(){
        return view('register');
    }

    public function register_store(Request $request)
{
    // dd($request->all());
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
        'role' => 'required|in:Admin,User', 
    ]);

   
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->password_hint=$request->password;
    $user->role = $request->role;

    $user->save();

    return redirect()->route('login')->with('flash_success', 'Registration successful.');
}
 public function login(){
    return view('login');
 }

 public function login_post(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('web')->attempt($credentials)) {
        $user = Auth::guard('web')->user();

        if ($user->email_verified_at) {
          
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        } else {
            Auth::guard('web')->logout();
            Session::flash('error', 'Your email is not verified. Please check Health mind team.');
            return back();
        }
    } else {
        return back()->with('error', 'Invalid Credentials');
    }
}

public function dashboard(){
    return view('admin.dashboard');
}

public function changepassword(){
    return view('admin.change-password');
}

public function changePasswordpost(Request $request)
{
   
      $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|confirmed',
    ]);

    if(!Hash::check($request->old_password, auth()->user()->password)){
        return back()->with("error", "Old Password Doesn't match!");
    }

    User::whereId(auth()->user()->id)->update([
        'password' => Hash::make($request->new_password)
    ]);
    return back()->with("status", "Password changed successfully!");

}

public function verifyEmail(User $user)
{
    // dd($user);
    if (!$user->verified) {
        // dd($user);
        $user->email_verified_at=Carbon::now();
        $user->is_verify=1;
        // dd($user);
        $user->save();
        return back()->with('success', 'Email verified successfully');
    }
  
}
public function logout(){
    Auth::logout();
    return redirect()->route('home')->with('success','Successfully Logged Out ');
}
}