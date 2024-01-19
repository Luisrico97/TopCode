<?php

namespace App\Http\Controllers\Api;
use App\Models\Vote;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function list() {

        $Vote = Vote::all();
                                //::where('id', '=', $id)->first();
        $list = [];
        //dd = dumpOrDie
        foreach($Vote as $Vote){

            $object = [
            "id" => $Vote->id,
            "count" => $Vote->count,
            "created" => $Vote->created_at,
            "updated" => $Vote->update_at
            ];
            array_push($list, $object);
        }
        

        
        return response()->json($list);
    }


    public function item($id) {

        $Vote = Vote::where('id', '=', $id)->first();
                                //::where('id', '=', $id)->first();

        //dd = dumpOrDie

        $object = [
            "id" => $Vote->id,
            "count" => $Vote->count,
            "created" => $Vote->created_at,
            "updated" => $Vote->update_at
            ];
        
        return response()->json($object);
        }
}
