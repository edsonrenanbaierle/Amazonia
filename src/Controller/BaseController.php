<?php

namespace App\Controller;

use App\Db\DbCoon;
use App\http\Request;

class BaseController
{
    protected string $table_name;
    protected array $columns;
    protected array $dados_obrigatorios;

    public function __construct(string $table_name, array $columns, array $dados_obrigatorios = [])
    {
        $this->table_name = $table_name;
        $this->columns = $columns;
        $this->dados_obrigatorios = $dados_obrigatorios;
    }

    public function findAll()
    {
        return DbCoon::selectAll($this->table_name, $this->columns);
    }

    public function findOne($id)
    {
        return DbCoon::selectById($this->table_name, $id[0], $this->columns);
    }

    public function findOneEspecieId($id)
    {
        return DbCoon::selectByIdEspecieId($this->table_name, $id[0], $this->columns);
    }

    public function create()
    {
        $data = Request::requestBody();
        return DbCoon::insert($this->table_name, $data, $this->dados_obrigatorios);
    }

    public function update($id)
    {
        $data = Request::requestBody();
        return DbCoon::update($this->table_name, $data, $id[0]);
    }

    public function delete($id)
    {
        return DbCoon::delete($this->table_name, $id[0]);
    }
}
