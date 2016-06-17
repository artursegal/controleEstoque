<?php
include("conecta.php"); 
include("banco-produto.php");

$altera = "false";
if(array_key_exists('id', $_POST))
{
	$altera = "true";
	$id = $_POST['id'];
}

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

if($altera=="true")
{
	$titulo="Alteração de produto";
}
else
{
	$titulo="Adição de produto";
}
include("cabecalho.php");

if($altera!="true")
{
	if(insereProduto($conexao, $nome, $preco, $descricao)) {
	?>
		<p class="alert-success">Produto <?= $nome; ?> adicionado com sucesso!</p>
	<?php
	} else {
		$msg = mysqli_error($conexao);
	?>
		<p class="alert-danger">O produto <?= $nome; ?> não foi adicionado: <?= $msg ?></p>
	<?php
	}	
}
else
{
	if(alteraProduto($conexao, $id, $nome, $preco, $descricao)) {
	?>
		<p class="alert-success">Produto <?= $nome; ?> alterado com sucesso!</p>
	<?php
	} else {
		$msg = mysqli_error($conexao);
	?>
		<p class="alert-danger">O produto <?= $nome; ?> não foi alterado: <?= $msg ?></p>
	<?php
	}	
}


include("rodape.php")
?>