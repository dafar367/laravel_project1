<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use Illuminate\Support\Str;


class CourseResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $course = course::all();
        return view("courseproject",[
            'courses'=>$course,
            'title' =>'Courses'
        ]);
        return view('courseproject', compact('courses', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("createcourse", [
            'title' =>'createcourse'
            ]);
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

        course::create([
            'course_code' => Str::upper(Str::substr($request->matkul, 0, 6)),
            'matkul' => $request->matkul,
            'guru' => $request->guru,
            'sks' => $request->sks,
            'description' => $request->description
        ]);
        return redirect(route('courseproject.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $course = course::where('course_code', $id)->get()->first();
        return view("showcourse",[
            'title' =>'Courses',
            'courses'=> $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $course = course::findOrFail($id);
        return view("editcourse",[
            'title' =>'editproject',
            'course'=> $course
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $course = course::findOrFail($id);
        $course->update([
            'course_code' => Str::upper(Str::substr($request->matkul,0,3)),
            'matkul' => $request->matkul,
            'guru' => $request->guru,
            'sks' => $request->sks,
            'description' => $request->description
        ]);

        return redirect(route('courseproject.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $course = course::findOrFail($id);
        $course->delete();
        return redirect(route('courseproject.index'));
    }
}
