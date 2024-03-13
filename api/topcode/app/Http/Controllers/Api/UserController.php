<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $users = User::all();
        $list = [];

        foreach ($users as $user) {
            $object = [
                "id" => $user->id,
                "ename" => $user->ename,
                "surname" => $user->surname,
                "email" => $user->email,
                "phone" => $user->phone,
                "password" => $user->password,
                "image" => $user->image,
                "created" => $user->created_at,
                "updated" => $user->updated_at
            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }

    public function item($id)
    {
        $user = User::findOrFail($id);
        $object = [
            "id" => $user->id,
            "name" => $user->name,
            "surname" => $user->surname,
            "email" => $user->email,
            "phone" => $user->phone,
            "password" => $user->password,
            "image" => $user->image,
            "created" => $user->created_at,
            "updated" => $user->updated_at
        ];

        return response()->json($object);
    }

  
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'surname' => 'nullable|string|max:191',
            'phone' => 'nullable|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:8|max:191',
            'image' => 'nullable|string|max:191',
            // Agrega validaciones adicionales según tus necesidades
        ]);
        

        $user = User::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // Asegúrate de encriptar la contraseña
            'image' => $request->input('image', 'placeholder.png'), // Valor predeterminado si no se proporciona una imagen
            // Cualquier otro campo que necesites para crear un usuario
        ]);

        return response()->json(['message' => 'Usuario creado correctamente', 'user' => $user], 201);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:191',
            'surname' => 'nullable|string|max:191',
            'phone' => 'nullable|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,' . $user->id,
            'password' => 'required|string|min:8|max:191',
            'image' => 'nullable|string|max:191',
            // Agrega validaciones adicionales según tus necesidades
        ]);

        $user->update([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // Asegúrate de encriptar la contraseña
            'image' => $request->input('image'),
            // Actualiza cualquier otro campo que necesites
        ]);

        return response()->json(['message' => 'Usuario actualizado correctamente', 'user' => $user]);
    }
}

