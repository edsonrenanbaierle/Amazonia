<?php


$routes = [
    "GET/especies" => "EspecieController@findAll",
    "GET/especies/{id}" => "EspecieController@findOne",
    "POST/especies" => "EspecieController@create",
    "PUT/especies/{id}" => "EspecieController@update",
    "DELETE/especies/{id}" => "EspecieController@delete",

    "GET/taxonomias" => "TaxonomiaController@findAll",
    "GET/taxonomias/{id}" => "TaxonomiaController@findOne",
    "POST/taxonomias" => "TaxonomiaController@create",
    "PUT/taxonomias/{id}" => "TaxonomiaController@update",
    "DELETE/taxonomias/{id}" => "TaxonomiaController@delete",


    "GET/descricoes-botanicas" => "DescricaoBotanicaController@findAll",
    "GET/descricoes-botanicas/{id}" => "DescricaoBotanicaController@findOne",
    "POST/descricoes-botanicas" => "DescricaoBotanicaController@create",
    "PUT/descricoes-botanicas/{id}" => "DescricaoBotanicaController@update",
    "DELETE/descricoes-botanicas/{id}" => "DescricaoBotanicaController@delete",

    "GET/biologias-reprodutivas" => "BiologiaReprodutivaController@findAll",
    "GET/biologias-reprodutivas/{id}" => "BiologiaReprodutivaController@findOne",
    "POST/biologias-reprodutivas" => "BiologiaReprodutivaController@create",
    "PUT/biologias-reprodutivas/{id}" => "BiologiaReprodutivaController@update",
    "DELETE/biologias-reprodutivas/{id}" => "BiologiaReprodutivaController@delete",

    "GET/ocorrencias-naturais" => "OcorrenciaNaturalController@findAll",
    "GET/ocorrencias-naturais/{id}" => "OcorrenciaNaturalController@findOne",
    "POST/ocorrencias-naturais" => "OcorrenciaNaturalController@create",
    "PUT/ocorrencias-naturais/{id}" => "OcorrenciaNaturalController@update",
    "DELETE/ocorrencias-naturais/{id}" => "OcorrenciaNaturalController@delete",

    "GET/aspectos-ecologicos" => "AspectosEcologicosController@findAll",
    "GET/aspectos-ecologicos/{id}" => "AspectosEcologicosController@findOne",
    "POST/aspectos-ecologicos" => "AspectosEcologicosController@create",
    "PUT/aspectos-ecologicos/{id}" => "AspectosEcologicosController@update",
    "DELETE/aspectos-ecologicos/{id}" => "AspectosEcologicosController@delete",

    "GET/produtos-utilizacoes" => "ProdutosUtilizacoesController@findAll",
    "GET/produtos-utilizacoes/{id}" => "ProdutosUtilizacoesController@findOne",
    "POST/produtos-utilizacoes" => "ProdutosUtilizacoesController@create",
    "PUT/produtos-utilizacoes/{id}" => "ProdutosUtilizacoesController@update",
    "DELETE/produtos-utilizacoes/{id}" => "ProdutosUtilizacoesController@delete",

    "GET/composicoes-biotecnologicas" => "ComposicaoBiotecnologicaController@findAll",
    "GET/composicoes-biotecnologicas/{id}" => "ComposicaoBiotecnologicaController@findOne",
    "POST/composicoes-biotecnologicas" => "ComposicaoBiotecnologicaController@create",
    "PUT/composicoes-biotecnologicas/{id}" => "ComposicaoBiotecnologicaController@update",
    "DELETE/composicoes-biotecnologicas/{id}" => "ComposicaoBiotecnologicaController@delete",

    "GET/cultivos-viveiros" => "CultivoViveirosController@findAll",
    "GET/cultivos-viveiros/{id}" => "CultivoViveirosController@findOne",
    "POST/cultivos-viveiros" => "CultivoViveirosController@create",
    "PUT/cultivos-viveiros/{id}" => "CultivoViveirosController@update",
    "DELETE/cultivos-viveiros/{id}" => "CultivoViveirosController@delete",

    "GET/prodcoes-mudas" => "ProducaoMudasController@findAll",
    "GET/prodcoes-mudas/{id}" => "ProducaoMudasController@findOne",
    "POST/prodcoes-mudas" => "ProducaoMudasController@create",
    "PUT/prodcoes-mudas/{id}" => "ProducaoMudasController@update",
    "DELETE/prodcoes-mudas/{id}" => "ProducaoMudasController@delete",

    "GET/pragas" => "PragasController@findAll",
    "GET/pragas/{id}" => "PragasController@findOne",
    "POST/pragas" => "PragasController@create",
    "PUT/pragas/{id}" => "PragasController@update",
    "DELETE/pragas/{id}" => "PragasController@delete",

    "GET/solos" => "SolosController@findAll",
    "GET/solos/{id}" => "SolosController@findOne",
    "POST/solos" => "SolosController@create",
    "PUT/solos/{id}" => "SolosController@update",
    "DELETE/solos/{id}" => "SolosController@delete",

    "GET/anexos" => "AnexosController@findAll",
    "GET/anexos/{id}" => "AnexosController@findOne",
    "POST/anexos" => "AnexosController@create",
    "PUT/anexos/{id}" => "AnexosController@update",
    "DELETE/anexos/{id}" => "AnexosController@delete",

    "GET/usuarios" => "UsuarioController@findAll",
    "GET/usuarios/{id}" => "UsuarioController@findOne",
    "POST/usuarios" => "UsuarioController@create",
    "PUT/usuarios/{id}" => "UsuarioController@update",
    "DELETE/usuarios/{id}" => "UsuarioController@delete",
    "POST/usuarios/login"  => "UsuarioController@login",

    "GET/taxonomias/especie/{id}" => "TaxonomiaController@findOneEspecieId",
    "GET/descricoes-botanicas/especie/{id}" => "DescricaoBotanicaController@findOneEspecieId",
    "GET/biologias-reprodutivas/especie/{id}" => "BiologiaReprodutivaController@findOneEspecieId",
    "GET/ocorrencias-naturais/especie/{id}" => "OcorrenciaNaturalController@findOneEspecieId",
    "GET/ocorrencias-naturais/especie/{id}" => "OcorrenciaNaturalController@findOneEspecieId",
    "GET/aspectos-ecologicos/especie/{id}" => "AspectosEcologicosController@findOneEspecieId",
    "GET/produtos-utilizacoes/especie/{id}" => "ProdutosUtilizacoesController@findOneEspecieId",
    "GET/composicoes-biotecnologicas/especie/{id}" => "ComposicaoBiotecnologicaController@findOneEspecieId",
    "GET/cultivos-viveiros/especie/{id}" => "CultivoViveirosController@findOneEspecieId",
    "GET/prodcoes-mudas/especie/{id}" => "ProducaoMudasController@findOneEspecieId",
    "GET/pragas/especie/{id}" => "PragasController@findOneEspecieId",
    "GET/solos/especie/{id}" => "SolosController@findOneEspecieId",
    "GET/anexos/especie/{id}" => "AnexosController@findOneEspecieId"


];
