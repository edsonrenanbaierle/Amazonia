<?php

namespace App\Controller;

use App\http\Request;

class TaxonomiaController extends BaseController
{
    public function __construct()
    {
        if($_SERVER['REQUEST_METHOD'] !== "GET"){
            Request::authorization();
        }
        
        $taxonomia_columns = [
            "id",
            "especie_id",
            "divisao",
            "clado",
            "ordem",
            "familia",
            "subfamilia",
            "genero",
            "tribo",
            "secao",
            "binomio_especifico",
            "primeira_publicacao",
            "sinonimia_botanica",
            "nomes_vulgares_uf",
            "nomes_vulgares_exterior",
            "etimologia"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('Taxonomia', $taxonomia_columns, $dados_obrigatorios);
    }
}
