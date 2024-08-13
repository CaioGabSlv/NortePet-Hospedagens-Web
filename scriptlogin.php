<?php
// Start na Sessão
session_start();

// 1º Conectar com o Banco de Dados
include("conexao.php");
$conn=conectar();

// 2º Verificar se os campos estão vazios
if(empty($_POST['email']) || empty($_POST['senha'])){
    header("Location: login.php"); //Redirecionando o usuário para a página de login
    exit();
}

// 3º Recuperar os dados dos campos do formulários
$email = $_POST['email'];
$senha = MD5($_POST['senha']);

// 4º Criar uma Query no Banco de Dados para verificar se os dados do usuário são válidos.
$query = $conn->prepare("SELECT id FROM usuarios WHERE email=:e and senha=:s");

//5º Validando os dados do usuário
 $query->bindValue(":e", $email);
 $query->bindValue(":s", $senha);

 //6º Executando a consulta
 $query->execute();

 //7º Armazenar os resultado da consulta
 $row = $query->rowCount();

 //echo $row;

 //8º Criando um sistema de login com níveis de acesso
 if($row == 1){
   $verificar = $conn->query("SELECT *FROM usuarios");
   while ($linha = $verificar->fetch(PDO::FETCH_ASSOC)){
      if($linha['email'] == $email){
         $nivel = $linha['painel'];

         switch($nivel){
            case 'Administrador':
               $_SESSION['usuario'] = $email;
               header('Location: painel1.php');
               exit();
               break;
            case 'Professor':
               $_SESSION['usuario'] = $email;
               header('Location: painel2.php');
               exit();
               break;
               
            case 'Aluno':
               $_SESSION['usuario'] = $email;
               header('Location: painel3.php');
               exit();
               break;
            
            default:
               $_SESSION['usuario'] = $email;
               header('Location: painel4.php');
               exit();
               break;
         }
      }
   }
 }else
 {
   $_SESSION['nao_autenticado']=true;
    header("Location:login.php");
    exit();
 }






 // 9º Logando o usuário no sistema
 /*
 if($row == 1){
    $_SESSION['usuario'] = $email;
    header('Location:painel.php');
    exit();
 }else{
    $_SESSION['nao_autenticado']=true;
    header("Location:login.php");
    exit();
 }
*/


?>