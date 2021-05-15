<?php
include "../model/Connector.class.php";
session_start();
Connector::ReturnConnection();

 $usuario = trim(filter_input(INPUT_POST, 'user'));
 $pass    = trim(filter_input(INPUT_POST, 'password'));


$keepDataUsrs = Connector::ReturnConnection()->prepare("SELECT * FROM user WHERE user = ?  AND senha = ?");
$keepDataUsrs->execute(array($usuario, $pass));

 $QTD_Keepd = $keepDataUsrs->rowCount();
 $UserData = $keepDataUsrs->fetch(PDO::FETCH_OBJ);

//echo "<a href='sair.controller.php'>SAIR</a>";



if($QTD_Keepd > 0){
    
    $_SESSION["id"] = $UserData->id;
    $_SESSION["nome"] = $UserData->nome;
    $_SESSION["user"] = $UserData->user;
    $_SESSION["email"] = $UserData->email;
    $_SESSION["senha"] = $UserData->senha;
    $_SESSION["nivel_acesso"] = $UserData->nivel_acesso;
    header("location: ../index.php");
   
}else{

    echo "<center><h1>Erro!</h1></center>";
    header("refresh: 3, ../login.php");
}