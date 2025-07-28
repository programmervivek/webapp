<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\Facades\Hash ;
class HomeController extends Controller
{
    public function register()
    {
        return view('register') ;
    }
    public function registersave(Request $request)
    {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email|max:255',
                'password' => 'required|string|max:6',
            ]);
            User::create([
                    'name' => $request->name ,
                    'email' => $request->email ,
                    'password' => Hash::make($request->password)
                    ]) ;
               return redirect()->back()->with('success' ,"User created successfully") ;
    }

    public function index()
    {
        $user = User::all() ;
        return view('index',compact('user')) ;
    }
    public function user_details(Request $request ,$id)
    {
     $user_details = User::get()->where('id',$id) ;
     return view('details',compact('user_details')) ;
    }
}
