<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function list($publicationId) {
        $comments = Comment::where('comment_id', $publicationId)->get(); // Cambiado de 'publication_id' a 'comment_id'
        $commentList = [];
        
        foreach ($comments as $comment) {
            $commentObject = [
                "id" => $comment->id,
                "comment" => $comment->comment,
                "date" => $comment->date,
                "visibily" > $comment->visibily,
                "created" => $comment->created_at,
                "updated" => $comment->updated_at
            ];
            array_push($commentList, $commentObject);
        }
        
        return response()->json($commentList);
    }
    

    

    public function item($id) {

        $Comment = Comment::where('id', '=', $id)->first();
                                //::where('id', '=', $id)->first();

        //dd = dumpOrDie

            $object = [
                "id" => $Comment->id,
                "comment" => $Comment->comment,
                "date" => $Comment->date,
                "visibily" => $Comment->visibily,
                "created" => $Comment->created_at,
                "updated" => $Comment->updated_at

            ];
        
        return response()->json($object);
        }

        //Creacion
        public function create(Request $request) {
            $data = $request->validate([
                'comment' => 'required|min:3',
                'date' => 'required|date_format:Y-m-d',
                'visibility' => 'required|min:1'
            ]);
            
            try {
                $comment = Comment::create([
                    'comment' => $data['comment'],
                    'date' => $data['date'],
                    'visibility' => $data['visibility'],
                ]);
        
                $object = [
                    "response" => 'Success. Item saved correctly.',
                    "data" => $comment
                ];
                return response()->json($object);
            } catch (\Exception $e) {
                $object = [
                    "response" => 'Error: Something went wrong, please try again.',
                    "error" => $e->getMessage() // Optional: Include the actual error message for debugging
                ];
        
                return response()->json($object, 500);
            }
        }
        
        
        //modificacion 
        public function update(Request $request)
        {
            $data = $request->validate([
                'id' => 'required|integer|min:1',
                'comment' => 'required|min:3',
                'date' => 'required|min:3',
                'visibily' => 'required|min:3'
            ]);
            $comment = comment::where('id', '=', $data['id'])->first();

            $comment->comment = $data['comment'];
            $comment->date = $data['comment'];
            $comment->visibily = $data['comment'];
            
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


