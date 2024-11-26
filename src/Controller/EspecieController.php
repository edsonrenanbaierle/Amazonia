<?php

namespace App\Controller;

use App\DAO\EspecieDAO;
use App\http\Request;

class EspecieController extends BaseController
{
    public function __construct()
    {
        if($_SERVER['REQUEST_METHOD'] !== "GET"){
            Request::authorization();
        }
       
        $especie_columns = [
            "id",
            "nome_cientifico",
            "descricao",
            "imagem"
        ];

        parent::__construct('Especie', $especie_columns);
    }

    public function delete($id){
       return (new EspecieDAO())->delete($id[0]);
    }

    public function getAll($id){
        return (new EspecieDAO())->fetchAllDataByEspecieId($id[0]);
    }
}
