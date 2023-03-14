<?php 
    namespace Bento\Comercial\Dominio\Model;
    require_once 'autoload.php';
    use                                              DateTimeInterface;
    abstract class Pessoa {
        use                                          AcessoAtributos;
        protected        ?int                        $id;
        protected        string                      $nome;
        protected        DateTimeInterface           $dataNascimento;
        protected        float                       $desconto;
        protected        Endereco                    $endereco;
        protected static int                         $numDePessoas = 0;

        public function __construct(?int $id, string $nome, DateTimeInterface $dataNascimento, Endereco $endereco)
        {
            $this->id                    = $id;
            $this->nome                  = $nome;
            $this->dataNascimento        = $dataNascimento;
            $this->endereco              = $endereco;
            $this->setDesconto();
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

        public function setDataNascimento(DateTimeInterface $dataNascimento):   void
        {
            $this->dataNascimento = $dataNascimento;
        }

        public function getDataNascimento(): DateTimeInterface
        {
            return $this->dataNascimento;
        }
/*
        private function validaIdade(int $idade):   void
        {
            if($idade > 0 AND $idade < 125){
                $this->idade = $idade;
            }else {
                echo 'Idade não permitida';
                exit;
            }
        }
*/

        public function idade(): int
        {
            return $this->getDataNascimento()
                        ->diff(new \DateTimeImmutable())
                        ->y;
        }

        protected abstract function setDesconto(): void;

        public function getDesconto(): float
        {
            return $this->desconto;
        }


        public abstract function __toString():  string;
    }
?>