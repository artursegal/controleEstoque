<?php
include("conecta.php"); 
include("banco-cliente.php");

$altera = "false";
if(array_key_exists('id', $_POST))
{
	$altera = "true";
	$id = $_POST['id'];
}
if($altera=="true")
{
	$titulo="Alteração de cliente";
}
else
{
	$titulo="Adição de cliente";
}
include("cabecalho.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

if($altera!="true")
{
	if(insereCliente($conexao, $nome, $email, $telefone)) {
	?>
		<p class="alert-success">Cliente <?= $nome; ?> adicionado com sucesso!</p>
	<?php
	} else {
		$msg = mysqli_error($conexao);
	?>
		<p class="alert-danger">O cliente <?= $nome; ?> não foi adicionado: <?= $msg ?></p>
	<?php
	}	
}
else
{
	if(alteraCliente($conexao, $id, $nome, $email, $telefone)) {
	?>
		<p class="alert-success">Cliente <?= $nome; ?> alterado com sucesso!</p>
	<?php
	} else {
		$msg = mysqli_error($conexao);
	?>
		<p class="alert-danger">O cliente <?= $nome; ?> não foi alterado: <?= $msg ?></p>
	<?php
	}	
}


include("rodape.php")
?>