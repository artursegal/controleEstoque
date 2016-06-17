<?php

function listaPedidos($conexao) {
    $pedidos = array();
    $query = "select * from Pedido";        
    $resultado = mysqli_query($conexao, $query);
    while($pedido = mysqli_fetch_assoc($resultado)) {
        array_push($pedidos, $pedido);
    }
    return $pedidos;
}


function alteraPedido($conexao, $id, $id_cliente, $id_produto) {
    $query = "update Pedido set id_cliente = {$id_cliente}, id_produto = {$id_produto} where id = {$id}";
    return mysqli_query($conexao, $query);
}

function inserePedido($conexao, $id_cliente, $id_produto) {        
    $query = "insert into Pedido (id_cliente, id_produto) values ({$id_cliente}, {$id_produto})";
        return mysqli_query($conexao, $query);
}

function buscaPedido($conexao, $id) {
    $query = "select * from Pedido where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function removePedido($conexao, $id) {
        $query = "delete from Pedido where id = {$id}";
    return mysqli_query($conexao, $query);
}
