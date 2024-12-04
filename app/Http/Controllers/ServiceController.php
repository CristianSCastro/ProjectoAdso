<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Service;

class ServiceController extends Controller
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
            $service = Service::create ([
                'Service'=>$request->Service,
                'price'=>$request->price,
            ]);
             return response() ->json([
            'status'=> '200',
            'message' => 'Saved Successfully',
            'data'=> $service,
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
