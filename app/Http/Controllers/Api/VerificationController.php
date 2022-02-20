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

        $data = [
            'success' => false,
            'message' => '',
            'people' => []
        ];

        if (empty($request->category_id)) {
            return $data['message'] = "category id needed";
        }

        if (empty($request->id_no)) {
            return $data['message'] = "ID no needed";
        }

        if (empty($request->dob)) {
            return $data['message'] = "Date of birth needed";
        }


        $people = People::where('id_no', $request->id_no)->where('dob', $request->dob)->first();

        //check if NID exists
        if (empty($people)) {
            return $data['message'] = "ID Not found";
        } else {
            //check if Dob matches

            //Dob matched
            $category = Category::where('id', $request->category_id)->first();

            if (empty($category)) {
                return $data['message'] = "Category not found";
            } else {
                //check age eligibility
                $current_age = getAge($people->dob);
                if ($current_age >= $category->min_age) {
                    //registration allowed


                } else {
                    return $data['message'] = 'Minimum age for ' . $category->name . ' is ' . $category->min_age;
                }
            }
        }


        return $data;
    }
}
