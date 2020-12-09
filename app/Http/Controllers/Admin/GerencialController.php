<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\User;
use Gate;

class GerencialController extends Controller
{
  public function show()
  {
    
    $id = auth()->user()->id;
    $products = Product::where('user_id', $id)->get();
    
    return view('admin.resultados.gerencial', ['products' => $products]);
  }
}
