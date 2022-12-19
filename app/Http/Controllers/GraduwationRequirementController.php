<?php

namespace App\Http\Controllers;

use App\Models\graduwationRequirement;
use Illuminate\Http\Request;

class GraduwationRequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $posts = graduwationRequirement::paginate(15);

        return response()->json([
            'status' => true,
            'posts' => $posts
        ]);  
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $post = graduwationRequirement::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "graduwationRequirement Created successfully!",
            'post' => $post
        ], 200);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\graduwationRequirement  $graduwationRequirement
     * @return \Illuminate\Http\Response
     */
    public function show(graduwationRequirement $graduwationRequirement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\graduwationRequirement  $graduwationRequirement
     * @return \Illuminate\Http\Response
     */
    public function edit(graduwationRequirement $graduwationRequirement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\graduwationRequirement  $graduwationRequirement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, graduwationRequirement $graduwationRequirement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\graduwationRequirement  $graduwationRequirement
     * @return \Illuminate\Http\Response
     */
    public function destroy(graduwationRequirement $graduwationRequirement)
    {
        //
    }
}
