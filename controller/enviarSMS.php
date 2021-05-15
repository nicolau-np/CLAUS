<?php
include "../model/Connector.class.php";
include "../model/SMSClasse.php";
Connector::ReturnConnection();

if (isset($_POST['bt_envio'])) {
    $nome = trim(filter_input(INPUT_POST, 'nome'));
    $email = trim(filter_input(INPUT_POST, 'email'));
    $sms = trim(filter_input(INPUT_POST, 'sms'));


    $objSMS = new SMSClasse();

    $objSMS->setNome($nome);
    $objSMS->setEmail($email);
    $objSMS->setSms($sms);
    $objSMS->setEstado("on");

    $resultado = $objSMS->enviarSMS(Connector::ReturnConnection());

    if ($resultado > 0) {
        header("location: ../contacto.php?sms=ok");
    }
}
