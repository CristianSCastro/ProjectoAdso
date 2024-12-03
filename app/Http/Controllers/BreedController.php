<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Breed;

class BreedController extends Controller
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
           // $Breed = Breed::create([
               // "breedsName"=>$request->breedsName,
           // ]);

            $Breed=new Breed();
            $Breed->breedsName= $request->breedsname;
            $Breed->save();

             return response() ->json([
            'status'=> '200',
            'message' => 'Saved Successfully' 
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
    