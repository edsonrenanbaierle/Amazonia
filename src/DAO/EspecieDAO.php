<?php

namespace App\DAO;

use App\Db\DbCoon;
use Exception;
use PDO;

class EspecieDAO
{
    private $db;

    public function __construct()
    {
        $this->db = DbCoon::coon();
    }

    public function delete($id)
    {
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

            if ($stmt->rowCount() <= 0) throw new \Exception("Erro ao excluir o registro especificado, registro não encontrado!");


            $conn->commit();
            return true;
        } catch (\Exception $e) {
            $conn->rollBack();
            throw new Exception($e->getMessage());
        }
    }

    public function fetchAllDataByEspecieId($especieId)
    {
        // Lista das tabelas relacionadas à espécie
        $tables = [
            'Especie',
            'Taxonomia',
            'DescricaoBotanica',
            'BiologiaReprodutiva',
            'OcorrenciaNatural',
            'AspectosEcologicos',
            'ProdutosUtilizacoes',
            'ComposicaoBiotecnologica',
            'CultivoViveiros',
            'ProducaoMudas',
            'Pragas',
            'Solos',
            'Anexos'
        ];

        $result = [];

        foreach ($tables as $table) {
            $result[$table] = $this->selectByEspecieId($table, $especieId);
        }

        return $result;
    }

    /**
     * Busca os dados de uma tabela específica relacionados à espécie.
     */
    private function selectByEspecieId($table, $especieId)
    {
        // SQL para buscar dados da tabela
        $query = $table === 'Especie'
            ? "SELECT * FROM $table WHERE id = :id"
            : "SELECT * FROM $table WHERE especie_id = :id";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $especieId, \PDO::PARAM_INT);

        $stmt->execute();

        // Apenas "Anexos" usa fetchAll
        if ($table === 'Anexos') {
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        }

        // Garante que o resultado seja coerente
        return $result ?: ($table === 'Anexos' ? [] : null);
    }
}
