<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ServiceReport;

class ServiceReportController extends Controller
{
    public function getData(Request $request)
    { 
        $ServiceReport= ServiceReport :: all();

        return response()->json([
            'status' => '200',
            'message' => 'Retrieved Successfully',
            'result'=> $ServiceReport
        ]);
    }

          
    public function save(request $request)
        {
            $request->validate([
                'Service_date' => 'required|date_format:Y-m-d H:i:s',
                'service_comments' => 'required|string|max:255',
                'id_service_appointment' => 'required|exists:service_appointments,id',  // Ensure service appointment exists
            ]);
        
            // Create a new service report
            $serviceReport = ServiceReport::create([
                'Service_date' => $request->Service_date,
                'service_comments' => $request->service_comments,
                'id_service_appointment' => $request->id_service_appointment,
            ]);
        
            // Return JSON response
            return response()->json([
                'status' => 200,
                'message' => 'Service report saved successfully',
                'data' => $serviceReport,
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
