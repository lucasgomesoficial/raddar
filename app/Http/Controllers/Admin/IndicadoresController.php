<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class IndicadoresController extends Controller
{
  public function indicadores(Request $request)
  {
    $id = auth()->user()->id;
    $products = Product::where('user_id', $id)->get();
    return view('admin.comercial-varejo.indicadores-comerciais', ['products' => $products,]);
  }
}
