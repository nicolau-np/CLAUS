<?php
include "controller/sessao_controller.controller.php";
include_once "model/Produto.php";


Connector::ReturnConnection();

if(!$_GET['id']){
    header('location:produto.php');
}

$objProduto = new Produto();
$objProduto->setId($_GET['id']);
$objProduto->setEstado("delete");

$resultado = $objProduto->delete(Connector::ReturnConnection());
if($resultado=="yes"){
    header('location:produto.php?delete=ok');
}


