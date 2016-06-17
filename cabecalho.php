<html>
<head>  
<meta charset="utf-8">  
<?php
if (!isset($titulo)) {
    $titulo="Controle de estoque";
}
?>
    <title><?=$titulo?></title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/artur.css" rel="stylesheet" />
    <script type="text/javascript" src="java-scripts.js"></script>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Início</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="formulario-produto.php">Adiciona produto</a></li>
                    <li><a href="lista-produto.php">Produtos</a></li>
                    <li><a href="formulario-cliente.php">Adiciona cliente</a></li>
                    <li><a href="lista-cliente.php">Clientes</a></li>
                    <li><a href="formulario-pedido.php">Adiciona pedido</a></li>
                    <li><a href="lista-pedido.php">Pedidos</a></li>          
                </ul>
            </div>
        </div> 
    </div>

    <div class="container">

        <div class="principal">