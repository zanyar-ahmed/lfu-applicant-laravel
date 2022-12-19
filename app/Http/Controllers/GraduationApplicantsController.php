<?php

namespace App\Http\Controllers;


use App\Models\GraduationApplicants;
use Illuminate\Http\Request;

class GraduationApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         

      //  $users = User::paginate(15);

        $posts = GraduationApplicants::paginate(15);

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
     
             'fullNameKu'=> 'required',
           'fullNameEng'=> 'required',
            'email'=> 'required',
            'dep'=> 'required',
            'graduwation'=> 'required',
            'phoneNumber'=> 'required',
            'graduYear'=> 'required',
            'placeTo'=> 'required',
            'lang'=> 'required',
            'date'=> 'required',
            'require'=> 'required',
            'grad'=> 'required',
        ]);
      
        $post = GraduationApplicants::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "GraduationApplicants Created successfully!",
            'post' => $post
        ], 200);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GraduationApplicants  $graduationApplicants
     * @return \Illuminate\Http\Response
     */
    public function show(GraduationApplicants $graduationApplicants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GraduationApplicants  $graduationApplicants
     * @return \Illuminate\Http\Response
     */
    public function edit(GraduationApplicants $graduationApplicants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GraduationApplicants  $graduationApplicants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GraduationApplicants $graduationApplicants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GraduationApplicants  $graduationApplicants
     * @return \Illuminate\Http\Response
     */
    public function destroy(GraduationApplicants $graduationApplicants)
    {
        //
    }
}
