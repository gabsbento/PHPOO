<?php 

    require_once 'src/Pessoa.php';
    require_once 'src/Endereco.php';
    require_once 'src/Cliente.php';
    require_once 'src/Funcionario.php';
    

    $endereco = new Endereco('AL', 'Maceió', 'Rua do Sol', '126', 'Centro', '57000-000');

    //$pessoa1 = new Pessoa('Gabriel', 34, $endereco);
    //$pessoa2 = new Pessoa('Wonder', 17, $endereco);

    $funcionario = new Funcionario('Gabriel', 34, $endereco, 'Analista', 1777.77);

    $cliente = new Cliente('Wonder', 17, $endereco, '07/11/2006', 1777.77);

    /*
    echo "<pre>";
        echo "<p> Nome: {$pessoa1->getNome()} </p>";
        echo "<p> Idade: {$pessoa1->getIdade()} </p>";
        echo "<p> Número de pessoas: ". Pessoa::getNumDePessoas();
    echo "</pre>";
*/

    var_dump($funcionario);
    echo "<br/> <br/> <br/>";
    var_dump($cliente);
?>