<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Owner;

class OwnerController extends Controller
{
    public function getData(Request $request)
    { 
        $owner= Owner :: all();

        return response()->json([
            'status' => '200',
            'message' => 'Retrieved Successfully',
            'result'=> $owner
        ]);
    }

          
    public function save(request $request)
        {
            $request->validate([
                'ownersName' => 'required|string|max:255',
                'address' => 'required|string|max:255',
            ]);

            $owner = Owner::create ([
                'ownersName'=>$request->ownersName,
                'address'=>$request->address,
            ]);
             return response() ->json([
            'status'=> '200',
            'message' => 'Saved Successfully',
            'data' =>$owner, 
            ]);
        }

    public function update(request $request){

        $owner= Owner::findOrFail($request->id);

        $owner->update([
            'ownersName'=>$request->ownersName,
            'address'=>$request->address,
        ]);

        return response() ->json([
            'status'=> '200',
            'message' => 'Updated Successfully' 
        ]);

        return response() ->json([
            'status'=> '200',
            'message' => 'Updated Successfully' 
        ]);
    }

    
    public function delete(request $request)
    {
        $owner= Owner::findOrFail($request->id);

        $owner->delete([
            'ownersName'=>$request->ownersName,
            'address'=>$request->address,
        ]);

        return response() ->json([
            'status'=> '200',
            'message' => 'Deleted Successfully' 
        ]);
    }
}
