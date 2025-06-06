<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Phone;

class PhoneController extends Controller
{
    public function getData(Request $request)
    { 
        $phone= Phone :: all();

        return response()->json([
            'status' => '200',
            'message' => 'Retrieved Successfully',
            'result'=> $phone
        ]);
    }

          
    public function save(request $request)
        {
            $phone = Phone::create ([
                'id_owner'=>$request->id_owner,
                'phone'=>$request->phone,
            ]);
             return response() ->json([
            'status'=> '200',
            'message' => 'Saved Successfully',
            'data'=> $phone,
            ]);
        }

    public function update(request $request){

        $phone= Phone::findOrFail($request->id);

        $phone->update([
            'id_owner'=>$request->id_owner,
            'phone'=>$request->phone,
        ]);

        return response() ->json([
            'status'=> '200',
            'message' => 'Updated Successfully' 
        ]);
    }

    
    public function delete(request $request)
    {
        $phone= Phone::findOrFail($request->id);

        $phone->delete([
            'id_owner'=>$request->id_owner,
            'phone'=>$request->phone,
        ]);

        return response() ->json([
            'status'=> '200',
            'message' => 'Deleted Successfully' 
        ]);
    }
}
