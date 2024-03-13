<?php

namespace App\Http\Controllers\Api;
use App\Models\Publication;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    public function list() {

        $Publication = Publication::all();
                                //::where('id', '=', $id)->first();
        $list = [];
        //dd = dumpOrDie
        foreach($Publication as $Publication){

            $object = [
                "id" => $Publication->id,
                "publication" => $Publication->publication, // Cambiado de 'Publication' a 'publication'
                "date" => $Publication->date,
                "visibily" => $Publication->visibily,
                "created" => $Publication->created_at,
                "updated" => $Publication->update_at,
                //foraneas
                "language" => $Publication->language_id,
                "vote" => $Publication->vote_id,
                "framework" => $Publication->framework_id,
                "comment" => $Publication->comment_id
            ];
            array_push($list, $object);
        }
        

        
        return response()->json($list);
    }


    public function item($id) {

        $Publication = Publication::where('id', '=', $id)->first();
                                //::where('id', '=', $id)->first();

        //dd = dumpOrDie

        $object = [
            "id" => $Publication->id,
            "publication" => $Publication->publication,
            "date" => $Publication->date,
            "visibily" => $Publication->visibily,
            "created" => $Publication->created_at,
            "updated" => $Publication->update_at,
            //foraneas
            "language" => $Publication->language_id,
            "vote" => $Publication->vote_id,
            "framework" => $Publication->framework_id,
            "comment" => $Publication->comment_id
            ];
        
        return response()->json($object);
        }

        public function create(Request $request)
{
    // Valida los datos de la solicitud
    $data = $request->validate([
        'publication' => 'required|min:1',
        'date' => 'required|min:1',
        'visibily' => 'required|min:1',
        'language' => 'required|min:1',
        'vote' => 'required|min:1',
        'framework' => 'required|min:1',
        'comment' => 'required|min:1'
    ]);

    // Crea la publicación y asigna el user_id del usuario autenticado
    $publication = Publication::create([
        'publication' => $data['publication'],
        'date' => $data['date'],
        'visibily' => $data['visibily'],
        'language_id' => $data['language'],
        'vote_id' => $data['vote'],
        'framework_id' => $data['framework'],
        'comment_id' => $data['comment'],
        'user_id' => Auth::id() // Obtiene el ID del usuario autenticado
    ]);

    if ($publication) {
        $object = [
            "response" => 'Success. Item saved correctly.',
            "data" => $publication
        ];
        return response()->json($object);
    } else {
        $object = [
            "response" => 'Error: Something went wrong, please try again.',
        ];
        return response()->json($object);
    }
}
        


        
        //modificacion 
        public function update(Request $request)
        {
            $data = $request->validate([
                'Publication' => 'required|min:3',
                'date' => 'required|min:3',
                'visibily' => 'required|min:3',
                'language' => 'required|min:3',
                'vote' => 'required|min:3',
                'framework' => 'required|min:3',
                'comment' => 'required|min:3'
            ]);
            $Publication = Publication::where('id', '=', $data['id'])->first();

            $Publication->Publication= $data['Publication'];
            $Publication->date= $data['date'];
            $Publication->visibily= $data['visibily'];
            $Publication->language = $data['language'];
            $Publication->vote= $data['vote'];
            $Publication->framework= $data['framework'];
            $Publication->comment= $data['comment'];

            if($Publication->update()) {
                $object = [
                    "response" => 'Success. Item update successfully.',
                    "data" => $Publication,
                ];
                return response()->json($object);
            }else {
                $object = [
    
                    "response" => 'Error:Something went wrong, please try again.',
        
                ];
        
                return response()->json($object);
            }
        }
}
