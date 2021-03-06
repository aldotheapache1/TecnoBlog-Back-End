<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /*
        index – Lista os dados da tabela
        show – Mostra um item específco
        create – Retorna a View para criar um item da tabela
        store – Salva o novo item na tabela
        edit – Retorna a View para edição do dado
        update – Salva a atualização do dado
        destroy – Remove o dado
    */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }


    public function create()
    {
       
    }


    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }


    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->detete();
    }
}
