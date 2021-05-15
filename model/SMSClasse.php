<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14/05/2021
 * Time: 20:56
 */

class SMSClasse
{
    private $nome;
    private $email;
    private $sms;
    private $estado;
    public $sql;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSms()
    {
        return $this->sms;
    }

    /**
     * @param mixed $sms
     */
    public function setSms($sms)
    {
        $this->sms = $sms;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function enviarSMS(PDO $connection){
        $this->sql = "INSERT INTO sms (nome, email, sms, estado) VALUES (?,?,?,?)";
        $CLAUS = $connection->prepare($this->sql);
        $CLAUS->execute(array(
            $this->getNome(),
            $this->getEmail(),
            $this->getSms(),
            $this->getEstado(),
        ));
        return $connection->lastInsertId();
    }

    public function marcar_lidas(PDO $connection){
        $this->sql="update sms set estado=? where 1";
        $claus = $connection->prepare($this->sql);
        $claus->execute(array(
            $this->getEstado(),
        ));
        return "yes";
    }

}