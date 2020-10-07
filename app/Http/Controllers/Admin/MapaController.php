<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class MapaController extends Controller
{
  public function mapa(Request $request)
  {
    $id = auth()->user()->id;
    $products = Product::where('user_id', $id)->get();
    return view('admin.estoque.mapa-estoque', ['products' => $products,]);
  }
}
