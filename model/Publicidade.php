<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/05/2021
 * Time: 09:17
 */

class Publicidade
{

    private $id;
    private $foto;
    private $descricao;
    private $estado;
    private $title;

    public $sql;
    public $comando;

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }




    public function insert(PDO $connection){
            $this->sql = "insert into publicidades  (foto, title, descricao, estado) values(?,?,?,?)";
            $this->comando = $connection->prepare($this->sql);
            $this->comando->execute(array(
                $this->getFoto(),
                $this->getTitle(),
                $this->getDescricao(),
                $this->getEstado(),
            ));
        return $connection->lastInsertId();

    }

    public function update(PDO $connection){
        $this->sql = "update publicidades set  foto=?, title = ?, descricao=?, estado=? where id=?";
        $this->comando = $connection->prepare($this->sql);
        $this->comando->execute(array(
            $this->getFoto(),
            $this->getTitle(),
            $this->getDescricao(),
            $this->getEstado(),
            $this->getId(),
        ));
        return "yes";

    }

    public function delete(PDO $connection){
        $this->sql = "update publicidades set  estado=? where id=?";
        $this->comando = $connection->prepare($this->sql);
        $this->comando->execute(array(
            $this->getEstado(),
            $this->getId(),
        ));
        return "yes";

    }
}