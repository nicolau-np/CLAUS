<?php
include "../model/Connector.class.php";
include "../model/User.class.php";
Connector::ReturnConnection();


$User = new User();
$User->setName(trim(filter_input(INPUT_POST, 'nome')));
$User->setEmail(trim(filter_input(INPUT_POST, 'mail')));
$User->setUser(trim(filter_input(INPUT_POST, 'user')));
$User->setPassword(trim(filter_input(INPUT_POST, 'password')));
$User->setNivel_acesso("normal_user");


$retorno = $User->inserir_user(Connector::ReturnConnection());

if($retorno > 0){
    echo "<script>alert('Sucesso!')</script>";
    header("LOCATION: ../login.php");
}else{
    echo "<script>alert('Error!')</script>";
    header("LOCATION: ../create_acount.php");
}
