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


        public function create(Request $request) {
            $data = $request->validate([
                'name' => 'required|min:3|max:20'
            ]);
            
            $framework = Framework::create([
                'name'=> $data['name'],
            ]);
    
            if ($framework) {
                $object = [
                    "response" => 'Succes.Item saved correctly.',
                    "data" => $framework
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
            $framework = Framework::where('id', '=', $data['id'])->first();

            $framework->name = $data['name'];
            
            if($framework->update()) {
                $object = [
                    "response" => 'Success. Item update successfully.',
                    "data" => $framework,
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

