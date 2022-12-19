<?php

namespace App\Http\Controllers;

use App\Models\GraduationRounds;
use Illuminate\Http\Request;

class GraduationRoundsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $posts = GraduationRounds::paginate(15);

        return response()->json([
            'status' => true,
            'posts' => $posts
        ]);  
        //
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
        //'from', 'to',
        $request->validate([
            'from' => 'required',
            'to' => 'required',
        ]);

        $post = GraduationRounds::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "department Created successfully!",
            'post' => $post
        ], 200);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GraduationRounds  $graduationRounds
     * @return \Illuminate\Http\Response
     */
    public function show(GraduationRounds $graduationRounds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GraduationRounds  $graduationRounds
     * @return \Illuminate\Http\Response
     */
    public function edit(GraduationRounds $graduationRounds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GraduationRounds  $graduationRounds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GraduationRounds $graduationRounds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GraduationRounds  $graduationRounds
     * @return \Illuminate\Http\Response
     */
    public function destroy(GraduationRounds $graduationRounds)
    {
        //
    }
}
