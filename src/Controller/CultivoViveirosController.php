<?php

namespace App\Controller;

use App\http\Request;

class CultivoViveirosController extends BaseController
{
    public function __construct()
    {
        if($_SERVER['REQUEST_METHOD'] !== "GET"){
            Request::authorization();
        }
        
        $cultivo_viveiros_columns = [
            "id",
            "especie_id",
            "implantacao_viveiros",
            "caracteristicas_silviculturais",
            "habito",
            "sistemas_plantio",
            "sistemas_agroflorestais",
            "crescimento_producao",
            "numero_sementes_por_kg",
            "tratamento_pre_germinativo",
            "longevidade_armazenamento",
            "germinacao_laboratorio"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('CultivoViveiros', $cultivo_viveiros_columns, $dados_obrigatorios);
    }
}
