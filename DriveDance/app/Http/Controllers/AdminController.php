<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NewsController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index() {
        $posts = DB::table('posts')->get()->reverse();
        if (count($posts) == 0) 
            return view('admin.admin');
        return view('admin.admin', ['posts' => $posts]);
    }

    public function signin(Request $request) {
        if(!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()->with('Info','Неправильный логин или пароль!');
        }
        return redirect()->route('admin');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin');
    }
}
