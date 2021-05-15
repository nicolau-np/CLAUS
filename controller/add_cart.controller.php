<?php
include "../model/Connector.class.php";

Connector::ReturnConnection();

$id_produtos = filter_input(INPUT_GET, "id");
$id_user = filter_input(INPUT_GET, "id_user");

$buscar_produtos = Connector::ReturnConnection()->prepare("SELECT * FROM `produtos` WHERE id = ?");
$buscar_produtos->execute(array($id_produtos));

$pegar_dados = $buscar_produtos->fetch(PDO::FETCH_OBJ);

$valor = $pegar_dados->valor;
$estado="on";

$inserir_no_carrinho = Connector::ReturnConnection()->prepare("INSERT INTO `carrinho` (`id_user`, `id_produto`, `valor`, `estado`) VALUES (?,?,?,?)");
$inserir_no_carrinho->execute(array($id_user, $id_produtos, $valor, $estado));

header("LOCATION: ../produtos.php");
