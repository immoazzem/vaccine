<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\People;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    //
    public function verify(Request $request)
    {

        // $data = [
        //     'success' => false,
        //     'message' => '',
        //     'people' => []
        // ];
        //$data['message'] = 

        if (empty($request->category_id)) {
            return 'category id needed';
        }

        if (empty($request->id_no)) {
            return 'ID no needed';
        }

        if (empty($request->dob)) {
            return 'Date of birth needed';
        }


        $people = People::where('id_no', $request->id_no)->where('dob', $request->dob)->first();

        //check if NID exists
        if (empty($people)) {
            return 'ID Not found';
        } else {
            //check if Dob matches

            //Dob matched
            $category = Category::where('id', $request->category_id)->first();

            if (empty($category)) {
                return 'Category not found';
            } else {
                //check age eligibility
                $current_age = getAge($people->dob);
                if ($current_age >= $category->min_age) {
                    //registration allowed
                    if ($people->registered == 1) {
                        return 'Already registered';
                    }else{
                        return $people;
                    }

                } else {
                    return 'Minimum age for ' . $category->name . ' is ' . $category->min_age;
                }
            }
        }


        // return $data;
    }
}
