<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ServiceAppointment;

class ServiceAppointmentController extends Controller
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
                'apptDate' => 'required|date_format:Y-m-d H:i:s',
                'id_pet' => 'required|exists:pets,id',
                'id_groomer' => 'required|exists:groomers,id',
                'id_service' => 'required|exists:services,id',
            ]);
        
            // Create a new service appointment
            $appointment = ServiceAppointment::create([
                'apptDate' => $request->apptDate,
                'id_pet' => $request->id_pet,
                'id_groomer' => $request->id_groomer,
                'id_service' => $request->id_service,
            ]);
        
            // Return JSON response
            return response()->json([
                'status' => 200,
                'message' => 'Service appointment saved successfully',
                'data' => $appointment,
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
