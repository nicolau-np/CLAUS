<?php
include "controller/sessao_controller.controller.php";
include_once "model/Publicidade.php";

Connector::ReturnConnection();

$objPublicidade = new Publicidade();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claus | Nova Publicidade</title>

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
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

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
                    <h4>Publicidades</h4> &nbsp;&nbsp;&nbsp;&nbsp; <a href="publicidades.php">Listar</a>


                    <?php
                    if(isset($_POST['btn'])){
                        $arquivo=$_FILES['foto']['name'];
                        $arquivo_tmp=$_FILES['foto']['tmp_name'];
                        $descricao = $_POST['descricao'];
                        $estado = $_POST['estado'];
                        $foto = null;

                        if($arquivo==""):
                            $foto="none.jpg";
                        else:
                            $foto=$arquivo;
                            //mover a foto para a pasta
                            $destino='controller/upload/'.$arquivo;
                            $arquivo_tmp1=$arquivo_tmp;
                            move_uploaded_file($arquivo_tmp1,$destino);
                        endif;

                        $objPublicidade->setFoto($foto);
                        $objPublicidade->setDescricao($descricao);
                        $objPublicidade->setEstado($estado);

                        $resultado = $objPublicidade->insert(Connector::ReturnConnection());
                        if($resultado>0){
                            header("location: new_publicidade.php?sms=ok");
                        }

                    }
                    ?>

                    <?php
                    if(isset($_GET['sms'])){?>
                        <div class="alert alert-success">Publicidade Adicionada com sucesso</div>
                        <?php
                    }?>

                    <form enctype="multipart/form-data" method="POST" action="new_publicidade.php">
                        <div class="row">

                            <div class="col-md-4"><input type="file" class="form-control" name="foto"/></div>


                            <div class="col-md-3">
                                <select name="estado" class="form-control" required>
                                    <option>Estado</option>
                                    <option>on</option>
                                    <option>off</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                            <textarea name="descricao" class="form-control" placeholder="Descrição do Produto" cols="4" rows="5" required >
                                    Descrição
                            </textarea>
                            </div>


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