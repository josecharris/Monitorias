<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id','ASC')->paginate(5);
        return view('courses/index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('id','ASC')->paginate(100);
        return view('courses/create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $monitor = User::where('id', $request->monitor )->first();
        $docente = User::where('id', $request->docente )->first();
        $path="";
        if($request->archivosubido ==""){
            $path = "None.";
        }else{
            $path = $request->archivosubido;
        }
        $course = new Course();
        $course->name = $request-> name;
        $course->started_at = $request->inicio;
        $course->finished_at = $request->fin;
        $course->url = $path;
        $course->save();
        $course->users()->attach($docente);
        $course->users()->attach($monitor);
        $request->session()->flash('mensaje', 'Curso Creado Con exito');
        return redirect()->route('courses.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::orderBy('id','ASC')->paginate(100);
        $course = Course::find($id);
        return view("courses.update", compact('course','users'));
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
        $docente = User::where('id', $request->docente )->first();
        $monitor = User::where('id', $request->monitor )->first();
        
        if($request->archivosubido ==""){
            $path = "None.";
        }else{
            $path = $request->archivosubido;
        }
        $course = Course::find($id);
        $course->name = $request-> name;
        $course->started_at = $request->inicio;
        $course->finished_at = $request->fin;
        $course->url = $path;
        $course->save();

        $course->users()->detach();
        $course->users()->attach($docente);
        $course->users()->attach($monitor);
        
        $request->session()->flash('mensaje', 'Curso Actualizado Con exito');
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Course::find($id);
        $curso->delete();
        return redirect()->route('courses.index')->with('mensaje','El registro fue eliminado.');
    }
}
