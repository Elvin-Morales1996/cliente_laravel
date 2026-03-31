<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
      public function index()
    {
        $clientes = DB::table('venta_catalogo_cliente')->get();
        $tipos_documento = DB::table('venta_mh_tipo_documento')->get();
        $tipos_actividad = DB::table('venta_mh_actividad_economica')->get();
        $tipos_contribuyente = DB::table('venta_mh_tipo_contribuyente')->get();
        $tipos_departamento = DB::table('venta_mh_departamento')->get();
        $tipos_municipio = DB::table('venta_mh_municipio')->get();
        return view('clientes', compact('clientes', 'tipos_documento', 'tipos_actividad', 
        'tipos_contribuyente', 'tipos_departamento', 'tipos_municipio'));
    }

    public function store(Request $request)
    {
        DB::table('venta_mh_tipo_documento')->insert([
            'nombre' => $request->nombre,
            'nrc' => $request->nrc,
            'dui_nit' => $request->dui_nit,
            'tipo_cliente' => $request->tipo_cliente,
            'created_at' => now()
        ]);

        return response()->json(['success' => true]);
    }
}
