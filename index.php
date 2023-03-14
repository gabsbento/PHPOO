<?php

require_once 'autoload.php';

use Bento\Comercial\Infraestrutura\Persistencia\CriadorConexao;
use Bento\Comercial\Infraestrutura\Repositorio\PdoRepositorioProduto;
use Bento\Comercial\Dominio\Model\Produto;

use Bento\Comercial\Dominio\Model\Pessoa;
use Bento\Comercial\Dominio\Model\Endereco;
use Bento\Comercial\Dominio\Model\Funcionario;
use Bento\Comercial\Dominio\Model\Cliente;

    

    echo "<pre>";

        $endereco1 = new Endereco("AP", "Macapá", "Av. da Cidade", "100", "Centro", "68900-000");
        $endereco2 = new Endereco("AP", "Macapá", "Rua da Cidade", "200", "Universitário", "68900-000");

        $funcionario1 = new Funcionario(NULL, "Edson Maia", new DateTimeImmutable("1981-06-19"), $endereco1, "Desenvolvedor", 3000.00);

        $cliente1 = new Cliente(NULL, "Maria Maia", new DateTimeImmutable("1954-12-01"), $endereco2, 2000.00);

        echo $funcionario1;

        echo $cliente1;

        
        $repositorio = new PdoRepositorioProduto(CriadorConexao::criarConexao());
        var_dump($repositorio);

        //$produto = new Produto(NULL, "Tablet", 2700.00);
        //var_dump($produto);

        $repositorio->todosProdutos();
    echo "<pre>";
?>