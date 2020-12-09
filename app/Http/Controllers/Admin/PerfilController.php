<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
  public function perfil()
  {
    return view('admin.profile.perfil');
  }

  public function perfilUpdate(Request $request)
  {
    $user = auth()->user();
    
    $data = $request->all();
    
    if ($data['password'] != null)
      $data['password'] = bcrypt($data['password']);
    else
      unset($data['password']);
        
    $data['image'] = $user->image;
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
      if ($user->image) {
        $image = $user->id.$user->name;
        unlink(storage_path('app/public/users/'.$user->image));
      }else {
        $image = $user->id.$user->name;
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
    
    $data['imgcorp'] = $user->imgcorp;
    if ($request->hasFile('imgcorp') && $request->file('imgcorp')->isValid()) {
      if ($user->imgcorp) {
        $imgcorp = $user->id.$user->name;
        unlink(storage_path('app/public/group/'.$user->imgcorp));
      }else {
        $imgcorp = $user->id.$user->name;
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
    
    $update = $user->update($data);    
    if ($update)
      return redirect()
        ->route('admin.perfil')
        ->with('success', 'Atualização realizada!');
          
      return redirect()
        ->back('')
        ->with('error', 'Atualização não realizada!');
  }
}
