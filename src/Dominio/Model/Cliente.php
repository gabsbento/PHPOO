<?php 
    namespace Bento\Comercial\Dominio\Model;
    use DateTimeInterface;
    class Cliente extends Pessoa{
        private float $renda;


        public function __construct(?int $id, string $nome, DateTimeInterface $dataNascimento, Endereco $endereco, float $renda)
        {
            parent::__construct($id, $nome, $dataNascimento, $endereco);
            $this->renda  = $renda;
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
            "<br>Idade: ".$this->idade(). " anos".
            "<br>Nasc.: ".$this->getDataNascimento()->format('d/m/Y').
            "<br>End: ".$this->endereco->getNomeLogradouro().", ".$this->endereco->getNumero()." - ".$this->endereco->getBairro().
            "<br>Renda: ".$this->renda.
            "</p>";
        }

    }

?>