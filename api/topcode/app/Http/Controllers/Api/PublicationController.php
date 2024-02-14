<?php

namespace App\Http\Controllers\Api;
use App\Models\Publication;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            "Publication" => $Publication->publication,
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
            "Publication" => $Publication->publication,
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

        public function create(Request $request) {
            $data = $request->validate([
                'Publication' => 'required|min:3',
                'date' => 'required|min:3',
                'visibily' => 'required|min:3',
                'language' => 'required|min:3',
                'vote' => 'required|min:3',
                'framework' => 'required|min:3',
                'comment' => 'required|min:3'

            ]);
            
            $Publication = Publication::create([
                'Publication'=> $data['Publication'],
                'date'=> $data['date'],
                'visibily'=> $data['visibily'],
                'language' => $data['language'],
                'vote' => $data['vote'],
                'framework' => $data['framework'],
                'comment' => $data['comment']
            ]);
    
            if ($Publication) {
                $object = [
                    "response" => 'Succes.Item saved correctly.',
                    "data" => $Publication
                ];
                return response()->json($object);
            }else {
                $object = [
    
                    "response" => 'Error:Something went wrong, please try again.',
        
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
