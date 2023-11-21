<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Cursos::all();
        return new Response($rows);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $row = new Cursos();
        $row->id=$input['id'];
        $row->nombre=$input['nombre'];
        $row->codDocente=$input['codDocente'];
        $row->save();
        return new Response($row);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Cursos::find($id);
        if(empty($row)){
            return new Response('Señor usuario no existe el registro',404);
        }
        return $row;
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
        $row = Cursos::find($id);
        if(empty($row)){
            return new Response('Señor usuario no existe el registro',404);
        }
        $input = $request->all();
        $row->id=$input['id'];
        $row->nombre=$input['nombre'];
        $row->codDocente=$input['codDocente'];
        $row->save();
        return $row;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Cursos::find($id);
        if(empty($row)){
            return new Response('Señor usuario no existe el registro',404);
        }
        $row->delete();
        return "registro eliminado";
    }
}