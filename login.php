<?php
$marcapagina = 'login';
include('repeatphp/header.php');
?>

<div class="formulario">
    <form class="box" action="login.php" method="post">
        <h1>Login</h1>
        <input type="text" name="" placeholder="Usuário">
        <input type="text" name="" placeholder="Senha">
        <input type="submit" name="" value="Login">
    </form>

    <form class="box" action="" method="post">
        <h1>Registrar-se</h1>
        <input type="text" name="" placeholder="Nome">
        <input type="text" name="" placeholder="Sobrenome">
        <input type="text" name="" placeholder="E-mail">
        <input type="text" name="" placeholder="Senha">
        <input type="submit" name="" value="Registrar">
    </form>
</div>

<?php
include('repeatphp/footer.php');
?>
</body>

</html>