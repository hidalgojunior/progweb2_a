<?php
    session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard - BUNITIM</title>
</head>
<body>
    <h1>
        Este é o meu DashBoard
    </h1>
    Seja bem vindo <strong><?=$_SESSION['nomeCompleto'];?></strong>
</body>
</html>