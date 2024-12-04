<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Vaccination;

class VaccinationController extends Controller
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
            $request->validate([
                'Vaccination_name' => 'required|string|max:255',
                'Vaccination_date' => 'required|date',
            ]);
            
            $vaccination=Vaccination::create ([
                'Vaccination_name'=>$request->Vaccination_name,
                'Vaccination_date'=>$request->Vaccination_date,
            ]);
             return response() ->json([
            'status'=> '200',
            'message' => 'Saved Successfully',
            'data'=> $vaccination

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
