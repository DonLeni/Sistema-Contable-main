<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransaccionController extends Controller
{
    private $serverapi = 'http://localhost:3000';

    public function index()
    {
        $response = Http::get("$this->serverapi/LibroDiario");

        if ($response->successful()) {
            $DatoLibroDiario = $response->json();
            $objetosLibroDiario = [];

            foreach ($DatoLibroDiario as $item) {
                $objetosLibroDiario[] = (object) $item;
            }

            return view('Contabilidad.LibroDiario')->with('ResulLibroDiario', $objetosLibroDiario);
        } else {
            return response()->json(['error' => 'No se encontró ningún Libro Diario'], $response->status());
        }
    }

    public function create()
    {
        try {
            // Obtener tipos de asiento
            $responseTiposAsiento = Http::get("$this->serverapi/tipos-asiento");
            $tiposAsiento = $responseTiposAsiento->successful() ? $responseTiposAsiento->json() : [];
    
            // Obtener datos de libro diario editado
            $responseLibroDiarioEdit = Http::get("$this->serverapi/LibroDiarioEdit");
            $DatosLibroDiarioEdit = $responseLibroDiarioEdit->successful() ? $responseLibroDiarioEdit->json() : [];
    
            // Obtener datos de transacción (revisar la URL correcta)
            $responseTransaccion = Http::get("$this->serverapi/registrar-transaccion");
            $datosTransaccion = $responseTransaccion->successful() ? $responseTransaccion->json() : [];
    
            // Obtener datos de usuarios (revisar la URL correcta)
            $responseUsuarios = Http::get("$this->serverapi/user");
            $datosUser = $responseUsuarios->successful() ? $responseUsuarios->json() : [];
    
            // Obtener datos del catálogo de cuentas
            $responseCatalogoCuentas = Http::get("$this->serverapi/catalogoEdit");
            $datoCatalogo = $responseCatalogoCuentas->successful() ? $responseCatalogoCuentas->json() : [];
    
            // Retornar la vista con los datos obtenidos
            return view('Contabilidad.RegistroTransacciones', compact('tiposAsiento', 'DatosLibroDiarioEdit', 'datosTransaccion', 'datosUser', 'datoCatalogo'));
        } catch (\Exception $e) {
            // Manejar errores de conexión o errores específicos de la API
            return redirect()->back()->with('error', 'Error al conectar con la API: ' . $e->getMessage());
        }
    }
    

    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo' => [
                'required',
                'numeric',
                function ($attribute, $value, $fail) {
                    // Definir los códigos que no deseas permitir
                    $invalidCodes = [1, 2, 3, 4, 5, 6, 11, 12, 21, 22];
                    
                    // Verificar si el código está en la lista de inválidos
                    if (in_array($value, $invalidCodes)) {
                        $fail("El código seleccionado no es válido.");
                    }
                },
            ],
            'fecha' => 'required|date',
            'descripcion' => 'required|string',
            'tipo_movimiento' => 'required|in:DEBE,HABER',
            'monto' => 'required|numeric',
            'usuario_id' => 'required|integer',
        ]);
        
        $datosTransaccion = $request->only([
            'codigo',
            'fecha',
            'descripcion',
            'tipo_movimiento',
            'monto',
            'usuario_id'
        ]);
        

        try {
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
