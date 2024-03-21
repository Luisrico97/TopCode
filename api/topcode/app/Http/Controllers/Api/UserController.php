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
                "name" => $user->name,
                "surname" => $user->surname,
                "email" => $user->email,
                "phone" => $user->phone,
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
        $imageUrl = asset('assets/placeholder.png' . $user->image); // Ajusta la ruta según la ubicación de tus imágenes

        $object = [
            "id" => $user->id,
            "name" => $user->name,
            "surname" => $user->surname,
            "email" => $user->email,
            "phone" => $user->phone,
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
    public function currentUser(Request $request)
    {
        return $request->user(); // Esto devolverá los datos del usuario autenticado
    }
    
    public function update(Request $request, $id)
    {
        // Valida los datos del formulario aquí si es necesario
        $request->validate([
            'name' => 'required|string|max:191',
            'surname' => 'nullable|string|max:191',
            'phone' => 'nullable|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,' . $id,
            'image' => 'nullable|string|max:191',
            // Agrega validaciones adicionales según tus necesidades
        ]);
    
        // Busca el usuario por el ID
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['message' => 'Error: Usuario no encontrado'], 404);
        }
    
        // Actualiza los datos del usuario
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->image = $request->input('image');
    
        // Guarda los cambios en la base de datos
        if ($user->save()) {
            return response()->json(['message' => 'Usuario actualizado correctamente', 'user' => $user]);
        } else {
            return response()->json(['message' => 'Error: Algo salió mal, por favor inténtalo de nuevo.'], 500);
        }
    }
    
    public function delete($id){
        $user = User::find($id);
        
        if(!$user) {
            return response()->json(['response' => 'Error: Usuario no encontrado'], 404);
        }
        
        $user->delete();
    
        return response()->json(['response' => 'Usuario eliminado correctamente']);
    }
    
    


}

