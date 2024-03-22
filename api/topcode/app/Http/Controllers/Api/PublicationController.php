<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function list()
    {
        $publications = Publication::all();
        $list = [];

        foreach ($publications as $publication) {
            $object = [
                "id" => $publication->id,
                "publication" => $publication->publication,
                "date" => $publication->date,
                "visibility" => $publication->visibility,
                "language_id" => $publication->language_id,
                "framework_id" => $publication->framework_id,
                "comment_id" => $publication->comment_id,
                "created" => $publication->created_at,
                "updated" => $publication->updated_at
            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }

    public function item($id)
    {
        $publication = Publication::findOrFail($id);

        $object = [
            "id" => $publication->id,
            "publication" => $publication->publication,
            "date" => $publication->date,
            "visibility" => $publication->visibility,
            "language_id" => $publication->language_id,
            "framework_id" => $publication->framework_id,
            "comment_id" => $publication->comment_id,
            "created" => $publication->created_at,
            "updated" => $publication->updated_at
        ];

        return response()->json($object);
    }


    public function create(Request $request)
    {
        // Validar los datos de la solicitud
        $data = $request->validate([
            'publication' => 'required|string',
            'date' => 'required|string',
            'visibility' => 'required|integer',
            'language_id' => 'required|integer',
            'framework_id' => 'integer',
            'vote_range' => 'integer',
        ]);
    
        // Obtener el ID del usuario autenticado
        $userId = Auth::id();
    
        // Crear la publicación con el user_id del usuario autenticado
        $publication = Publication::create([
            'publication' => $request->input('publication'),
            'date' => $request->input('date'),
            'visibility' => $request->input('visibility'),
            'language_id' => $request->input('language_id'),
            'framework_id' => $request->input('framework_id'),
            'user_id' => $userId,  // Establecer user_id como el ID del usuario autenticado
            'vote_range' => $request->input('vote_range'), 
        ]);
    
        // Establecer el comment_id como el ID de la publicación creada
        $publication->update(['comment_id' => $publication->id]);
    
        // Devolver una respuesta JSON indicando que la publicación se creó correctamente
        return response()->json(['message' => 'Publicación creada correctamente', 'publication' => $publication], 201);
    }
    

public function currentPublication(Request $request)
{
    return $request->publication(); 
}

    

    public function update(Request $request, $id)
    {
        $request->validate([
            'publication' => 'required|string',
            'date' => 'required|date',
            'visibility' => 'required|boolean',
            'language_id' => 'required|integer',
            'framework_id' => 'required|integer',
            'comment_id' => 'required|integer',
            // Agrega validaciones adicionales según tus necesidades
        ]);

        $publication = Publication::find($id);

        if (!$publication) {
            return response()->json(['message' => 'Error: Publicación no encontrada'], 404);
        }

        $publication->publication = $request->input('publication');
        $publication->date = $request->input('date');
        $publication->visibility = $request->input('visibility');
        $publication->language_id = $request->input('language_id');
        $publication->framework_id = $request->input('framework_id');
        $publication->comment_id = $request->input('comment_id');

        if ($publication->save()) {
            return response()->json(['message' => 'Publicación actualizada correctamente', 'publication' => $publication]);
        } else {
            return response()->json(['message' => 'Error: Algo salió mal, por favor inténtalo de nuevo.'], 500);
        }
    }

    public function delete($id)
    {
        $publication = Publication::find($id);

        if (!$publication) {
            return response()->json(['response' => 'Error: Publicación no encontrada'], 404);
        }

        $publication->delete();

        return response()->json(['response' => 'Publicación eliminada correctamente']);
    }
}

