<?php

namespace App\Http\Controllers;

use App\Models\graduationApplicant;
use App\Http\Requests\StoregraduationApplicantRequest;
use App\Http\Requests\UpdategraduationApplicantRequest;

class GraduationApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoregraduationApplicantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregraduationApplicantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\graduationApplicant  $graduationApplicant
     * @return \Illuminate\Http\Response
     */
    public function show(graduationApplicant $graduationApplicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\graduationApplicant  $graduationApplicant
     * @return \Illuminate\Http\Response
     */
    public function edit(graduationApplicant $graduationApplicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategraduationApplicantRequest  $request
     * @param  \App\Models\graduationApplicant  $graduationApplicant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategraduationApplicantRequest $request, graduationApplicant $graduationApplicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\graduationApplicant  $graduationApplicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(graduationApplicant $graduationApplicant)
    {
        //
    }
}
