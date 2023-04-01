<?php

namespace App\Http\Controllers\Api;

use App\Models\tb_projeto_rouanet_teste;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class projetoController extends Controller
{
    /**
     * @OA\Get(
     *     tags={"simbiose"},
     *     summary="Retorna uma lista com projetos",
     *     description="Retorna projetos consultados no banco",
     *     path="/api/projetos",
     *     @OA\Response(response="200", description="Uma lista com projetos"),
     * ),
     * 
     */
    /**
     * @OA\Get(
     *     path="/api/projetos",
     *     description="Retorna os projetos consultados no banco de dados",
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Dados Faltando"
     *     )
     * )
     */
    public function index()
    {
        $projetos = tb_projeto_rouanet_teste::all();
        return $projetos;
    }
}
