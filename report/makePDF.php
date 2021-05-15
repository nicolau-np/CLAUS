<?php
//include "../controller/sessao_controller.controller.php";
session_start();
include "../model/Connector.class.php";
Connector::ReturnConnection();

$html = "<!DOCTYPE html>";
$html .= "<html>
<head>
<title></title>
</head>
<body>
";

$estado1 = "on";
$pegar_carrinho = Connector::ReturnConnection()->prepare("SELECT * FROM `carrinho` WHERE id_user = ? and estado = ?");
$pegar_carrinho->execute(array($_SESSION['id'], $estado1));

$html.="
<b>Nome Completo:</b> ".$_SESSION['nome']."<br/>
<b>Data:</b> ".date('d-m-Y')."
";

$html .= '
<div class=\"span12\">
                    <!-- BEGIN PAGINATION PORTLET-->
                    <div class=\"widget\">
                        <div class=\"widget-title\">
                            <h4><i class=\"icon-reorder\"></i></h4>
                        <span class=\"tools\">
                        <a class=\"icon-chevron-down\" href=\"javascript:;\"></a>
                        <a class=\"icon-remove\" href=\"javascript:;\"></a>
                        </span>
                        </div>
                        <div class=\"widget-body\">
                            <table class=\"table table-bordered table-striped\" border="1" width="70%" style=\"color: white\">
                                <thead>
                                <tr style="background-color: #0f6674;">
                                    <th style="color: #fff;">Produtos</th>
                                    <th style="color: #fff;">Categoria</th>
                                    <th style="color: #fff;">Valor</th>
                                </tr>
                                </thead>
                                <tbody>
                        
';
$total = 0;
if ($pegar_carrinho->rowCount() > 0) {

    while ($carrinho = $pegar_carrinho->fetch(PDO::FETCH_OBJ)) {
        $pegar_produto = Connector::ReturnConnection()->prepare("SELECT * FROM `produtos` WHERE id = ?");
        $pegar_produto->execute(array($carrinho->id_produto));

        $produto = $pegar_produto->fetch(PDO::FETCH_OBJ);

        $total = $total + $produto->valor;


        $html .= "
        <tr>
          <td><span >" . $produto->produto . "</span></td>
          <td><span >" . $produto->categoria . "</span></td>
          <td><span >" . number_format($produto->valor, 2, ',', '.') . "</span></td>
        </tr>
        ";
    }}

        $html .= '
          </tbody>
                            </table>
                            <br/>
                            <label style=\"color: white\" >Total: <b> '.number_format($total,2,',','.').'</b></label>
                        <br/><br/>
                        <div class="infoiban">
                        <b>Obs.:</b> Deve se dirigir até um ATM próximo e fazer o pagamento da seguinte referência.<br/>
                        <b>Nº Ref.: 462167958</b>
</div>
                        </div>
                    </div>
                    <!-- END PAGINATION PORTLET -->
                </div>
</body>
</html>';

$estado2 = "vist";
$pegar_carrinho = Connector::ReturnConnection()->prepare("UPDATE `carrinho` SET estado=? WHERE id_user = ?");
$pegar_carrinho->execute(array($estado2, $_SESSION['id']));

        include("mpdf/mpdf.php");

        $mpdf = new mPDF();

        $mpdf->WriteHTML($html);

        $mpdf->Output();

        exit;