<?php
$marcapagina = 'sobre_contato';
include('repeatphp/header.php');
?>

<section class="contato">
    <div class="texto">
        <h1>História da Empresa</h1>
        <p>Como dissemos anteriormente, a primeira pizzaria foi aberta no Brasil em 1910, 
        com os imigrantes italianos. O bairro para essa recepção foi o Brás, na cidade de São Paulo. 
        Contudo, no início, os brasileiros não haviam aderido tão bem o novo alimento. Só a partir de 1950 que o prato
        se tornou popular por todo o país. Hoje, a pizza é parte da cultura brasileira. </p>
    </div>
    <div class="formcontato">
        <h1>Deixe Sua Opinião</h1>
        <form  class="box" class="" action="" method="POST">
            <label for="">Digite Seu Nome:</label>
            <input type="text">
            <label for="">Digite Seu E-mail:</label>
            <input type="text">
            <label for="">Digite a Mensagem:</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Enviar">
        </form>
    </div>
</section>

<?php
include('repeatphp/footer.php');
?>
</body>

</html>