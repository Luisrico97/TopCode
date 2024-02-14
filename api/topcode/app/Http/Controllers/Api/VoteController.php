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

        public function create(Request $request) {
            $data = $request->validate([
                'count' => 'required|min:1'
            ]);
            
            $Vote = Vote::create([
                'count'=> $data['count']
            ]);
    
            if ($Vote) {
                $object = [
                    "response" => 'Succes.Item saved correctly.',
                    "data" => $Vote
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
                'count' => 'required|min:1'
            ]);
            $Vote = Vote::where('id', '=', $data['id'])->first();

            $Vote->Vote = $data['Vote'];
            
            if($Vote->update()) {
                $object = [
                    "response" => 'Success. Item update successfully.',
                    "data" => $Vote,
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
