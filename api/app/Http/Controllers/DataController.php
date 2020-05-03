<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Register;
use App\Info;
class DataController extends Controller
{
    public function getData()
    {
    	$data = User::all();
    	return response()->json($data);
    }


    public function findbyid($id)
    {
        $employee=User::find($id);
        return response()->json($employee);

    }

    public function search($title)
    {
      $data = User::where('title','=',$title)

      ->get();
		    		 // dd($data);
      return response()->json($data);

  }


  public function store(Request $request)
  {
     // dd($request);
      // $name = $request->myquery;
      // query is a reserved keyword
       // return response()->json($name);

        $obj=new Register();
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->password=$request->password;

        $obj->blood=$request->blood;

         if($obj->save()){
           return response()->json([
                  '$msg'=>'successful'
             ]);
       
    }
}


    public function show()
    {
      $data = Register::all();
      return response()->json($data);

    }

    public function update(Request $request, $id)
    {
        $data = Register::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
          $data->blood=$request->blood;
          $data->password=$request->password;
           
           if($data->save())
        {
           
             return response()->json([
                  '$msg'=>'successful'
             ]);
        }
    }
     public function find($id)
    {
        $data = Register::find($id);
       return response()->json($data);
    }
     public function delete($id)
     {
        $obj=Register::find($id);
        if($obj->delete()){
           return response()->json([
                  '$msg'=>'successful'
             ]);
      }
  }
     
}


