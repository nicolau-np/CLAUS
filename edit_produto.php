<?php
include "controller/sessao_controller.controller.php";
include_once "model/Produto.php";


Connector::ReturnConnection();
if(!isset($_GET['id'])){
    header('location:produto.php');
}

$produtos = Connector::ReturnConnection()->prepare("SELECT * FROM produtos where id=?");
$produtos->execute(array($_GET['id']));
$view = $produtos->fetch(PDO::FETCH_OBJ);

$objProduto = new Produto();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claus | Novo Produto</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<?php
include_once 'menu.php';
?>
<!-- Header End -->

<!-- Map Section Begin -->

<!-- Map Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="contact-option">
                    <h4>Produtos</h4> &nbsp;&nbsp;&nbsp;&nbsp; <a href="produto.php">Listar</a>


                    <?php
                    if(isset($_POST['btn'])){
                        $produto = $_POST['produto'];
                        $valor = $_POST['valor'];
                        $categoria = $_POST['categoria'];
                        $arquivo=$_FILES['foto']['name'];
                        $arquivo_tmp=$_FILES['foto']['tmp_name'];
                        $descricao = $_POST['descricao'];
                        $estado = $_POST['estado'];
                        $id_produto = $_POST['id_produto'];


                        if($arquivo==""):
                            $foto=$view->foto;
                        else:
                            $foto=$arquivo;
                            //mover a foto para a pasta
                            $destino='controller/upload/'.$arquivo;
                            $arquivo_tmp1=$arquivo_tmp;
                            move_uploaded_file($arquivo_tmp1,$destino);
                            unlink('controller/upload/'.$view->foto);
                        endif;

                        $objProduto->setProduto($produto);
                        $objProduto->setValor($valor);
                        $objProduto->setCategoria($categoria);
                        $objProduto->setFoto($foto);
                        $objProduto->setDescricao($descricao);
                        $objProduto->setEstado($estado);
                        $objProduto->setId($id_produto);

                        $resultado = $objProduto->edit(Connector::ReturnConnection());
                        if($resultado=="yes"){
                            header("location: produto.php?sms=ok");
                        }

                    }
                    ?>

                    <?php
                    if(isset($_GET['sms'])){?>
                        <div class="alert alert-success">Actualização feita com sucesso</div>
                        <?php
                    }?>

                    <form enctype="multipart/form-data" method="POST" action="edit_produto.php">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" name="produto" class="form-control" required
                                       placeholder="Nome do Produto" value="<?= $view->produto ?>"/>
                            </div>

                            <div class="col-md-2">
                                <input type="number" name="valor" class="form-control" required placeholder="Preço"
                                       value="<?= $view->valor ?>"/>
                            </div>

                            <div class="col-md-3">
                                <select name="categoria" class="form-control" required>
                                    <option><?= $view->categoria ?></option>
                                    <option>Alimentos</option>
                                    <option>Vestuário</option>
                                    <option>Aparelhos Electrónicos</option>
                                </select>
                            </div>

                            <div class="col-md-4"><input type="file" class="form-control" name="foto"/></div>

                            <br/><br/>
                            <div class="col-md-3">
                                <select name="estado" class="form-control" required>
                                    <option><?= $view->estado ?></option>
                                    <option>on</option>
                                    <option>off</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                            <textarea name="descricao" class="form-control" placeholder="Descrição do Produto" cols="4" rows="5" required >
                                <?= $view->descricao ?>
                            </textarea>
                            </div>

                            <input type="hidden" value="<?= $_GET['id'] ?>" name="id_produto"/>
                        </div>
                        <br/>
                        <div class="row">

                            <div class="col-md-12">
                                <input type="submit" name="btn" class="btn btn-primary"/>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->


<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>