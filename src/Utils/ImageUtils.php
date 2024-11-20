<?php

namespace App\Utils;

class ImageUtils
{
    public function saveImage($fileConteudo){
        $nomeArq = uniqid();

        $arrayFileConteudo = explode(",", $fileConteudo); 

        $extensao = $this->extArquivo($arrayFileConteudo[0]);
        $fileConteudoDescriptografado = base64_decode($arrayFileConteudo[1]); 

       
        $nomeArquivo = explode(".", $nomeArq); 
        $diretorioCompleto = $this->salvarDados($nomeArquivo[0], $extensao, $fileConteudoDescriptografado);

        return $diretorioCompleto;
    }

    private function extArquivo(string $dados){
        $regex = '/\/(.*?);/'; 
        preg_match_all($regex, $dados, $resultado); 
        return $resultado[1][0];
    }

    private function salvarDados($nomeDoArquivo, $extensao, $conteudoDoArquivo){
        $diretorioCompletoImage = __DIR__ . '/../../public/imgs/' . $nomeDoArquivo . "." . $extensao;
        $fopenImage = fopen($diretorioCompletoImage, 'w');
        fwrite($fopenImage, $conteudoDoArquivo);
        fclose($fopenImage);

        $protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        $urlCompleta = $protocolo . $host . "/imgs/" . $nomeDoArquivo . "." . $extensao;
        return $urlCompleta;
    }
}
