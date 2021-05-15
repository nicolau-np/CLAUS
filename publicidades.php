<?php
include "controller/sessao_controller.controller.php";

Connector::ReturnConnection();
$estado = "delete";
$publicidade = Connector::ReturnConnection()->prepare("SELECT * FROM publicidades where estado!=? order by id desc");
$publicidade->execute(array($estado));
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claus | Publicidades</title>

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
                    <h4>Publicidades</h4> &nbsp;&nbsp;&nbsp;&nbsp;  <a href="new_publicidade.php">Novo</a>

                    <?php
                    if(isset($_GET['sms'])){?>
                        <div class="alert alert-success">Actualização feita com sucesso</div>
                        <?php
                    }?>

                    <?php
                    if(isset($_GET['delete'])){?>
                        <div class="alert alert-success">Eliminou publicidade com sucesso</div>
                        <?php
                    }?>
                    <table class="table table-bordered table-striped" style="color: white">
                        <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Descrição</th>
                            <th>Estado</th>
                            <th>Operacões</th>

                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        while ($view = $publicidade->fetch(PDO::FETCH_OBJ)) {

                            ?>
                            <tr>
                                <td><img src="controller/upload/<?=$view->foto?>" height="60px" width="100px"></td>
                                <td><?= $view->produto; ?></td>
                                <td><?= $view->descricao; ?></td>
                                <td><?= $view->estado ?></td>
                                <td>
                                    <a href="edit_publicidade.php?id=<?= $view->id ?>" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="delete_publicidade.php?id=<?= $view->id ?>" class="btn btn-danger btn-sm">Eliminar</a>

                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    </table>
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