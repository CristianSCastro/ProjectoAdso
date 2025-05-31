<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Color;

class ColorController extends Controller
{
    public function getData(Request $request)
    { 
        $color= Color :: all();

        return response()->json([
            'status' => '200',
            'message' => 'Retrieved Successfully',
            'result'=> $color
        ]);
    }

          
    public function save(request $request)
        {
            $color=color::create ([
                'color'=>$request->color,
            ]);


             return response() ->json([
            'status'=> '200',
            'message' => 'Saved Successfully',
            'data' =>$color,
            ]);
        }

    public function update(request $request){

        $color= Color::findOrFail($request->id);

        $color->update([
            'color'=>$request->color,
        ]);

        return response() ->json([
            'status'=> '200',
            'message' => 'Updated Successfully' 
        ]);
    }

    
    public function delete(request $request)
    {
        $color= Color::findOrFail($request->id);
        $color->delete();

        return response() ->json([
            'status'=> '200',
            'message' => 'Deleted Successfully' 
        ]);
    }
}
