<?php 
    namespace Bento\Comercial\Dominio\Model;

    trait AcessoAtributos {

        public function __get(string $nomeAtributo)
        {
            $metodo = 'get'. ucfirst($nomeAtributo);
            return $this->$metodo();
        }
    }

?>