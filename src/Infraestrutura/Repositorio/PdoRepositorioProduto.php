<?php 
    namespace Bento\Comercial\Infraestrutura\Repositorio;

    use Bento\Comercial\Model\Produto;
    use Bento\Comercial\Dominio\Repositorio\RepositorioProdutos;
    use Bento\Comercial\Persistencia;
    use PDO;

    class PdoRepositorioProduto implements RepositorioProdutos
    {
        private PDO $conexao;

        public function __construct(PDO $conexao)
        {
            $this->conexao =$conexao;
        }

        public function todosProdutos(): array
        {
            $sqlConsulta = "SELECT * FROM produto";
            $stmt = $this->conexao->query($sqlConsulta);

            return $this->hidratarListaProdutos($stmt);
        }

        public function salvar(Produto $produto): bool
        {
            if($produto->getIdProduto() === null){
                return $this->criarProduto($produto);
            }

            return $this->atualizarProduto($produto);
        }

        public function criarProduto(Produto $produto): bool
        {
            $sqlInsert = "INSERT INTO produto (nomeProduto, precoProduto) VALUES (:nome, :preco)";
            $stmt = $this->conexao->prepare($sqlInsert);
            $stmt->bindValue(':nome', $produto->getNomeProduto(), PDO::PARAM_STR);
            $stmt->bindValue(':preco', $produto->getPrecoProduto(), PDO::PARAM_STR);

            $sucesso = $stmt->execute();
            return $sucesso;
        }

        public function atualizarProduto(Produto $produto): bool{
            $sqlUpdate = "UPDATE produto SET nomeProduto = :nome, precoProduto = :preco where idProduto = :id;";
            $stmt = $this->conexao->prepare($sqlUpdate);
            $stmt->bindValue(':nome', $produto->getNomeProduto(), PDO::PARAM_STR);
            $stmt->bindValue(':preco', $produto->getPrecoProduto(), PDO::PARAM_STR);
            $stmt->bindValue(':id', $produto->getIdProduto(), PDO::PARAM_STR);

            return $stmt->execute();
        }

        public function lerProduto(Produto $produto): array{
            $sqlConsulta = "SELECT * FROM produto WHERE idProduto = :id;";
            $stmt = $this->conexao->prepare($sqlConsulta);
            $stmt->bindValue(':id', $produto->getIdProduto(), PDO::PARAM_STR);
            $stmt->execute();

            return $this->hidratarListaProdutos($stmt);
        }

        public function deletarProduto(Produto $produto): bool {
            $stmt = $this->conexao->prepare('DELETE FROM produto WHERE idProduto = ?;');
            $stmt->bindValue(1, $produto->getIdProduto(), PDO::PARAM_INT);
            return $stmt->execute();
        }

        public function hidratarListaProdutos(\PDOStatement $stmt): array
        {
            $listaDadosProdutos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $listaProdutos      = [];

            echo "<table>";
            foreach ($listaDadosProdutos as $dadosProduto)
            {
                $listaProdutos[]  = new Produto(
                    $dadosProduto['idProduto'],
                    $dadosProduto['nomeProduto'],
                    $dadosProduto['precoProduto'],
                );
                echo "
                    <tr>
                        <td width='20'>
                            {$dadosProduto['idProduto']}
                        </td>
                        <td width='150'>
                            {$dadosProduto['nomeProduto']}
                        </td>
                        <td align='right'>
                            ".number_format($dadosProduto['idProduto'], 2, ',' , '.')."
                        </td>
                    </tr>
                ";
            }
            echo "</table>";

            return $listaProdutos;
        }
    }

?>