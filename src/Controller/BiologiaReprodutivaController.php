<?php

namespace App\Controller;

use App\http\Request;

class BiologiaReprodutivaController extends BaseController
{
    public function __construct()
    {
        if($_SERVER['REQUEST_METHOD'] !== "GET"){
            Request::authorization();
        }

        $biologia_reprodutiva_columns = [
            "id",
            "especie_id",
            "sistema_sexual",
            "vetor_polinizacao",
            "floracao",
            "frutificacao",
            "dispersao_frutos_sementes",
            "qualidade_sementes"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('BiologiaReprodutiva', $biologia_reprodutiva_columns, $dados_obrigatorios);
    }
}
