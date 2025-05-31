<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Age;

class AgeController extends Controller
{
    public function getData(Request $request)
    { 
        $age= Age :: all();

        return response()->json([
            'status' => '200',
            'message' => 'Retrieved Successfully',
            'result'=> $age
        ]);
    }
          
    public function save(request $request)
        {

            $age=Age::create ([
                'age'=>$request->age,                


            ]);


             return response() ->json([
            'status'=> '200',
            'message' => 'Saved Successfully', 
            'data' =>$age,
            ]);
        }

    public function update(request $request){

        $age= Age::findOrFail($request->id);

        $age->update([
            'age'=>$request->age,
        ]);

        return response() ->json([
            'status'=> '200',
            'message' => 'Updated Successfully' 
        ]);
    }

    
    public function delete(request $request)
    {
        $age= Age::findOrFail($request->id);
        $age->delete();

        return response() ->json([
            'status'=> '200',
            'message' => 'Deleted Successfully' 
        ]);
    }
}
