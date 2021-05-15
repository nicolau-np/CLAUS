<?php
include "controller/sessao_controller.controller.php";
include "model/SMSClasse.php";
Connector::ReturnConnection();
$objSms = new SMSClasse();

$objSms->setEstado("off");
$resultado = $objSms->marcar_lidas(Connector::ReturnConnection());
if($resultado=="yes"){

}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claus | SMS</title>

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
                    <h4>Mensagens</h4>
                    <table class="table table-bordered table-striped" style="color: white">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Mensagem</th>
                            <th>Data</th>

                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        $estado = "on";
                        $sms = Connector::ReturnConnection()->prepare("SELECT * FROM sms order by id desc");
                        $sms->execute();
                        while ($view = $sms->fetch(PDO::FETCH_OBJ)) {

                            ?>
                            <tr>
                                <td><?= $view->nome; ?></td>
                                <td><?= $view->email; ?></td>
                                <td><?= $view->sms; ?></td>
                                <td>
                                    <?=
                                     date('d-m-Y', strtotime($view->data)) ."&nbsp".
                                    date('H:i:s', strtotime($view->data))
                                    ?>
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