<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class SetupController extends Controller
{

  /*protected $model;

  public function __construct(User $model)
  {
    $this->model = $model;
  }*/

  public function index()
  {
    $users = User::where('id', '!=', auth()->id())->get();
    // $users = $this->model->where('id', '!=', auth()->id())->get();
    // $users = User::get();
    // $teste = $users()->name;
    // dd($users);
    
    return view('admin.setup.index', ['users' => $users]);
  }

  /*public function create($idUser)
  {
    $users = User::find($idUser);
    
    return view('admin.setup.index');
  }*/

  public function edit($id)
  {
    $users = User::find($id);
    
    return view('admin.setup.edit', compact('users'));
  }

  public function editUser(Request $request)
  {
    $users = User::find($id);
    
    $data = $request->all();
    
    if ($data['password'] != null)
      $data['password'] = bcrypt($data['password']);
    else
      unset($data['password']);
        
    $data['image'] = $users->image;
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
      if ($users->image) {
        $image = $users->id.$users->name;
        unlink(storage_path('app/public/users/'.$users->image));
      }else {
        $image = $users->id.$users->name;
      }
      
      $extenstion = $request->image->extension();
      $nameFile = "{$image}.{$extenstion}";

      $data['image'] = $nameFile;

      $upload = $request->image->storeAs('users', $nameFile);
      
      if (!$upload)
        return redirect()
          ->back()
          ->with('error', 'Falha ao fazer o upload da imagem');
    }
    
    $data['imgcorp'] = $users->imgcorp;
    if ($request->hasFile('imgcorp') && $request->file('imgcorp')->isValid()) {
      if ($users->imgcorp) {
        $imgcorp = $users->id.$users->name;
        unlink(storage_path('app/public/group/'.$users->imgcorp));
      }else {
        $imgcorp = $users->id.$users->name;
      }
      
      $extenstion = $request->imgcorp->extension();
      $nameFile = "{$imgcorp}.{$extenstion}";

      $data['imgcorp'] = $nameFile;

      $upload = $request->imgcorp->storeAs('group', $nameFile);
      
      if (!$upload)
        return redirect()
          ->back()
          ->with('error', 'Falha ao fazer o upload da imagem');
    }        
    
    $update = $users->update($data);    
    if ($update)
      return redirect()
        ->route('admin.setup')
        ->with('success', 'Atualização realizada!');
          
      return redirect()
        ->back('')
        ->with('error', 'Atualização não realizada!');
  }

  public function editService($id)
  {
    $users = User::find($id);
    
    return view('admin.setup.edit', compact('users'));
  }
}
