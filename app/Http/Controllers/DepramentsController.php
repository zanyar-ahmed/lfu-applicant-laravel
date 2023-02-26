<?php

namespace App\Http\Controllers;

use App\Models\depraments;
use Illuminate\Http\Request;

class DepramentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
  
        $posts = depraments::all();

        return response()->json([
            'status' => true,
            'posts' => $posts
        ]);    }

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

        $post = depraments::create($request->all());


        return response()->json([
            'status' => true,
            'message' => "department Created successfully!",
            'post' => $post
        ], 200);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\depraments  $depraments
     * @return \Illuminate\Http\Response
     */
    public function show( $depraments)
    {
        
        $product = depraments::find($depraments);
        if (is_null($product)) {
        return $this->sendError('Applicant not found.');
        }
return response()->json([
"success" => true,
"message" => "Deparment retrieved successfully.",
"data" => $product
]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\depraments  $depraments
     * @return \Illuminate\Http\Response
     */
    public function edit(depraments $depraments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\depraments  $depraments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, depraments $depraments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\depraments  $depraments
     * @return \Illuminate\Http\Response
     */
    public function destroy(depraments $depraments)
    {
        //
    }
}
