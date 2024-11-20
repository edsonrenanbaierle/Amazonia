<?php

namespace App\DAO;

use App\Db\DbCoon;
use Exception;
use PDO;

class EspecieDAO
{
    public function delete($id) {
        try {
            $conn = DbCoon::coon();
            $conn->beginTransaction();
    
            $tables = [
                'Anexos',
                'Solos',
                'Pragas',
                'ProducaoMudas',
                'CultivoViveiros',
                'ComposicaoBiotecnologica',
                'ProdutosUtilizacoes',
                'AspectosEcologicos',
                'OcorrenciaNatural',
                'BiologiaReprodutiva',
                'DescricaoBotanica',
                'Taxonomia'
            ];
    
            // Deleta os registros das tabelas relacionadas
            foreach ($tables as $table) {
                $stmt = $conn->prepare("DELETE FROM $table WHERE especie_id = :id");
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
            }
    
            // Deleta o registro da tabela principal (Especie)
            $stmt = $conn->prepare("DELETE FROM Especie WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            
            if($stmt->rowCount() <= 0 ) throw new \Exception("Erro ao excluir o registro especificado, registro não encontrado!");
            
    
            $conn->commit();
            return true;
        } catch (\Exception $e) {
            $conn->rollBack();
            throw new Exception($e->getMessage());
        }
    }
    
}
