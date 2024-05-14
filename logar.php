<?php

    session_start();

    require_once 'conexao.php';
    if(isset($_POST['processar'])){
        $usuario = $_POST['user'];
        $senha = $_POST['pass'];
        $senha1 = md5($senha);
        $sql = " select * from usuarios where usuario = '$usuario' and senha = '$senha1'";

        $resultado = mysqli_query($con,$sql);
        $linha = mysqli_fetch_assoc($resultado);
        echo "<pre>";
        var_dump($linha);
        echo "</pre>";
        if (mysqli_num_rows($resultado) == 1){
            echo "Acesso liberado";
            header('Location: admin/dashboard.php');
            $_SESSION['nomeCompleto'] = $linha["nomeCompleto"];
        }
        else{
            echo "Erro ao logar";
            header('Location: index.php');  
        }
    }