<?php 
    namespace Bento\Comercial\Model;
    require_once 'autoload.php';

    class Endereco{
        use AcessoAtributos;
        private string $uf;
        private string $cidade;
        private string $nomeLogradouro;
        private string $numero;
        private string $bairro;
        private string $cep;


        public function __construct(string $uf, string $cidade, string $nomeLogradouro, string $numero, string $bairro, string $cep)
        {
            $this->uf               = $uf;
            $this->cidade           = $cidade;
            $this->nomeLogradouro   = $nomeLogradouro;
            $this->numero           = $numero;
            $this->bairro           = $bairro;
            $this->cep              = $cep;
        }


        public function setUf(string $uf):    void
        {
            $this->uf   = $uf;
        }

        public function getUf():    string
        {
            return $this->uf;
        }

        public function setNumero(string $numero):    void
        {
            $this->numero   = $numero;
        }

        public function getNumero():    string
        {
            return $this->numero;
        }

        public function setCidade(string $cidade):    void
        {
            $this->cidade   = $cidade;
        }

        public function getCidade():    string
        {
            return $this->cidade;
        }

        public function setNomeLogradouro(string $nomeLogradouro):    void
        {
            $this->nomeLogradouro   = $nomeLogradouro;
        }

        public function getNomeLogradouro():    string
        {
            return $this->nomeLogradouro;
        }

        public function setBairro(string $bairro):    void
        {
            $this->bairro   = $bairro;
        }

        public function getBairro():    string
        {
            return $this->bairro;
        }

        public function setCep(string $cep):    void
        {
            $this->cep   = $cep;
        }

        public function getCep():    string
        {
            return $this->cep;
        }

    }

?>