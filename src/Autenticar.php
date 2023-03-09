<?php 

    interface Autenticar {
        public function login(Funcionario $funcionario, string $senha): void;
    }

?>