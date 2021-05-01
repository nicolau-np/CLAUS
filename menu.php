<header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                    <?php
                        $id = isset($_SESSION['id']) ? $_SESSION['id'] : "" ;
                        $pegar_carrinho = Connector::ReturnConnection()->prepare("SELECT * FROM `carrinho` WHERE id_user = ?");
                        $pegar_carrinho->execute(array($id));

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
                            <li><a href="add_produtos.php">Add Produtos</a></li>
                            <?php
                                }
                            ?>
                            <li><a href="produtos.php">Serviços </a></li>
                            <li><a href="sobre.php">Sobre Nós</a></li>
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
    