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

        $request->validate([
            'id' => 'required|exists:groomers,id', // Ensure the groomer exists in the database
            'groomersName' => 'required|string|max:255', // Ensure the groomers name is not empty or null
        ]);
    
        // Find the groomer by ID, or fail if not found
        $groomer = Groomer::findOrFail($request->id);
    
        // Update the groomer's name
        $groomer->update([
            'groomersName' => $request->groomersName,
        ]);
    
        // Return a response indicating success
        return response()->json([
            'status' => 200,
            'message' => 'Groomer updated successfully',
            'data' => $groomer,
        ]);
    }

    
    public function delete(request $request)
    {
        $groomer = Groomer::findOrFail($request->id);
        $groomer->delete();

        return response() ->json([
            'status'=> '200',
            'message' => 'Deleted Successfully' 
        ]);
    }
}
