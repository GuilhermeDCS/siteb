<?php

include('protect2.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body bgcolor="black">
<p style="font-size: 20px; color:azure"> Login efetuado com sucesso, <?php echo $_SESSION['nome_do_adm']; ?>, Seja bem vindo(a). </p>

    <p>
    <a href="index.php"><input style="height: 50px; color: black; background-color: red; font-weight: bold; " type="button" name="" value="Voltar ao site"></a> <br><br>
    </p>

</body>
</html>