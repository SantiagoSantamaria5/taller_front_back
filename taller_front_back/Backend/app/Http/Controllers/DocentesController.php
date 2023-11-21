<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Docentes::all();
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
        $row = new Docentes();
        $row->id=$input['id'];
        $row->nombre=$input['nombre'];
        $row->idOcupacion=$input['idOcupacion'];
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
        $row = Docentes::find($id);
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
        $row = Docentes::find($id);
        if(empty($row)){
            return new Response('Señor usuario no existe el registro',404);
        }
        $input = $request->all();
        $row->id=$input['id'];
        $row->nombre=$input['nombre'];
        $row->idOcupacion=$input['idOcupacion'];
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
        $row = Docentes::find($id);
        if(empty($row)){
            return new Response('Señor usuario no existe el registro',404);
        }
        $row->delete();
        return "registro eliminado";
    }
}