<?php
	$titulo="Formulário de pedido"; 
	include("cabecalho.php"); 
	include("conecta.php"); 
	include("banco-produto.php");
	include("banco-cliente.php");
	
	$altera = "false";
	$usado = "";
	if(array_key_exists('id', $_GET))
	{
		include("banco-pedido.php");

		$altera = "true";

		$id = $_GET['id'];

		$pedido  = buscaPedido($conexao, $id);
	}

	$produtos = listaProdutos($conexao);
	$clientes = listaClientes($conexao);

	if($altera=="true")
	{
?> 
		<h1>Alteração de cadastro de pedidos</h1>
<?php		
	}
	else 
	{
?>
		<h1>Formulário de cadastro de pedidos</h1>
<?php		
	}
?>
<html>
<form name="frm" action="adiciona-pedido.php" method="post">
	<?php 
	if($altera=="true") {	
	?>	
	<input type="hidden" name="id" value="<?=$pedido['id']?>">
	<?php 
	} 
	?> 
	<table class="table">
		<tr>
        	<td>Produto</td>
    		<td>
				<select name="id_produto" class="form-control">
				<?php 
				if (!isset($produtos)) {
				$prodSelecionado=$produtos[0];
				}
				foreach($produtos as $produto) : 
				$selected="";
				if($altera=="true") {
					if($produto['id'] == $pedido['id_produto'])
					{
						$selected="selected";
					}
				}

				?>
					<option value="<?=$produto['id']?>" <?=$selected?> >
						<?=$produto['nome']?>
					</option>
	        	<?php endforeach ?>
				</select>
	    	</td>
		</tr>
		<tr>
        	<td>Cliente</td>
    		<td>
				<select name="id_cliente" class="form-control">
				<?php 
				if (!isset($clientes)) {
				$prodSelecionado=$clientes[0];
				}
				foreach($clientes as $cliente) : 
				$selected="";
				if($altera=="true") {
					if($cliente['id'] == $pedido['id_cliente'])
					{
						$selected="selected";
					}
				}

				?>
					<option value="<?=$cliente['id']?>" <?=$selected?> >
						<?=$cliente['nome']?>
					</option>
	        	<?php endforeach ?>
				</select>
	    	</td>
		</tr>		
		<tr>
			<td><input type="submit" onclick="return validacao([]);"
			<?php if($altera=="true") {	?>	value="Alterar" <?php } else { ?>	value="Cadastrar" <?php } ?>
			class="btn btn-primary" /></td>
		</tr>
	</table>

</form>




<?php include("rodape.php"); ?>