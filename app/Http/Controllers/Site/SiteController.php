<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

Class SiteController extends Controller
{
  public function index()
  {
    return view('site.index');
  }
}