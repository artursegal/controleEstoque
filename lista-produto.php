<?php 
	$titulo="Produtos";
	include("cabecalho.php"); 
	include("conecta.php"); 
	include("banco-produto.php");

	if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { 
?>
		<p class="alert-success">Produto apagado com sucesso.</p>
<?php 
	}
	$produtos = listaProdutos($conexao);
?>

<h1>Produtos</h1>
<br />

<table class="table table-striped table-bordered">
	<tr>		
		<td><b>id</b></td>
		<td><b>Nome</b></td>
		<td><b>Preço</b></td>
		<td><b>Descrição</b></td>		
		<td><b>alterar</b></a>
		<td><b>remover</b></td>
	</tr>
	<?php
	foreach($produtos as $produto) :
		?>
	<tr>
		<td><?= $produto['id'] ?></td>
		<td><?= $produto['nome'] ?></td>
		<td><?= $produto['preco'] ?></td>
		<td><?= substr($produto['descricao'], 0, 50) ?></td>		
		<td><a class="btn btn-primary" href="formulario-produto.php?id=<?=$produto['id']?>">alterar</a>
		<td>
            <form action="remove-produto.php" method="post">
            <input type="hidden" name="id" value="<?=$produto['id']?>" />
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