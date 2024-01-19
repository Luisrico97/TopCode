<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Framework;
use Illuminate\Http\Request;

class FrameworkController extends Controller
{
    public function list() {

        $Frameworks = Framework::all();
                                //::where('id', '=', $id)->first();
        $list = [];
        //dd = dumpOrDie
        foreach($Frameworks as $Framework){

            $object = [
            "id" => $Framework->id,
            "name" => $Framework->name,
            "created" => $Framework->created_at,
            "updated" => $Framework->update_at
            ];
            array_push($list, $object);
        }
        

        
        return response()->json($list);
    }


    public function item($id) {

        $Framework = Framework::where('id', '=', $id)->first();
                                //::where('id', '=', $id)->first();

        //dd = dumpOrDie

            $object = [
            "id" => $Framework->id,
            "name" => $Framework->name,
            "created" => $Framework->created_at,
            "updated" => $Framework->update_at
            ];
        
        return response()->json($object);
        }
    }
