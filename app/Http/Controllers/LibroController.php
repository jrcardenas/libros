<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros=Libro::all();
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libro_datos=$request->validate(


            [
                'ISBN'=> 'required|max:100',
                'titulo'=>'required|max:255',
                'autor'=>'required|max:100',
                'anyo'=>'max:100',
                'editorial'=>'max:100',
                'edicion'=>'max:100',
                'user_id'=>'max:100'
            ]
            );
            Libro::create($libro_datos);
            return redirect('/libros')->with('ok','Libro agregado a la BBDD');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

$libro=Libro::findOrFail($id);
return view ('libros.show', compact ("libro"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro=Libro::findOrFail($id);

        return view('libros.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $libro_datos=Libro::findOrFail($id);

        $libro_datos->update($request->all());
            
            return redirect('/libros');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro_datos=Libro::findOrFail($id);

        $libro_datos->delete();
        return redirect('/libros')->with('success', '¡libro borrado!');
    }
}
