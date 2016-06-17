<?php 
	$titulo="Pedidos";
	include("cabecalho.php"); 
	include("conecta.php"); 
	include("banco-pedido.php");
	include("banco-produto.php");
	include("banco-cliente.php");

	if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { 
?>
		<p class="alert-success">Produto apagado com sucesso.</p>
<?php 
	}
	$pedidos = listaPedidos($conexao);
?>

<h1>Pedidos</h1>
<br />

<table class="table table-striped table-bordered">
	<tr>		
		<td><b>Produto</b></td>
		<td><b>Cliente</b></td>		
		<td><b>alterar</b></a>
		<td><b>remover</b></td>
	</tr>
	<?php
	foreach($pedidos as $pedido) :
		?>
	<tr>
		<td><?= buscaProduto($conexao, $pedido['id_produto'])['nome'] ?></td>
		<td><?= buscaCliente($conexao, $pedido['id_cliente'])['nome'] ?></td>
		<td><a class="btn btn-primary" href="formulario-pedido.php?id=<?=$pedido['id']?>">alterar</a>
		<td>
            <form action="remove-pedido.php" method="post">
            <input type="hidden" name="id" value="<?=$pedido['id']?>" />
            <button class="btn btn-danger">remover</button>
        </form>
        </td>
	</tr>

	<?php
	endforeach
	?>
</table>

<?php 
    include("rodape.php")
?>