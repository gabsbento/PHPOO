<?php 
    namespace Bento\Comercial\Model;

    trait AcessoAtributos {

        public function __get(string $nomeAtributo)
        {
            $metodo = 'get'. ucfirst($nomeAtributo);
            return $this->$metodo();
        }
    }

?>