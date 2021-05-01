<?php
include "controller/sessao_controller.controller.php";
?>
<!DOCTYPE html>
<html lang="zxx">

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

    <!-- Map Section Begin -->
    
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7">
                    <div class="contact-option">
                        <h4>Cadastrar Produtos</h4>
                        <form action="controller/add_produtos.controller.php" method="POST" enctype="multipart/form-data" class="comment-form contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="nome" id="nome" placeholder="Nomde do produto">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="categoria" id="categoria" placeholder="Categoria">
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" name="valor" id="valor" placeholder="Valor">
                                </div>
                                <div class="col-lg-6">
                                    <input type="file" name="foto" id="foto" >
                                </div>
                                
                                <div class="col-lg-12">
                                    <textarea name="descricao" id="descricao" placeholder="Descrição"></textarea>
                                    <button type="submit" class="site-btn">Cadastrar Produto</button>
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