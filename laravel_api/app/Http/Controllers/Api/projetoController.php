<?php

namespace App\Http\Controllers\Api;

use App\Models\tb_projeto_rouanet_teste;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class projetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projetos = tb_projeto_rouanet_teste::all();
        return $projetos;
    }
}
