<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14/05/2021
 * Time: 21:57
 */

class Produto
{
    private $id;
    private $produto;
    private $valor;
    private $categoria;
    private $descricao;
    private $foto;
    private $estado;
    public $sql;

    /**
     * @return mixed
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @param mixed $produto
     */
    public function setProduto($produto)
    {
        $this->produto = $produto;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
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


    public function insert(PDO $connection)
    {
        $this->sql = "INSERT INTO produtos (produto, valor, categoria, descricao, foto, estado) VALUES (?,?,?,?,?,?)";
        $CLAUS = $connection->prepare($this->sql);
        $CLAUS->execute(array(
            $this->getProduto(),
            $this->getValor(),
            $this->getCategoria(),
            $this->getDescricao(),
            $this->getFoto(),
            $this->getEstado(),
        ));
        return $connection->lastInsertId();
    }

    public function edit(PDO $connection)
    {
        $this->sql = "update produtos set produto=?, valor=?, categoria=?, descricao=?, foto=?, estado=? where id=?";
        $CLAUS = $connection->prepare($this->sql);
        $CLAUS->execute(array(
            $this->getProduto(),
            $this->getValor(),
            $this->getCategoria(),
            $this->getDescricao(),
            $this->getFoto(),
            $this->getEstado(),
            $this->getId(),
        ));
        return "yes";
    }


public function delete(){

        return "yes";
}


}