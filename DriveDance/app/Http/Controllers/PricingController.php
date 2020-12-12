<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PricingController extends Controller
{
    public function index() {
        $pricings = DB::table('pricing')->get();
        return view('pricing', ['pricings' => $pricings]);
    }

    public function pay(Request $request) {
        $id = $request->input('order_id');
        $fname = $request->input('fname');
        $sname = $request->input('sname');
        $email = $request->input('email');
        $phone = $request->input('phone');

        DB::table('pay')->insert([
            'order_id' => $id,
            'fname' => $fname,
            'sname' => $sname,
            'email' => $email,
            'phone' => $phone
        ]);

        return redirect()->back()->with('info', 'Запись прошла успешно!');

    }
}
