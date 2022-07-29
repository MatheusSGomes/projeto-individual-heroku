<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        if($request->photo)
            $user->photo = $request->file('photo')->store('profile', 'public');
        $user->password = $request->input('password');
        $user->save();
        $request->session()->flash('user-created', 'Cadastrado realizado com sucesso! Faça login para anunciar produtos.');
        if(Auth::user())
            return redirect()->route('dashboard');
        return redirect()->route('index');
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        if($request->photo) {
            if($user->photo) {
                unlink(public_path('storage/'.$user->photo));
            }
            $user->photo = $request->file('photo')->store('profile', 'public');
        }
        $user->is_admin = $request->input('is_admin');
        if($request->password)
            $user->password = bcrypt($request->input('password'));
        $user->save();
        session()->flash('user-update', 'Usuário atualizado com sucesso!');
        if(Auth::user())
            return redirect()->route('dashboard');
        return redirect()->route('users.index');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        if($user->photo)
            unlink(public_path('storage/'.$user->photo));
        session()->flash('user-destroy', 'Usuário apagado com sucesso');
        return redirect()->route('users.index');
    }
}
