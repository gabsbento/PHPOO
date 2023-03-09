<?php 

    abstract class Pessoa {
        protected        string        $nome;
        protected        int           $idade;
        protected        float         $desconto;
        protected        Endereco      $endereco;
        protected static int           $numDePessoas = 0;

        public function __construct(string $nome, int $idade, Endereco $endereco)
        {
            $this->nome         = $nome;
            $this->idade        = $idade;
            $this->endereco     = $endereco;
            $this->setDesconto();
            $this->validaIdade($idade);
            self::$numDePessoas++;

        }


        public function getEndereco():  Endereco
        {
            return $this->endereco;
        }

        public function __destruct()
        {
            self::$numDePessoas--;
        }

        public static function getNumDePessoas():   int
        {
            return self::$numDePessoas;
        }

        public function setNome(string $nome):  void
        {
            $this->nome = $nome;
        }

        public function getNome():  string
        {
            return $this->nome;
        }

        public function setIdade(int $idade):   void
        {
            $this->idade = $idade;
        }

        public function getIdade(): int
        {
            return $this->idade;
        }

        private function validaIdade(int $idade):   void
        {
            if($idade > 0 AND $idade < 125){
                $this->idade = $idade;
            }else {
                echo 'Idade não permitida';
                exit;
            }
        }


        protected abstract function setDesconto(): void;

        public function getDesconto(): float
        {
            return $this->desconto;
        }


        public abstract function __toString():  string;
    }
?>