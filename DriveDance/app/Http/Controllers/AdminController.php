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

    public function createNews(Request $request) {
        $title = $request->input('title');
        $date = $request->input('date');
        $description = $request->input('description');

        DB::table('posts')->insert([
            'title' => $title,
            'date' => $date,
            'description' => $description
        ]);

        return redirect()->back()->with('info', 'Запись успешно добавлена!');
    }

    public function updateNews(Request $request) {
        $id = $request->input('update_id');
        $title = $request->input('title');
        $date = $request->input('date');
        $description = $request->input('description');

        DB::table('posts')->where('id', '=', $id)->update([
            'title' => $title,
            'date' => $date,
            'description' => $description
        ]);

        return redirect()->back()->with('info', 'Запись успешно обновлена!');
    }

    public function deleteNews(Request $request) {
        $id = $request->input('delete_id');
        $models = DB::table('posts')->where('id','=', $id)->delete();
        return redirect()->back()->with('info', 'Записть успешно удалена!');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin');
    }
}
