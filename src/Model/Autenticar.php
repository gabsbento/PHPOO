<?php 
    namespace Bento\Comercial\Model;
    interface Autenticar {
        public function login(Funcionario $funcionario, string $senha): void;
    }

?>