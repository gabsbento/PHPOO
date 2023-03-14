<?php 
    namespace Bento\Comercial\Dominio\Model;
    interface Autenticar {
        public function login(Funcionario $funcionario, string $senha): void;
    }

?>