<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
      $users = User::paginate();
      return view('users.index' , compact('users'));
    }
    public function edit(User $user){
       return view('users.edit', compact('user'));
      }
      public function update(Request $request ,User $user){
        $user->id = $request->id;
        $user->name = $request->name;
        $user->lastname = $request->lastname;


        
        $user->save();
       }
}