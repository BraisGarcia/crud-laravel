<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;

class StudentController extends Controller
{
    public function index(){
        $estudiantes = students::all();
        return view('welcome', compact('estudiantes'));
    }

    public function create(){
        
        return view('create');
    }

    public function store (Request $request){
        
        $this->validate($request,[
            'nombre'=>'required',
            'email'=>'required',
            'telefono'=>'required'
        ]
    );

    $estudiante=new students;
    $estudiante->nombre=$request->nombre;
    $estudiante->apellidos=$request->apellidos;
    $estudiante->email=$request->email;
    $estudiante->telefono=$request->telefono;
    $estudiante->save();
    return redirect (route('home'))->with('successMsg','Estudiante añadido correctamente');
    }
}
