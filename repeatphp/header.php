<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/style.css">
    <title>Projeto Integrador</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="home.php"><img src="imagens/logo.jpg" alt=""></a>
        </div>
        <nav class="menu">
            <a class="<?php echo $marcapagina == 'home' ? 'ativado' : '' ?>"      href="home.php">Home</a>
            <a class="<?php echo $marcapagina == 'pizzas' ? 'ativado' : '' ?>"  href="pizzas.php">Pizzas</a>
            <a class="<?php echo $marcapagina == 'bebidas' ? 'ativado' : '' ?>"  href="bebidas.php">Bebidas</a>
            <a class="<?php echo $marcapagina == 'sobre_contato' ? 'ativado' : '' ?>"     href="sobre_contato.php">Contato</a>
            <a class="<?php echo $marcapagina == 'login' ? 'ativado' : '' ?>"     href="login.php">Login</a>
        </nav>
    </header> 
