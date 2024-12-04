<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Pet;

class PetController extends Controller
{
    public function getData(Request $request)
    { 
        $pet= Pet :: all();

        return response()->json([
            'status' => '200',
            'message' => 'Retrieved Successfully',
            'result'=> $pet
        ]);
    }

    
          
    public function save(request $request)
        {
            $request->validate([
                'petsName' => 'required|string|max:255',
                'id_breeds' => 'required|exists:breeds,id',
                'id_color' => 'required|exists:colors,id',
                'id_age' => 'required|exists:ages,id',
                'id_vaccination' => 'required|exists:vaccinations,id',
                'id_owner' => 'required|exists:owners,id',
            ]);

            $pet = Pet::create([
                'petsName' => $request->petsName,
                'id_breeds' => $request->id_breeds,
                'id_color' => $request->id_color,
                'id_age' => $request->id_age,
                'id_vaccination' => $request->id_vaccination,
                'id_owner' => $request->id_owner,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Pet saved successfully',
                'data' => $pet,
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
