<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;

class MainController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $products = Products::get();
        return view('index', ['user' => $user], compact('products'));
    }

    public function form(Request $request)
    {
        var_dump($request->input('size'), $request->input('dough'));
    }
}
