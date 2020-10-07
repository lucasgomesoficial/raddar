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
    
    // $this->authorize('auth-product', $products);
    /*if(Gate::denies('auth-product', $products))
        abort(403, 'Unauthorized');*/
    
    // dd($products);
    return view('admin.resultados.gerencial', ['products' => $products]);
  }
}
