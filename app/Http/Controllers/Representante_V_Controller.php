<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * Description of Representante_V_Controller
 *
 * @author HP INTEL
 */
class Representante_V_Controller extends Controller {

    public function index() {

        return view('Representante_ventas.menu_representante_V_');
    }

    public function crearcliente() {

        return view('Representante_ventas.crear_cliente');
    }

    public function crearcliente_p(Request $request) {

        $validatedData = $request->validate([
            'nombre_de_la_empresa' => 'required|unique:customers',
            'primer_nombre' => 'required|alpha',
            'primer_apellido' => 'required|alpha',
            'telefono' => 'required|numeric',
            'direcion_1' => 'required',
        ]);

        DB::insert('insert into customers (nombre_de_la_empresa,contactLastName,contactFirstName,phone,addressLine1, '
                . 'addressLine2,city,state,postalCode,salesRepEmployeeNumber,country,creditLimit)'
                . 'values (?,?,?,?,?,?,?,?,?,?,?,?)', [$request->nombre_de_la_empresa, $request->primer_nombre, $request->primer_apellido
            , $request->telefono, $request->direcion_1, $request->direcion_2, $request->ciudad, $request->estado, $request->codigo_postal, null, $request->pais, $request->limete_credito]);


        return back()->with('mensaje', 'Cliente registrado exitosamente');
    }

    public function identificarcliente() {

        $users = DB::select('select * from customers');
        return view('Representante_ventas.identificar_cliente')->with(['consulta' => $users]);
    }

    public function identificarcliente_buscador(Request $request) {
        
         $validatedData = $request->validate([
            'termino_busqueda' => 'required',
        ]);
        

        if ($_POST['opcion'] == "nombre") {

            $users = DB::select('select * from customers where contactLastName = ?',[$_POST['termino_busqueda']]);
            return view('Representante_ventas.identificar_cliente')->with(['consulta' => $users]);
        } else {

            $users = DB::select('select * from customers where contactFirstName = ?',[$_POST['termino_busqueda']]);
            return view('Representante_ventas.identificar_cliente')->with(['consulta' => $users]);
        }
    }

}
