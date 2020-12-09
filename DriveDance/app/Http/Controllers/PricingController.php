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
}
