<?php
function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, 
    "select * from Produto");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;

}

function alteraProduto($conexao, $id, $nome, $preco, $descricao) {
    $query = "update Produto set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}' where id = {$id}";
    return mysqli_query($conexao, $query);
}

function insereProduto($conexao, $nome, $preco, $descricao) {        
    $query = "insert into Produto (nome, preco, descricao) values ('{$nome}', {$preco}, '{$descricao}')";
        return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
    $query = "select * from Produto where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function removeProduto($conexao, $id) {
    $query = "delete from Produto where id = {$id}";
    return mysqli_query($conexao, $query);
}

