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
}
