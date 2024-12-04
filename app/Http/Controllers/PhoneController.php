<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Phone;

class PhoneController extends Controller
{
    public function getData(Request $request)
    { 
        return response()->json([
            'status' => '200',
            'message' => 'Retrieved Successfully'
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

        return response() ->json([
            'status'=> '200',
            'message' => 'Updated Successfully' 
        ]);
    }

    
    public function delete(request $request)
    {

        return response() ->json([
            'status'=> '200',
            'message' => 'Deleted Successfully' 
        ]);
    }
}
