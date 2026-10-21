<?php
    if ($_POST['cor']) {
        setcookie("cordefundo", $_POST['cor'],time() +120);
    }   




?>
<html>
    <head></head>
    <body>
        <h3>Cookie criado com sucesso!</h3>
        <a href="form.php">Voltar ao formulário</a>   
    </body>
</html>