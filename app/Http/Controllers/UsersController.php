<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Information;
use App\Course;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','ASC')->paginate(5);
        return view('users/index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $role = Role::where('name', $request->Type)->first();
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $user->roles()->attach($role);
        $request->session()->flash('mensaje', 'Usuario Creado Con exito');
        return redirect()->route('users.index');
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
        $user = User::find($id);
        return view("users.edit")->with('user',$user);
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
        $role = Role::where('name', $request->Type)->first();
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        $request->session()->flash('mensaje', 'Usuario actualizado Con exito');
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('mensaje','El registro fue eliminado.');
    }

    public function mision(){
        $info = Information::find(1);
        return view('contenido/mision')->with('info',$info);
    }

    public function editMision(){
        return view('contenido/editMision');
    }
    public function updateMision(Request $request){
        $info = Information::find(1);
        $info->descripcion = $request->descripcion;
        $info->save();
        return redirect()->route('home');
    }

    public function vision(){
        $info = Information::find(2);
        return view('contenido/vision')->with('info',$info);;
    }

    public function editVision(){
        return view('contenido/editVision');
    }

    public function matricula(){
        $curso = Course::orderBy('id','ASC')->paginate(100);
        $users = User::orderBy('id','ASC')->paginate(100);
        return view('courses/matricula', compact('curso','users') );
    }

    public function matricular(Request $request){
        $estudiante = User::where('id', $request->estudiantes )->first();
        $curso = Course::where('id', $request->cursos)->first();
        $estudiante->courses()->attach($curso);
        return redirect()->route('home');
    }

    public function updateVision(Request $request){
        $info = Information::find(2);
        $info->descripcion = $request->descripcion;
        $info->save();
        return redirect()->route('home');
    }
}
