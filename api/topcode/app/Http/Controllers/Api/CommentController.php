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
}
