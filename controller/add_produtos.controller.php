<?php
include "../model/Connector.class.php";
include "../model/User.class.php";
Connector::ReturnConnection();

$nome = trim(filter_input(INPUT_POST, 'nome'));
$categoria = trim(filter_input(INPUT_POST, 'categoria'));
$descricao = trim(filter_input(INPUT_POST, 'descricao'));
$valor = trim(filter_input(INPUT_POST, 'valor'));
$foto = trim($_FILES['foto']['name']);

$caminho_arquivo = "upload/".$_FILES['foto']['name'];
if(file_exists($caminho_arquivo)){
    echo 'O Arquivo ja Existe ';
}else{
    move_uploaded_file($_FILES['foto']['tmp_name'],$caminho_arquivo);
    
    $inserir_produto = Connector::ReturnConnection()->prepare("INSERT INTO `produtos`( `produto`, `valor`, `categoria`, `descricao`, `foto`) VALUES (?,?,?,?,?)");
    $inserir_produto->execute(array($nome, $valor, $categoria, $descricao, $caminho_arquivo));

    header("location: ../add_produtos.php");
}