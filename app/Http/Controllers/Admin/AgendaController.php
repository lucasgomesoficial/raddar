<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function agenda()
    {
        return view('admin.agenda.index');
    }
}
