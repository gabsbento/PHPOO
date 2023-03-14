<?php 

    namespace Bento\Comercial\Dominio\Repositorio;

    use Bento\Comercial\Dominio\Model\Produto;

    interface RepositorioProdutos
    {
        public function todosProdutos(): array;
        public function salvar(Produto $produto): bool;
        public function criarProduto(Produto $produto): bool;
        public function lerProduto(Produto $produto): array;
        public function atualizarProduto(Produto $produto): bool;
        public function deletarProduto(Produto $produto): bool;
    }

?>