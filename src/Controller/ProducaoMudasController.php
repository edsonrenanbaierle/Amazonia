<?php

namespace App\Controller;

use App\http\Request;

class ProducaoMudasController extends BaseController
{
    public function __construct()
    {
        if($_SERVER['REQUEST_METHOD'] !== "GET"){
            Request::authorization();
        }
        
        $producao_mudas_columns = [
            "id",
            "especie_id",
            "semeadura",
            "germinacao",
            "associacao_simbiotica",
            "cuidados_especiais"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('ProducaoMudas', $producao_mudas_columns, $dados_obrigatorios);
    }
}
