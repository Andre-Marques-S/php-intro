<?php
session_set_cookie_params(1);
session_start();
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p   style="font-family: 'Times New Roman'; font-weight: bolder; font-size: 40px"> Formulário para inscrição </p>
<form style="box-sizing: border-box ; margin-top: 30px" action="script.php" method="POST">
    <?php
    $msg_s = isset($_SESSION["msg_s"]) ? $_SESSION["msg_s"] : " ";

    if (! empty($msg_s))
    {
        echo  $msg_s;
    }

    $msg_e = isset($_SESSION["msg"]) ? $_SESSION["msg"] : " ";

    if (! empty($msg_e))
    {
        echo  $msg_e;
    }

     ?>
    <p>Seu Nome : <input type="text" name="nome"></p>
    <p>Sua Idade : <input type="text" name="idade"></p>

    <p><button type="submit">Enviar</button></p>

</form>
</body>
</html>




















