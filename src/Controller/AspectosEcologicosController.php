<?php

namespace App\Controller;

use App\http\Request;

class AspectosEcologicosController extends BaseController
{
    public function __construct()
    {
        if($_SERVER['REQUEST_METHOD'] !== "GET"){
            Request::authorization();
        }
        
        $aspectos_ecologicos_columns = [
            "id",
            "especie_id",
            "grupo_sucessional",
            "importancia_sociologica",
            "regeneracao_natural"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('AspectosEcologicos', $aspectos_ecologicos_columns, $dados_obrigatorios);
    }
}
