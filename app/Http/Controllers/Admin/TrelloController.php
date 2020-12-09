<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrelloController extends Controller
{
  public function trello()
  {
    return view('admin.trello.index');
  }
}
