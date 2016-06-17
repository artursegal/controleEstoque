<?php 
include("conecta.php");
include("banco-cliente.php");

$id = $_POST['id'];
removeCliente($conexao, $id);

header("Location: lista-cliente.php?removido=true");
?>