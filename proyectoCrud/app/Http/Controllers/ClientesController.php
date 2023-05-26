<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //paguina de inicio del crud en laravel

        $datos = clientes::orderBy('paterno', 'desc')->paginate(5);
        return view('inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //es el formulario donde podemos agregar datos es la vista para crear los datos que se agregaran
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //es util y sirve ppara el guardado de la base de datos
        $clientes = new clientes();
        $clientes->nombre = $request->post('nombre');
        $clientes->paterno = $request->post('paterno');
        $clientes->materno = $request->post('materno');
        $clientes->fecha_nacimiento = $request->post('fecha_nacimiento');
        $clientes->dni = $request->post('dni');
        $clientes->correo = $request->post('correo');
        $clientes->telefono = $request->post('telefono');
        $clientes->save();

        return redirect()->route('clientes.index')->with("succes", "Se agregado con exito!!");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //sirve para obtener un registro de nuestra tabla
        $clientes = clientes::find($id);
        return view('eliminar', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //nos sirve para el movimiento de los datos que vallamos a editar para colocarlos en un formulario
        $clientes = clientes::find($id);
        return view("actualizar", compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //es  el acceso a los datos actualizando los datos
        $clientes = clientes::find($id);
        $clientes->nombre = $request->post('nombre');
        $clientes->paterno = $request->post('paterno');
        $clientes->materno = $request->post('materno');
        $clientes->fecha_nacimiento = $request->post('fecha_nacimiento');
        $clientes->dni = $request->post('dni');
        $clientes->correo = $request->post('correo');
        $clientes->telefono = $request->post('telefono');
        $clientes->save();

        return redirect()->route('clientes.index')->with("succes", "Se Actualizo con exito!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //elimina un registro 
        $clientes = clientes::find($id);
        $clientes->delete();
        return redirect()->route('clientes.index')->with("succes", "Se Elimino al cliente con exito!!");
    }
}
