<?php
include "controller/sessao_controller.controller.php";
include_once "model/Publicidade.php";

Connector::ReturnConnection();

$estado = "on";
$publicidade = Connector::ReturnConnection()->prepare("SELECT * FROM publicidades where estado = ?  order by id desc limit 0,3");
$publicidade->execute(array(
    $estado
));

?>
<!DOCTYPE html>
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
    <style>
        .carousel-caption{
            background-color: #0b0b0b;
            opacity: 0.5;
        }

        .carousel-caption h5{
            color: #fff;
            font-weight: bold;
            font-size: 22px;

        }

        .carousel-caption p{
            color: #fff;
            font-weight: bold;
            font-size: 15px;

        }
    </style>
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
<section class="hero-section set-bg" data-setbg="img/inicio.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="hs-text">
                    <h2><font color="black">Claus Lda</font></h2>

                    <img src=amor.png width="150px" text-align="" border-radius="13px">
                    <p><font color="black"><strong>Sempre para saberes das novidades</strong></font></p>
                    <a href="produtos.php" class="primary-btn">Conheça nossos Produtos</a>
                    <img scr="amor.png">

                </div>
            </div>
        </div>
    </div>
</section>


<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Nossos serviços</span>
                    <h2>Serviços & Produtos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <img src="img/services/service-1.png" alt="">
                    <h4>Marcas Modernos</h4>
                    <p>Temos à venda DSQD-2, Louis Vuitton, Guccic, Balmain, Versace, Stan Smith e etc</p>
                    <p><a href="contacto.php">Solicite</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <img src="img/services/service-2.png" alt="">
                    <h4>Designers</h4>
                    <p>Também temos para si, serviços de design gráfico</p>
                    <p><a href="contacto.php">Solicite</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <img src="img/services/service-3.png" alt="">
                    <h4>Make Up</h4>
                    <p>Temos as melhores mekeupers de sempre</p>
                    <p><a href="contacto.php">Solicite</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="portfolio-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Nosso Cardápio</span>
                    <h2>Transforme teu sonho numa realidade</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">

                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                        $i = 0;
                        while ($view = $publicidade->fetch(PDO::FETCH_OBJ)) {
                            $i++;
                            ?>
                            <div class="carousel-item <?php if($i==1): echo "active"; endif;?>">
                                <img class="d-block w-100" height="400px" src="controller/upload/<?= $view->foto ?>"
                                     alt="First slide"/>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Publicidades</h5>
                                    <p><?= $view->descricao ?></p>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>


    </div>
</section>
<center><font color="gray" size="6"><strong>Aqui temos a nossa equipa de gestão</strong></font></center>


<section class="member-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">


                    <div class="blog-section latest-blog spad">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title">
                                        <span>Produtos à venda</span>
                                        <h2>Sobre nossos produtos</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="blog-item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="bi-pic set-bg" data-setbg="R2.jpg"></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="bi-text">
                                                    <ul>
                                                        <li><i class="fa fa-calendar-o"></i> Outubro 05, 2020</li>
                                                        <li><i class="fa fa-commenting-o"></i> 3</li>
                                                    </ul>
                                                    <BR>
                                                    <br>
                                                    <br>
                                                    <h4><a href="#">À venda</a></h4>
                                                    <p><strong>AKZ</strong> 54.000,00</p>
                                                    <div class="bt-author">
                                                        <div class="ba-pic">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="blog-item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="bi-pic set-bg" data-setbg="D.jpeg"></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="bi-text">
                                                    <ul>
                                                        <li><i class="fa fa-calendar-o"></i> Agosto 17, 2020</li>
                                                        <li><i class="fa fa-commenting-o"></i> 0</li>
                                                    </ul>
                                                    <BR>
                                                    <br>
                                                    <br>
                                                    <h4><a href="#">À venda</a></h4>
                                                    <p><strong>AKZ</strong> 12.300,00</p>
                                                    <div class="bt-author">
                                                        <div class="ba-pic">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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