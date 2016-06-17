<?php 
	$titulo="Clientes";
	include("cabecalho.php"); 
	include("conecta.php"); 
	include("banco-cliente.php");

	if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { 
?>
		<p class="alert-success">Produto apagado com sucesso.</p>
<?php 
	}
	$clientes = listaClientes($conexao);
?>

<h1>Clientes</h1>
<br />
<table class="table table-striped table-bordered">
	<tr>		
		<td><b>id</b></td>
		<td><b>Nome</b></td>
		<td><b>E-mail</b></td>
		<td><b>Telefone</b></td>		
		<td><b>alterar</b></a>
		<td><b>remover</b></td>
	</tr>

	<?php
	foreach($clientes as $cliente) :
		?>

	<tr>
		<td><?= $cliente['id'] ?></td>
		<td><?= $cliente['nome'] ?></td>
		<td><?= $cliente['email'] ?></td>
		<td><?= $cliente['telefone'] ?></td>		
		<td><a class="btn btn-primary" href="formulario-cliente.php?id=<?=$cliente['id']?>">alterar</a>
		<td>
            <form action="remove-cliente.php" method="post">
            <input type="hidden" name="id" value="<?=$cliente['id']?>" />
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