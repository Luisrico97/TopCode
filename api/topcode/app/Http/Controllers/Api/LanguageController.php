<?php

namespace App\Http\Controllers\Api;
use App\Models\Language;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function list() {

        $Language = Language::all();
                                //::where('id', '=', $id)->first();
        $list = [];
        //dd = dumpOrDie
        foreach($Language as $Language){

            $object = [
            "id" => $Language->id,
            "type" => $Language->type,
            "created" => $Language->created_at,
            "updated" => $Language->update_at
            ];
            array_push($list, $object);
        }
        

        
        return response()->json($list);
    }


    public function item($id) {

        $Language = Language::where('id', '=', $id)->first();
                                //::where('id', '=', $id)->first();

        //dd = dumpOrDie

        $object = [
            "id" => $Language->id,
            "type" => $Language->type,
            "created" => $Language->created_at,
            "updated" => $Language->update_at
            ];
        
        return response()->json($object);
        }
}
