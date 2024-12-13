<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $today = today()->format('Y-m-d');
        $featured = Product::with('category')->find([1, 3, 7]);
        $special = Product::whereNotNull('price')->get();
        $upcoming = Product::where('release_date', '>=' , $today)->get();

        // dd($upcoming);

        return view('home',compact('featured','special','upcoming'));
    }
}
