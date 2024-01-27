<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function list() {

        $Comment = Comment::all();
                                //::where('id', '=', $id)->first();
        $list = [];
        //dd = dumpOrDie
        foreach($Comment as $Comment){

            $object = [
            "id" => $Comment->id,
            "comment" => $Comment->comment,
            "date" => $Comment->date,
            "visibily" => $Comment->visibily,
            "created" => $Comment->created_at,
            "updated" => $Comment->update_at
            ];
            array_push($list, $object);
        }
        

        
        return response()->json($list);
    }


    public function item($id) {

        $Comment = Comment::where('id', '=', $id)->first();
                                //::where('id', '=', $id)->first();

        //dd = dumpOrDie

            $object = [
                "id" => $Comment->id,
                "Comment" => $Comment->comment,
                "date" => $Comment->date,
                "visibily" => $Comment->visibily,
                "created" => $Comment->created_at,
                "updated" => $Comment->update_at
            ];
        
        return response()->json($object);
        }

        //Creacion
        public function create(Request $request) {
            $data = $request->validate([
                'name' => 'required|min:3|max:20'
            ]);
            
            $comment = Comment::create([
                'name'=> $data['name'],
            ]);
    
            if ($comment) {
                $object = [
                    "response" => 'Succes.Item saved correctly.',
                    "data" => $comment
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
                'id' => 'required|integer|min:1',
                'name' => 'required|min:3',
            ]);
            $comment = comment::where('id', '=', $data['id'])->first();

            $comment->name = $data['name'];
            
            if($comment->update()) {
                $object = [
                    "response" => 'Success. Item update successfully.',
                    "data" => $comment,
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


