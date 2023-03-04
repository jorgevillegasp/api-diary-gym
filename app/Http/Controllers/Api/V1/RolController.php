<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Mostrar una lista del recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = array(
            "monto"                 => 1000,
            "valor_transferencia"   => 950,
            "nombre_cliente"        => "Juan Pérez",
            "numero_cuenta_cliente" => "123456789",
            "nombre_beneficiario"   => "María Gómez",
            "numero_cuenta_beneficiario" => "123456789",
            "fecha_transaccion"     => "20/02/2023",
            "banco_destino"         => "Bancho Guayaquil"
        );
        return response()->json($datos);
    }
}
