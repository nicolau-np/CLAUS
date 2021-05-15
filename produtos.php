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
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
                        <a href="#">Serviços</a>
                        <span>Vendas</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-text">
                        <h3>Produtos Disponíveis</h3>
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
            $estado = "on";
            $pegar_produtos = Connector::ReturnConnection()->prepare("SELECT * FROM `produtos` where estado=?");
            $pegar_produtos->execute(array($estado));

            while($produtos = $pegar_produtos->fetch(PDO::FETCH_OBJ)){ ?>
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bi-pic set-bg" data-setbg="controller/upload/<?=$produtos->foto?>"></div>
                                
                            </div>
                            <div class="col-lg-6">
                                
                                <div class="bi-text">

                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?= date('d-m-Y', strtotime($produtos->data))?></li>
                                        <li style="color: white"> <?=number_format($produtos->valor,2,',','.')?></li>
                                    </ul>
                                    <h4><a href="#"><?=$produtos->produto?></a></h4>
                                    <h5 style="color: white"> Categória: <?=$produtos->categoria?></h5>
                                    <p><?=$produtos->descricao?></p>
                                    <div class="bt-author">
                                        <a href="controller/add_cart.controller.php?id=<?=$produtos->id?>&id_user=<?=$_SESSION["id"]?>">
                                        <div class="ba-text" style="background-color: blue; color: white;">
                                            <center><span style="color: white;"><b>Add CART</b></span></center>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="blog-btn">
                        <a href="#" class="primary-btn">Topo</a>
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