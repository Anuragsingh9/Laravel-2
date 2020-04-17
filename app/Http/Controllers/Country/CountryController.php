<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CountryModel;
use Validator;

class CountryController extends Controller
{
    public function country(){

        //This will show all records
        return response()->json(CountryModel::get(), 200);
    }

    public function countryById($id){

        //This will show a specified record

        $country = CountryModel::find($id);
        if(is_null($country)){
            return response()->json("Record not found",404);
        }

        return response()->json($country,200);
    }

    public function countrySave(Request $request){

        //This will save new record in database

        $rules = [
            'name'=>'required|min:3',
            'iso'=>'required|min:3|max:3',
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        $student = CountryModel::create($request->all());
        return response()->json($student, 201);
    }

    public function countryUpdate(Request $request, $id){

        //This will Update a record

        $country = CountryModel::find($id);
        if(is_null($country)){
            return response()->json("Record not found to update",404);

        }
        $country->update($request->all());
        return response()->json($country, 200);
    }

    public function countryDelete(Request $request, $id){

        //This will delete a record


        $country = CountryModel::find($id);
        if(is_null($country)){
            return response()->json("Record not found to delete",404);

        }

        $country->delete();
        return response()->json($country, 204);
    }


}
