<?php 

    class Cliente extends Pessoa{
        private string $dataNascimento;
        private float $renda;


        public function __construct(string $nome, int $idade, Endereco $endereco, string $dataNascimento, float $renda)
        {
            parent::__construct($nome, $idade, $endereco);
            $this->dataNascimento    = $dataNascimento;
            $this->renda  = $renda;
        }

        public function getDataNascimento(): string
        {
            return $this->dataNascimento;
        }

        public function setDataNascimento(string $dataNascimento): void
        {
            $this->dataNascimento    = $dataNascimento;
        }

        public function getRenda(): float
        {
            return $this->renda;
        }

        public function setRenda(float $renda): void
        {
            $this->renda  = $renda;
        }

        public function setDesconto(): void
        {
            $this->desconto = 0.05;
        }

        public function __toString(): string
        {
            return "<p>Nome: ".$this->nome.
            "<br>Idade: ".$this->idade.
            "<br>End: ".$this->endereco->getNomeLogradouro().", ".$this->endereco->getNumero()." - ".$this->endereco->getBairro().
            "<br>Renda: ".$this->renda.
            "<br>Data Nascimento: ".$this->dataNascimento.
            "</p>";
        }

    }

?>