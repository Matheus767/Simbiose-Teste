<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_projeto_rouanet_teste extends Model
{
    protected $table = 'tb_projeto_rouanet_teste';
    use HasFactory;

    protected $fillable = ['pronac',  'ano_projeto',  'nome',  'segmento',  'area',  'uf',  'municipio',  'data_inicio',  'data_termino',  'situacao',  'mecanismo',  'enquadramento',  'valor_captado',  'valor_aprovado',  'acessibilidade',  'objetivos',  'justificativa',  'etapa',  'ficha_tecnica',  'impacto_ambiental',  'especificacao_tecnica',  'providencia',  'democratizacao',  'sinopse',  'resumo',  'valor_projeto',  'outras_fontes',  'valor_proposta',  'valor_solicitado',  'objetivo',  'estrategia_execucao',  'link_incentivadores'];
    
}
