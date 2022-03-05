<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\District;
use App\Models\Division;
use App\Models\Registration;
use App\Models\Upazila;
use App\Models\VaccinationCenter;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function divisions()
    {
        $divisions = Division::where('enabled', 1)->get();
        return response()->json($divisions);
    }


    public function districts(Request $request)
    {
        $districts = District::where('enabled', 1)->where('division_id', $request->division_id)->get();
        return response()->json($districts);
    }

    public function upazilas(Request $request)
    {
        $upazilas = Upazila::where('enabled', 1)->where('district_id', $request->district_id)->get();
        return response()->json($upazilas);
    }

    public function vaccinationCenters(Request $request)
    {
        $vaccinationCenters = VaccinationCenter::where('enabled', 1)->where('upazila_id', $request->upazila_id)->get();
        return response()->json($vaccinationCenters);
    }

    public function phoneVerify(Request $request)
    {
        $sid = getenv("TWILIO_ACCOUNT_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_verify_sid = getenv("TWILIO_VERIFICATION_SID");
        $twilio = new Client($sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create('+88' . $request->phone, "sms");

        return response()->json($verification->status);
    }


    public function phoneVerifyCode(Request $request) {
        $sid = env("TWILIO_ACCOUNT_SID");
        $token = env("TWILIO_AUTH_TOKEN");
        $twilio_verify_sid = env("TWILIO_VERIFICATION_SID");
        $twilio = new Client($sid, $token);

        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($request->verify_code, // code
                ["to" => "+88" . $request->phone]
            );

        return response()->json($verification->status);
    }

    public function registerPeople(Request $request)
    {
        $category_id = $request->category_id;
        $id_no = $request->id_no;
        $name = $request->name;
        $phone = $request->phone;
        $center_id = $request->center_id;
        $dob = $request->dob;
        $diabates = $request->diabates;
        $division_id = $request->division_id;
        $district_id = $request->district_id;
        $upazila_id = $request->upazila_id;
        $phone_no = $request->phone_no;
        $unique_id = md5($id_no . $phone);

        $people = new Registration();
        $people->id_no = $id_no;
        $people->name = $name;
        $people->dob = $dob;
        $people->phone_no = '01678123456';
        $people->center_id = $center_id;
        $people->diabates = $diabates;
        $people->unique_id = $unique_id;
        $people->save();

        return response()->json(['message' => 'success']);
    }

    public function registrationStatus(Request $request)
    {
        $id_no = $request->id_no;
        $registration = Registration::where('id_no', $id_no)->first();

        return response()->json($registration);
    }
}
