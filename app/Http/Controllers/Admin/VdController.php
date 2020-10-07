<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class VdController extends Controller
{
  public function vd(Request $request)
  {
    $id = auth()->user()->id;
    $products = Product::where('user_id', $id)->get();
    return view('admin.comercial-vd.indicadores-vd', ['products' => $products,]);
  }
}
