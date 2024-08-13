<?php
    session_start(); //Iniciando uma sessão

    //Chamar o script para verificar se existe um usuário logado.
    include('scriptverificalogin.php');
?>

<div align="right">
    <h2>Olá, <?php echo $_SESSION['usuario']; ?> </h2>
</div>

<!--Criando um botão para sair da sessão do usuário-->
<nav align="right">
    <h3><a href="scriptlogout.php">Logout</a></h3>
</nav>

<div align="center">
    <h1>Painel do Administrador</h1>
</div>