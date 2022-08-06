<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){
        $libros = $this->read();
        return view('libro.index', compact('libros'));
    }
    public function register(){
        $editoriales = Editorial::all();
        return view('libro.register', compact('editoriales'));
    }

    public function read(){
        return Libro::all();
    }

    public function create(Request $request)
    {
        $datos = $this->validateForm($request);
        Libro::insert($datos);
        return redirect(route('libroIndex'));
    }
    public function validateForm (Request $request){
        $validatedData = $request->validate([
            'isbn'=>'required|max:45',
            'titulo'=>'required|max:75',
            'fecha'=>'required',
            'edicion'=>'max:45',
            'descripcion'=>'max:100',
            'editorial_id'=>'required'
        ]);
        return $validatedData;
    }
}

