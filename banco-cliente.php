<?php
function listaClientes($conexao) {
    $clientes = array();
    $resultado = mysqli_query($conexao, 
    "select * from Cliente");

    while($cliente = mysqli_fetch_assoc($resultado)) {
        array_push($clientes, $cliente);
    }

    return $clientes;

}

function alteraCliente($conexao, $id, $nome, $email, $telefone) {
    $query = "update Cliente set nome = '{$nome}', email = '{$email}', telefone = '{$telefone}' where id = {$id}";
    return mysqli_query($conexao, $query);
}

function insereCliente($conexao, $nome, $email, $telefone) {        
    $query = "insert into Cliente (nome, email, telefone) values ('{$nome}', '{$email}', '{$telefone}')";
        return mysqli_query($conexao, $query);
}

function buscaCliente($conexao, $id) {
    $query = "select * from Cliente where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function removeCliente($conexao, $id) {
        $query = "delete from Cliente where id = {$id}";
    return mysqli_query($conexao, $query);
}

