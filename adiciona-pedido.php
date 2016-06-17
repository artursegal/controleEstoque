<?php
include("conecta.php"); 
include("banco-pedido.php");

$altera = "false";
if(array_key_exists('id', $_POST))
{
	$altera = "true";
	$id = $_POST['id'];
}
if($altera=="true")
{
	$titulo="Alteração de pedido";
}
else
{
	$titulo="Adição de pedido";
}
include("cabecalho.php");

$id_cliente = $_POST['id_cliente'];
$id_produto = $_POST['id_produto'];

if($altera!="true")
{
	if(inserePedido($conexao, $id_cliente, $id_produto)) {
	?>
		<p class="alert-success">Pedido adicionado com sucesso!</p>
	<?php
	} else {
		$msg = mysqli_error($conexao);
	?>
		<p class="alert-danger">O pedido não foi adicionado: <?= $msg ?></p>
	<?php
	}	
}
else
{
	if(alteraPedido($conexao, $id, $id_cliente, $id_produto)) {
	?>
		<p class="alert-success">Produto alterado com sucesso!</p>
	<?php
	} else {
		$msg = mysqli_error($conexao);
	?>
		<p class="alert-danger">O pedido não foi alterado: <?= $msg ?></p>
	<?php
	}	
}


include("rodape.php")
?>