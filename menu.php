<header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                    <?php


                    $estado = "on";

                    $sms = Connector::ReturnConnection()->prepare("select *from sms where estado=?");
                    $sms->execute(array($estado));

                        $id = isset($_SESSION['id']) ? $_SESSION['id'] : "" ;
                        $pegar_carrinho = Connector::ReturnConnection()->prepare("SELECT * FROM `carrinho` WHERE id_user = ? and estado=?");
                        $pegar_carrinho->execute(array($id, $estado));

                        $qtd_carrinho = $pegar_carrinho->rowCount();

                        if(isset($_SESSION['nome'])){
                    ?>
                        <label style="color: white;"><?=$_SESSION['nome']?> <small><a href="cart_list.php"> Carrinho <b><?=$qtd_carrinho?></b></a> </small></label>
                    <?php } ?>
                        <a href="#">
                            <img src="img/logo1.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="main-menu mobile-menu">
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <?php
                                if(isset($_SESSION['nivel_acesso']) && $_SESSION['nivel_acesso'] == "admin"){
                            ?>
                            <li><a href="produto.php">Produtos</a></li>
                                    <li><a href="sms.php">SMS <?php if($sms->rowCount()>0){?>(<?= $sms->rowCount() ?>) <?php }?></a></li>
                                    <li><a href="publicidades.php">Publicidades</a></li>
                            <?php
                                }
                            ?>
                            <li><a href="produtos.php">Loja </a></li>
                            <!--<li><a href="sobre.php">Sobre Nós</a></li>-->
                            <li><a href="contacto.php">Contacto</a></li>
                            <?php
                                if(!isset($_SESSION['nome'])){
                            ?>
                            <li><li><a href="login.php">Login</a></li></li>
                            <?php
                                }
                            ?>
                            
                            <?php
                                if(isset($_SESSION['nome'])){
                            ?>
                            <li><a href="controller/sair.controller.php?<?php echo sha1('sair').'='.sha1(true); ?>">SAIR</a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    