<?php

namespace App\Controller;

use App\http\Request;

class SolosController extends BaseController
{
    public function __construct()
    {
        if($_SERVER['REQUEST_METHOD'] !== "GET"){
            Request::authorization();
        }
        
        $solos_columns = [
            "id",
            "especie_id",
            "descricao"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('Solos', $solos_columns, $dados_obrigatorios);
    }
}
