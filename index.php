<?php
include "controller/sessao_controller.controller.php";
<<<<<<< HEAD
include_once "model/Publicidade.php";

Connector::ReturnConnection();

$estado = "on";
$publicidade = Connector::ReturnConnection()->prepare("SELECT * FROM publicidades where estado = ?  order by id desc limit 0,3");
$publicidade->execute(array(
    $estado
));

=======
>>>>>>> 1152a2790c4868e39c8e96bc3645da09e540b070
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
<<<<<<< HEAD
          rel="stylesheet">
=======
        rel="stylesheet">
>>>>>>> 1152a2790c4868e39c8e96bc3645da09e540b070

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
<<<<<<< HEAD
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
                                    <h5><?= $view->title ?></h5>
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

=======
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
                        <h2>
                            <font color="black">Claus Lda</font>
                        </h2>

                        <img src=amor.png width="150px" text-align="" border-radius="13px">
                        <p>
                            <font color="black"><strong>Sempre para saberes das novidades</strong></font>
                        </p>
                        <a href="produtos.php" class="primary-btn">Conheça nossos Produtos</a>
                        <img scr="amor.png">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="amor.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="as-text">
                        <div class="section-title">

                            <span>Sobre Nós</span>

                            <h2>CLAUS Lda</h2>
                        </div>
                        <p class="f-para">Estamos localizados no Dundo <br><strong>Brovíncia:</strong> Lunda-Norte</p>
                        <br>Rotunda do Obelisco-edifício
                        <br>
                        <p class="s-para">
                            <font face="" color="pink"><strong>ORG.ZEZINHO</strong></font>
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
                        <h2>Um dos serviços mas procurados em Angola</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="img/services/service-1.png" alt="">
                        <h4>Marcas Modernos</h4>
                        <p>Temos à venda DSQD-2, Louis Vuitton, Guccic, Balmain, Versace, Stan Smith e etc</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="img/services/service-2.png" alt="">
                        <h4>Designers</h4>
                        <p>Temos os melhores designer aqui connosco</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="img/services/service-3.png" alt="">
                        <h4>Make Up</h4>
                        <p>Temos as melhores mekeupers de sempre</p>
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
                <div class="col-lg-6">
                    <div class="portfolio-item set-bg large-item" data-setbg="B.jpg">
                        <div class="pi-hover">
                            <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                            <a href="B.jpg" class="search-icon image-popup"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="portfolio-item set-bg" data-setbg="A.jpeg">
                        <div class="pi-hover">
                            <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                            <a href="A.jpeg" class="search-icon image-popup"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item set-bg" data-setbg="C.jpg">
                                <div class="pi-hover">
                                    <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                                    <a href="C.jpg" class="search-icon image-popup"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item set-bg" data-setbg="r.jpg">
                                <div class="pi-hover">
                                    <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                                    <a href="D1.jpg" class="search-icon image-popup"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <br>
    <br>
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row testimonial-slider owl-carousel">
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-pic">
                            <img src="img/galeria/login.jpg" alt="">
                        </div>
                        <div class="ti-text">
                            <div class="ti-title">
                                <h4>Cláudio Lunguêmbia</h4>
                                <span>Gestor</span>
                            </div>
                            <p>Trabalhos arduamente para que nossos clientes saiam satisfeito</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-pic">
                            <img src="img/galeria/login.jpg" alt="">
                        </div>
                        <div class="ti-text">
                            <div class="ti-title">
                                <h4>Solange Lunguêmbia</h4>
                                <span>Cabelereira</span>
                            </div>
                            <p>Tu não és feia, só precisas de um belo tratamento no seu cabelo meu amor!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-pic">
                            <img src="img/galeria/login.jpg" alt="">
                        </div>
                        <div class="ti-text">
                            <div class="ti-title">
                                <h4>Wilson Lopes</h4>
                                <span>Designer</span>
                            </div>
                            <p>Trabalho com imagem, porque elas falam mais que mil palavras </< /p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-pic">
                            <img src="img/galeria/login.jpg" alt="">
                        </div>
                        <div class="ti-text">
                            <div class="ti-title">
                                <h4>Rivaldo Rafael</h4>
                                <span>Barbeiro</span>
                            </div>
                            <p>Faço aquilo o que o meu cliente quer, mas dou melhoradas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                                                        <p>No valor de 54.000.00kz</p>
                                                        <div class="bt-author">
                                                            <div class="ba-pic">

                                                            </div>
>>>>>>> 1152a2790c4868e39c8e96bc3645da09e540b070
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<<<<<<< HEAD
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

=======
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
                                                        <p>No valor de 12.300.00kz/p>
                                                        <div class="bt-author">
                                                            <div class="ba-pic">

                                                            </div>
>>>>>>> 1152a2790c4868e39c8e96bc3645da09e540b070
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
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
=======

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
>>>>>>> 1152a2790c4868e39c8e96bc3645da09e540b070
</body>

</html>