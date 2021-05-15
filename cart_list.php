<?php
include "controller/sessao_controller.controller.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claus | Lda</title>

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
   <!-- <div id="preloder">
        <div class="loader"></div>
    </div>-->

    <!-- Header Section Begin -->
    <?php
    include_once 'menu.php';
    ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-option">
                        <a href="produtos.php">Serviços</a>
                        <span>Compras</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-text">
                        <h3>Produtos adicionados ao carrinho</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <div class="blog-section spad">
        <div class="container">
            <div class="row">
            <?php

            $estado1="on";
            $pegar_carrinho = Connector::ReturnConnection()->prepare("SELECT * FROM `carrinho` WHERE id_user = ? and estado = ?");
            $pegar_carrinho->execute(array($_SESSION['id'], $estado1));
            ?>
             <div class="span12">
                    <!-- BEGIN PAGINATION PORTLET-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i></h4>
                        <span class="tools">
                        <a class="icon-chevron-down" href="javascript:;"></a>
                        <a class="icon-remove" href="javascript:;"></a>
                        </span>
                        </div>
                        <div class="widget-body">
                            <table class="table table-bordered table-striped" style="color: white">
                                <thead>
                                <tr>
                                    <th>Produto</th>
                                    <th>Categoria</th>
                                    <th>Valor</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $total = 0;
                                if($pegar_carrinho->rowCount()>0){

                                while($carrinho = $pegar_carrinho->fetch(PDO::FETCH_OBJ)){ 
                                    $pegar_produto = Connector::ReturnConnection()->prepare("SELECT * FROM `produtos` WHERE id = ?");
                                    $pegar_produto->execute(array($carrinho->id_produto));

                                    $produto = $pegar_produto->fetch(PDO::FETCH_OBJ);

                                    $total = $total + $produto->valor;

                                ?>
                                    <tr>
                                        <td><span ><?=$produto->produto?></span></td>
                                        <td><span ><?=$produto->categoria?></span></td>
                                        <td><span ><?= number_format($produto->valor,2,',','.')?></span></td>
                                    </tr>
                                <?php }
                                }?>
                                </tbody>
                            </table>
                            <label style="color: white" >Total: <b><?= number_format($total,2,',','.')?></b></label>
                        </div>
                    </div>
                    <!-- END PAGINATION PORTLET -->
                </div>
            </div>

            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="blog-btn">
                        <a href="report/makePDF.php" class="primary-btn">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <?php
    include_once 'footer.php';
    ?>
    <!-- Footer Section End -->

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