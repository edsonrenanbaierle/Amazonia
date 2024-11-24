<?php

namespace App\Controller;

use App\http\Request;

class ProdutosUtilizacoesController extends BaseController
{
    public function __construct()
    {
        if($_SERVER['REQUEST_METHOD'] !== "GET"){
            Request::authorization();
        }
        
        $produtos_utilizacoes_columns = [
            "id",
            "especie_id",
            "aproveitamento_alimentar",
            "apicola",
            "celulose_papel",
            "energia",
            "madeira_serrada_rolica",
            "medicinal",
            "alerta",
            "paisagistico",
            "plantios_ambientais",
            "substancias_tanantes"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('ProdutosUtilizacoes', $produtos_utilizacoes_columns, $dados_obrigatorios);
    }
}
