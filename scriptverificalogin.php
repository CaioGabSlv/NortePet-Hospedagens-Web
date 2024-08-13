<?php
    //Verificar se uma sessão não existe
    //Caso seja verdadeiro, redirecionar para a tela de login
    if(!$_SESSION['usuario']){
        header('Location: login.php');
        exit();
    }



?>