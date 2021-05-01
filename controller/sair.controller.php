<?php
session_start();
include "../model/Connector.class.php";

Connector::ReturnConnection();

if (isset($_SESSION['id'])) {
    //echo $_SESSION['cod'] . ' -> ' . $_SESSION['nome'];
    if (isset($_SESSION['id']) and $_SESSION['id'] < 0) {
        session_destroy();
        header('location: ../index.php');
    }
    if (filter_input(INPUT_GET, sha1('sair')) === sha1(true)) {
    
                unset($_SESSION['id']);
                unset($_SESSION['nome']);
                unset($_SESSION['email']);
                unset($_SESSION["user"]); 
                unset($_SESSION["senha"]);      
                session_destroy();
                header('location: ../index.php');
                
    }
    }else{
        header('location: ../index.php');
    }
