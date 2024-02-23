<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Company;

class ApiController extends Controller
{
    public function consultarCep($cep) {
        try {
            $empresa = Company::where('cep', $cep)->get();
            return response()->json([
                'success' => true,
                'data' => $empresa
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function listarEmpresas() {
        try {
            $empresas = Company::all();
            return response()->json([
                'success' => true,
                'data' => $empresas
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ])->setStatusCode(403);
        }
    }
}
