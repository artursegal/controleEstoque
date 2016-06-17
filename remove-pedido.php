<?php 
include("conecta.php");
include("banco-pedido.php");

$id = $_POST['id'];
removePedido($conexao, $id);

header("Location: lista-pedido.php?removido=true");
?>