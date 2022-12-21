<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;




class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $id=$request->input('id');

        // if($id!=""){
        //     $posts = Applicant::where('id',$id)->get();

        // }
        // else{
        //     
        // }
        $posts = Applicant::paginate(15);
        return response()->json([
            'status' => true,
            'posts' => $posts
        ]);
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
      //  $input = $request->all();
        $request->validate([
            'fullName' => 'required',
            'email' => 'required',
            'dep' => 'required',
            'graduYear' => 'required',
            'placeTo' => 'required',
            'lang' => 'required',
            'date' => 'required',
            'grad' => 'required',
        ]);
        $post = Applicant::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Applicant Created successfully!",
            'post' => $post
        ], 200);
        
      


       
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        $product = Applicant::find($applicant);
if (is_null($product)) {
return $this->sendError('Applicant not found.');
}
return response()->json([
"success" => true,
"message" => "Product retrieved successfully.",
"data" => $product
]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        $request->validate([
            'fullName' => 'required',
            'email' => 'required',
            'dep' => 'required',
            'graduYear' => 'required',
            'placeTo' => 'required',
            'lang' => 'required',
            'date' => 'required',
            'grad' => 'required',
        ]);
        $applicant->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Post Updated successfully!",
            'post' => $applicant
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant, Request $request)
    {
        $id=$request->input('id');
        $applicant = Applicant::find($id);
        $applicant->delete();

        return response()->json([
            'status' => true,
            'message' => "Post Deleted successfully!",
        ], 200);
        //
    }
}
