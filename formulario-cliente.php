<?php
	$titulo="Formulário de cliente"; 
	include("cabecalho.php"); 
	include("conecta.php"); 
	
	$altera = "false";
	$usado = "";
	if(array_key_exists('id', $_GET))
	{
		include("banco-cliente.php");

		$altera = "true";

		$id = $_GET['id'];

		$cliente  = buscaCliente($conexao, $id);
	}

	if($altera=="true")
	{
?> 

		<h1>Alteração de cadastro de clientes</h1>
<?php		
	}
	else 
	{
?>
		<h1>Formulário de cadastro de clientes</h1>
<?php		
	}
?>
<html>
<form name="frm" action="adiciona-cliente.php" method="post">
	<?php 
	if($altera=="true") {	
	?>	
	<input type="hidden" name="id" value="<?=$cliente['id']?>">
	<?php 
	} 
	?> 
	<table class="table">
		<tr>
			<td>Nome</td>
			<td><input type="text" class="form-control" name="nome" placeholder="Digite o nome"
			<?php if($altera=="true") {	?>	value="<?=$cliente['nome']?>" <?php } ?> /></td>
			
		</tr>

		<tr>
			<td>E-mail</td>
				<td><input type="text" class="form-control" name="email" placeholder="Digite o e-mail"
			<?php if($altera=="true") {	?>	value="<?=$cliente['email']?>" <?php } ?> /></td>
		</tr>
		<tr>
			<td>Telefone</td>
			<td><input type="text" class="form-control" name="telefone" placeholder="Digite o telefone. Fixo: 11-2345-6789. Celular: 11-97619-6510"
			<?php if($altera=="true") {	?>	value="<?=$cliente['telefone']?>" <?php } ?> /></td>
		</tr>				
		<tr>
			<td><input type="submit" onclick="return validacao(['nome', 'telefone', 'email']);"
			<?php if($altera=="true") {	?>	value="Alterar" <?php } else { ?>	value="Cadastrar" <?php } ?>
			class="btn btn-primary" /></td>
		</tr>

	</table>

</form>

<?php include("rodape.php"); ?>