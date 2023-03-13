<?php

use Bento\Comercial\Infraestrutura\Persistencia\CriadorConexao;
use Bento\Comercial\Infraestrutura\Repositorio\PdoRepositorioProduto;
use Bento\Comercial\Model\Produto;
    require_once 'autoload.php';

    echo "<pre>";
        $repositorio = new PdoRepositorioProduto(CriadorConexao::criarConexao());
        var_dump($repositorio);

        $produto = new Produto(NULL, "Tablet", 2700.00);
        var_dump($produto);
    echo "<pre>";
?>