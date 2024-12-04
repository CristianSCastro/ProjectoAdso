<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\Groomer;

class GroomerController extends Controller
{
    public function getData(Request $request)
    { 
        $groomer= Groomer :: all();

        return response()->json([
            'status' => '200',
            'message' => 'Retrieved Successfully',
            'result'=> $groomer
        ]);
    }

          
    public function save(request $request)
        {

            $groomer=Groomer::create ([
                'groomersName'=>$request->groomersName,
            ]);

             return response() ->json([
            'status'=> '200',
            'message' => 'Saved Successfully', 
            'data' =>$groomer,
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
