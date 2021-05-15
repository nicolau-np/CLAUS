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
                <div class="col-lg-5">
                    <div class="contact-text">
                        <h4>Contactos</h4>
                        <div class="ct-item">
                            <div class="ci-icon">
                                <span class="ti-location-pin"></span>
                            </div>
                            <div class="ci-text">
                                <ul>
                                    <li>
                                        <span>Nossa Localização</span>
                                       Rotunda do Obelisco-edifício: Org.Zezinho
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ci-icon">
                                <span class="ti-mobile"></span>
                            </div>
                            <div class="ci-text">
                                <ul>
                                    <li>
                                        <span>Telefone</span>
                                        923322143
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ci-icon">
                                <span class="ti-email"></span>
                            </div>
                            <div class="ci-text">
                                <ul>
                                    <li>
                                        <span>E-mail</span>
                                        Clausllda5@gmail.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="resposta">
                        <?php
                        if(isset($_GET['sms'])){?>
                        <div class="alert alert-success">Mensagem enviada com sucesso</div>
                        <?php
                        }?>
                    </div>
                    <div class="contact-option">
                        <h4>Deixa tua mensagem</h4>
                        <form action="controller/enviarSMS.php" class="comment-form contact-form" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Seu nome" name="nome" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="E-mail" name="email" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Mensagem" name="sms" required></textarea>
                                    <button type="submit" class="site-btn" name="bt_envio">Enviar Mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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