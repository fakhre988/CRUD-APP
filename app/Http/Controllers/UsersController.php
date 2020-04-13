<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('users.index')->with('users',Users::all());
    }

    public function show(Users $user){
        return view('users.show')->with('user',$user);
    }

    public function create(){
        return view('users.create');
    }

    public function store(){
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'email' => 'required',
            'password' => 'required'
        ]);
        $data = request()->all();
        $user = new Users();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();
        session()->flash('success', 'Todo created successfully.');
        return redirect('/users');
    }

    public function edit(Users $user){
        return view('users.edit')->with('user',$user);
    }

    public function update(Users $user){
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'email' => 'required',
            'password' => 'required'
        ]);
        $data = request()->all();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();
        session()->flash('success', 'Todo created successfully.');
        return redirect('/users');
    }

    public function destroy(Users $user){
        $user->delete();
        session()->flash('success', 'User deleted successfully.');
        return redirect('/users');
    }
}
