<?php

namespace App\Controller;

use App\DAO\AnexosDAO;
use App\http\Request;

class AnexosController extends BaseController
{
    public function __construct()
    {
        if($_SERVER['REQUEST_METHOD'] !== "GET"){
            Request::authorization();
        }
        
        $anexos_columns = [
            "id",
            "especie_id",
            "imagem",
            "legenda"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('Anexos', $anexos_columns, $dados_obrigatorios);
    }

    public function findOneEspecieId($id)
    {
        return (new AnexosDAO())->selectByIdEspecieId($this->table_name, $id[0], $this->columns);
    }
}
