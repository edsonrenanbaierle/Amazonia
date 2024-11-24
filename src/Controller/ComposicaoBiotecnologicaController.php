<?php

namespace App\Controller;

use App\http\Request;

class ComposicaoBiotecnologicaController extends BaseController
{
    public function __construct()
    {
        if($_SERVER['REQUEST_METHOD'] !== "GET"){
            Request::authorization();
        }
        
        $composicao_biotecnologica_columns = [
            "id",
            "especie_id",
            "variacao_carboidratos",
            "variacao_proteinas",
            "grupo_substancias",
            "levantamento_bibliografico",
            "biofertilizante"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('ComposicaoBiotecnologica', $composicao_biotecnologica_columns, $dados_obrigatorios);
    }
}
