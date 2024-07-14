<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransaccionController extends Controller
{


       // Define la URL base de la API como una propiedad de instancia
       private $serverapi = 'http://localhost:3000';

       /**
        * Muestra una lista de productos obtenidas de la API.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {
            // Llamada a la API para obtener los tipos de asiento
            $response = Http::get("$this->serverapi/tipos-asiento");
            $tiposAsiento = $response->json();
        
            // Llamada a la API para obtener las cuentas
            $response = Http::get("$this->serverapi/cuentas");
            $DatoCuenta = $response->json();
        
            // Llamada a la API para obtener las subcuentas
            $response = Http::get("$this->serverapi/subcuentas");
            $DatoSubCuenta = $response->json();
        
            // Llamada a la API para obtener las sub-subcuentas
            $response = Http::get("$this->serverapi/sub-subcuentas");
            $DatoSubSubCuenta = $response->json();

             // Llamada a la API para obtener las Catalogo
             $response = Http::get("$this->serverapi/catalogoEdit");
             $DatosCatalogoEdit = $response->json();


        
            // Retornar la vista con los datos obtenidos
            return view('Contabilidad.RegistroTransacciones', compact('tiposAsiento', 'DatoCuenta', 'DatoSubCuenta', 'DatoSubSubCuenta','DatosCatalogoCuentas','DatosCatalogoEdit'));
        }
        

        public function store(Request $request)
        {
            // Validar los datos del formulario
            $validated = $request->validate([
                'CAT_NOMBRE' => 'required|string|max:100',
                'CTA_NOMBRE' => 'required|string|max:100',
                'SCTA_NOMBRE' => 'required|string|max:100',
                'SSCTA_NOMBRE' => 'required|string|max:100',
                'TIAS_NOMBRE' => 'required|string|max:50',
                'ASI_FECHA' => 'required|date',
                'ASI_DESCRIPCION' => 'required|string',
                'MASI_DEBE' => 'required|numeric',
                'MASI_HABER' => 'required|numeric',
            ]);

            // Obtener los datos del formulario
            $datosTransaccion = $request->only([
            'CAT_NOMBRE',
            'CTA_NOMBRE',
            'SCTA_NOMBRE',
            'SSCTA_NOMBRE',
            'TIAS_NOMBRE',
            'ASI_FECHA',
            'ASI_DESCRIPCION',
            'MASI_DEBE',
            'MASI_HABER'
                // Ajusta los nombres de los campos según API
            ]);    
        
            try {
                // Llamada a la API para registrar la transacción
                $response = Http::post("$this->serverapi/registrar-transaccion", $datosTransaccion);
        
                if ($response->successful()) {
                    return redirect()->route('dashboard')->with('success', 'Transacción creada exitosamente');
                } else {
                    return redirect()->back()->with('error', 'Error al registrar la transacción. Inténtalo de nuevo más tarde.');
                }
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error al conectar con la API: ' . $e->getMessage());
            }
        }
        




}
