<?php
include "controller/sessao_controller.controller.php";
?>
<!CTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claus Lda | Início</title>

    <!-- Google Fontes-->
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
    <!-- Preloder da página -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php
    include_once 'menu.php';
    ?>
    

    <section class="breadcrumb-section bread-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-option">
                        <a href="#">Home</a>
                        <span>Galeria</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="breadcrumb-text">
                        <h3>Nossa Galeria</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <div class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-controls">
                        <ul>
                            <li class="active" data-filter=".all">Toda Galeria</li>
                            <li data-filter=".model">Modelos</li>
                            <li data-filter=".event">Eventos</li>
                            <li data-filter=".other">Outros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row gallery-filter">
                <div class="col-lg-6 mix all fashion">
                    <div class="gs-item">
                        <img src="img/galeria/galeria01.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mix all model">
                            <div class="gs-item">
                                <img src="img/galeria/galeria02.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all event">
                            <div class="gs-item">
                                <img src="img/galeria/galeria03.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all other">
                            <div class="gs-item">
                                <img src="img/galeria/galeria04.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all fashion">
                            <div class="gs-item">
                                <img src="img/galeria/galeria05.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mix all event">
                            <div class="gs-item">
                                <img src="img/galeria/galeria0.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mix all model other">
                            <div class="gs-item">
                                <img src="img/galeria/galeria01.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mix all fashion event">
                    <div class="gs-item">
                        <img src="img/galeria/galeria02.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php
    include_once 'footer.php';
    ?>
    
    
   <!-- Carregamentos js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>