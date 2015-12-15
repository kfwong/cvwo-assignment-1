<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('users.index',[
            'users' => $users
        ]);
    }

    public function show($user_id){
        $user = User::findOrFail($user_id);

        return view('users.show', [
            'user' => $user
        ]);
    }

    public function edit($user_id){
        $user = User::findOrFail($user_id);

        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $user_id){
        $user = User::findOrFail($user_id);

        $input = $request->all();

        $user->fill($input)->save();

        Session::flash('status', 'Update successfully.');

        return redirect()->back();

    }
    
}
