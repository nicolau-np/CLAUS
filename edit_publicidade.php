<?php
include "controller/sessao_controller.controller.php";
include_once "model/Publicidade.php";

Connector::ReturnConnection();
if (!isset($_GET['id'])) {
    $ids = $_SESSION['idS'];
} else {
    $_SESSION['idS'] = $_GET['id'];
    $ids = $_GET['id'];
}

$publicidades = Connector::ReturnConnection()->prepare("SELECT * FROM publicidades where id=?");
$publicidades->execute(array($_SESSION['idS']));
$view = $publicidades->fetch(PDO::FETCH_OBJ);

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
    <title>Claus | Editar Publicidade</title>

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
                    if (isset($_POST['btn'])) {
                        $arquivo = $_FILES['foto']['name'];
                        $arquivo_tmp = $_FILES['foto']['tmp_name'];
                        $descricao = $_POST['descricao'];
                        $estado = $_POST['estado'];
                        $id = $_POST['id_publicidade'];
                        $title = $_POST['title'];
                        $foto = null;

                        if ($arquivo == ""):

                            $foto = $view->foto;
                        else:
                            $foto = $arquivo;
                            //mover a foto para a pasta
                            $destino = 'controller/upload/' . $arquivo;
                            $arquivo_tmp1 = $arquivo_tmp;
                            unlink('controller/upload/' . $view->foto);
                            move_uploaded_file($arquivo_tmp1, $destino);
                        endif;

                        $objPublicidade->setFoto($foto);
                        $objPublicidade->setDescricao($descricao);
                        $objPublicidade->setEstado($estado);
                        $objPublicidade->setId($id);
                        $objPublicidade->setTitle($title);

                        $resultado = $objPublicidade->update(Connector::ReturnConnection());
                        if ($resultado == "yes") {
                            header("location: publicidades.php?sms=ok");
                        }

                    }
                    ?>

                    <?php
                    if (isset($_GET['sms'])) {
                        ?>
                        <div class="alert alert-success">Publicidade Adicionada com sucesso</div>
                        <?php
                    } ?>

                    <form enctype="multipart/form-data" method="POST" action="edit_publicidade.php">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="title" placeholder="Titulo"
                                       value="<?= $view->title ?>" required/>
                            </div>
                            <div class="col-md-5"><input type="file" class="form-control" name="foto"/></div>


                            <div class="col-md-3">
                                <select name="estado" class="form-control" required>
                                    <option><?= $view->estado ?></option>
                                    <option>on</option>
                                    <option>off</option>
                                </select>
                            </div>
                            <br/><br/>
                            <div class="col-md-4">
                            <textarea name="descricao" class="form-control" placeholder="Descrição do Produto" cols="4"
                                      rows="5" required>
                                    <?= $view->descricao ?>
                            </textarea>
                            </div>
                            <input type="hidden" value="<?= $_GET['id'] ?>" name="id_publicidade"/>

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