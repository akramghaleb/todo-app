<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index(){
        $data = Todo::all();
        return response()->json($data);
    }

    public function show($id){
        $data = Todo::find($id);
        return response()->json($data);
    }

    public function insert(Request $request){
        $validateData = Validator::make($request->all(), [
            'name'=>'required|max:100',
            'description'=>'required|min:3'
        ]);
        if($validateData->fails()) {
            throw new HttpResponseException(response()->json([
                'success'   => false,
                'message'   => 'Validation errors',
                'data'      => $validateData->errors()
            ]));
        }else{
            $data = new Todo;
            $data->name = $request->name;
            $data->description = $request->description;
            if($request->completed != null){
                $data->completed = $request->completed ? 0 : 1;
            }
            $data->save();

            return response()->json([
                'success' => true,
                'message' => 'Add successfully',
                'data' => $request->name
            ]);
        }

    }

    public function update(Request $request,$id){
        $validateData = Validator::make($request->all(), [
            'name'=>'required|max:100',
            'description'=>'required|min:3'
        ]);
        if($validateData->fails()) {
            throw new HttpResponseException(response()->json([
                'success'   => false,
                'message'   => 'Validation errors',
                'data'      => $validateData->errors()
            ]));
        }else{
            $data =  Todo::find($id);
            $data->name = $request->name;
            $data->description = $request->description;
            if($request->completed != null){
                $data->completed = $request->completed ? 0 : 1;
            }
            $data->save();

            return response()->json([
                'success' => true,
                'message' => 'Update successfully',
                'data' => $request->name
            ]);
        }

    }

    public function completed($id){
        $data =  Todo::find($id);
        $data->completed = $data->completed == 1 ? 0 : 1;
        $data->save();

        return response()->json([
            'success' => true,
            'message' => 'Update successfully',
            'data' => $data
        ]);

    }

    public function delete($id){
        $data =  Todo::find($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'delete successfully',
        ]);

    }
}
