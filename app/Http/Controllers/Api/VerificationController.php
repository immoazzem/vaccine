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
            $data['message'] = 'Please Select Category';
        }

        if (empty($request->id_no)) {
            $data['message'] = 'Please Enter ID Number';
        }

        if (empty($request->dob)) {
            $data['message'] = 'Please Enter Date of Birth';
        }// return dob


        $people = People::where('id_no', $request->id_no)->where('dob', $request->dob)->first();

        //check if NID exists
        if (empty($people)) {
            $data['message'] = 'No Record Found';
        } else {
            $category = Category::where('id', $request->category_id)->first();

            if (empty($category)) {
                $data['message'] = 'No Category Found';
            } else {
                //check age eligibility
                $current_age = getAge($people->dob);
                if ($current_age >= $category->min_age) {
                    //registration allowed
                    if ($people->registered) {
                        $data['message'] = 'Already Registered'; 
                    }else{
                        $data = [
                            'success' => true,
                            'message' => 'Enter Your Information',
                            'people' => $people
                        ];
                    }

                } else {
                    $data['message'] = 'Minimum age for ' . $category->name . ' is ' . $category->min_age;
                }
            }
        }


        return $data;
    }
}
