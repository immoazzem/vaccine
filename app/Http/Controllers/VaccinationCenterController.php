<?php

namespace App\Http\Controllers;

use App\Models\VaccinationCenter;
use Illuminate\Http\Request;

class VaccinationCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allCenter = VaccinationCenter::all();
        return view('vaccination_centers.index', compact('allCenter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VaccinationCenter  $vaccinationCenter
     * @return \Illuminate\Http\Response
     */
    public function show(VaccinationCenter $vaccinationCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VaccinationCenter  $vaccinationCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(VaccinationCenter $vaccinationCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VaccinationCenter  $vaccinationCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VaccinationCenter $vaccinationCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VaccinationCenter  $vaccinationCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(VaccinationCenter $vaccinationCenter)
    {
        //
    }

    //
    public function centerEnableDisable($id)
    {
        $center = VaccinationCenter::findOrFail($id);
        $center->enabled = !$center->enabled;
        $center->save();

        $notification = array(
            'message' => 'Vaccination Center '. $center->name.' has been updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('vaccination-centers.index')->with($notification);
    }
}
