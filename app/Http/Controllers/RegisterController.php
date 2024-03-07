<?php
// app\Http\Controllers\RegisterController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{


  public function showRegistrationForm()
  {
    $categories = Category::all();

      return view('Organisateur.register',compact('categories'));
  }
  
  public function registerStore(Request $request)
  {
      // Logique de validation
      $this->validate($request, [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:8',
      ]);
  
      // Créer un utilisateur
      $user = User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
      ]);
  
      // Attribuer le rôle 'organizer' à l'utilisateur
      $user->assignRole('organizer');
  
      // Redirection après l'inscription
      return redirect('/event/create');
  }
  

  



   
}
