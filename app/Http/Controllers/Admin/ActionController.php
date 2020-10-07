<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ActionController extends Controller
{
  public function action(Request $request)
  {
    $id = auth()->user()->id;
    $products = Product::where('user_id', $id)->get();
    return view('admin.planos.action', ['products' => $products,]);
  }
}
