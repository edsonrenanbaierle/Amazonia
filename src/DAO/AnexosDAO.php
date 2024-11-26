<?php

namespace App\DAO;

use App\Db\DbCoon;

class AnexosDAO
{
    // Função para realizar SELECT com base no ID
    public function selectByIdEspecieId($table, $id, $columns = ['*'])
    {
        $db = DbCoon::coon();
        if($table === "Usuario"){
            throw new \Exception("Sem Permissão!");
        }

        $columnsStr = implode(", ", $columns);

        $query = "SELECT $columnsStr FROM $table WHERE especie_id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();

        $data =  $stmt->fetchAll();
        return $data ? $data : null;
    }

   
}
