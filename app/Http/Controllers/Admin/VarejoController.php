<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class VarejoController extends Controller
{
  public function varejo(Request $request)
  {
    $id = auth()->user()->id;
    $products = Product::where('user_id', $id)->get();
    return view('admin.comercial-varejo.meta-realizado', ['products' => $products,]);
  }
}
