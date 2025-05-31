<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Service;

class ServiceController extends Controller
{
    public function getData(Request $request)
    { 
        $service= Service :: all();

        return response()->json([
            'status' => '200',
            'message' => 'Retrieved Successfully',
            'result'=> $service
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

        $service = Service::findOrFail($request->id);
        $service->update([
            'Service'=>$request->Service,
            'price'=>$request->price,
        ]);

        return response() ->json([
            'status'=> '200',
            'message' => 'Updated Successfully' 
        ]);
    }

    
    public function delete(request $request)
    {
        $service = Service::findOrFail($request->id);
        $service->delete();

        return response() ->json([
            'status'=> '200',
            'message' => 'Deleted Successfully' 
        ]);
    }
}
