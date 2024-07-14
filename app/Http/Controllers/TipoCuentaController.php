<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class TipoCuentaController extends Controller
{
     // Define la URL base de la API como una propiedad de instancia
     private $serverapi = 'http://localhost:3000';

     /**
      * Muestra una lista de productos obtenidas de la API.
      *
      * @return \Illuminate\Http\Response
      */

      
      public function index()
      {
        $response = Http::get("$this->serverapi/TipoCuentaEdit");

    if ($response->successful()) {
        // Decodificar la respuesta JSON
        $DatoTipoCuenta = $response->json();

        // Pasar directamente el resultado a la vista
        return view('Mantenimiento.TipoCuentas')->with('ResulTipoCuenta', $DatoTipoCuenta);
    } else {
        // Manejar errores de manera específica si es necesario
        return response()->json(['error' => 'No se encontró ningún catalogo'], $response->status());
    }
      }


      



}
