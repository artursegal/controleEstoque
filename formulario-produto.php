<?php
	$titulo="Formulário de produto"; 
	include("cabecalho.php"); 
	include("conecta.php"); 
	
	$altera = "false";
	$usado = "";
	if(array_key_exists('id', $_GET))
	{
		include("banco-produto.php");

		$altera = "true";

		$id = $_GET['id'];

		$produto  = buscaProduto($conexao, $id);
	}

	if($altera=="true")
	{
?> 
		<h1>Alteração de cadastro de produtos</h1>
<?php		
	}
	else 
	{
?>
		<h1>Formulário de cadastro de produtos</h1>
<?php		
	}
?>
<html>
<form name="frm" action="adiciona-produto.php" method="post">
	<?php 
	if($altera=="true") {	
	?>	
	<input type="hidden" name="id" value="<?=$produto['id']?>">
	<?php 
	} 
	?> 
	<table class="table">
		<tr>
			<td>Nome</td>
			<td><input type="text" class="form-control" name="nome" placeholder="Digite o nome"
			<?php if($altera=="true") {	?>	value="<?=$produto['nome']?>" <?php } ?> /></td>
			
		</tr>

		<tr>
			<td>Preço</td>
			<td><input type="number" class="form-control" name="preco" placeholder="Digite o preço"
			<?php if($altera=="true") {	?>	value="<?=$produto['preco']?>" <?php } ?> /></td>
		</tr>
		<tr>
            <td>Descrição</td>
            <td><textarea name="descricao" class="form-control" placeholder="Digite uma descrição completa"><?php if($altera=="true") {	?><?=$produto['descricao']?><?php }?></textarea>
        </tr>	
		<tr>
			<td><input type="submit" onclick="return validacao(['nomeProd', 'preco', 'descricao']);"
			<?php if($altera=="true") {	?>	value="Alterar" <?php } else { ?>	value="Cadastrar" <?php } ?>
			class="btn btn-primary" /></td>
		</tr>

	</table>

</form>




<?php include("rodape.php"); ?>