<?php 

    require_once 'autoload.php';
    
    use Bento\Comercial\Model\Endereco;
    use Bento\Comercial\Model\Pessoa;
    use Bento\Comercial\Model\Funcionario;
    use Bento\Comercial\Model\Cliente;

    $endereco = new Endereco('AL', 'Maceió', 'Rua do Sol', '126', 'Centro', '57000-000');


    $funcionario = new Funcionario('Gabriel', 34, $endereco, 'Analista', 1777.77);

    $cliente = new Cliente('Wonder', 17, $endereco, '07/11/2006', 1777.77);



    var_dump($funcionario);
    echo "<br/> <br/> <br/>";
    var_dump($cliente);


    echo $funcionario->__toString();
    echo "<hr>";
    echo $cliente->__toString();

    $funcionario->setSenha('123');

    $funcionario->login("Gabriel", '123');

    echo $endereco->bairro.'<br>';

    echo $cliente->nome.'<br>';
    echo $funcionario->nome;
?>