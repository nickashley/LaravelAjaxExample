<?php

namespace App\Http\Controllers;

use App\Drawing;
use Illuminate\Http\Request;

use App\Http\Requests;

class DrawingController extends Controller
{
    public function index($id = 1){
        
        $drawing = Drawing::firstOrCreate(['id'=>$id]);
        return response()->view('index', compact('drawing', 'id'));
    }

    public function post(Request $request, $id){

        $drawing = Drawing::firstOrCreate(['id'=>$id]);
        $drawing->fill($request->all());
        $drawing->save();

        return response()->json(['success'=>true]);
    }
}
