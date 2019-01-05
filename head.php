<?php
include("url.php");
?>
<html>
<head>
    <!-- Materialize -->
    <link rel="stylesheet" href="<?php echo("$url")?>/marmorariaMoreira/materialize/css/materialize.min.css">

    <link href="<?php echo("$url")?>/marmorariaMoreira/materialize/icon/icon.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo("$url")?>/marmorariaMoreira/arquivos/css/estilo.css">

    <link rel="icon" href="<?php echo("$url")?>/marmorariaMoreira/materialize/icon/icone.ico" type="image/x-icon">

    <title>Marmoraria Moreira</title>
</head>
<body>
<nav>
    <div class="nav-wrapper  green darken-4">
        <a href="<?php echo("$url")?>/marmorariaMoreira/home.php" class="brand-logo">Marmoraria Moreira</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?php echo("$url")?>/marmorariaMoreira/Aluno/Aluno.php">Vendas</a></li>
            <li><a href="<?php echo("$url")?>/marmorariaMoreira/Professor/Professor.php">Clientes</a></li>
            <li><a href="<?php echo("$url")?>/marmorariaMoreira/Sala/Sala.php">Receita</a></li>
        </ul>
    </div>
</nav>