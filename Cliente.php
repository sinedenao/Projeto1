<?php
/**
 * Created by PhpStorm.
 * User: sinedenao
 * Date: 25/08/14
 * Time: 22:46
 */

class Cliente {

    private $db;
    private $id;
    private $nome;
    private $email;


    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function listar()
    {

    }

    public function inserir()
    {
        $query = "insert into clientes (nome,email) values (:nome,:email)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome',$this->getNome());
        $stmt->bindValue(':email',$this->getEmail());

        if($stmt->execute())
        {
            return true;
        }

    }

    public function alterar()
    {


    }

    public function deletar()
    {


    }

    /**
     * @param \PDO $db
     */
    public function setDb($db)
    {
        $this->db = $db;
        return $this;
    }

    /**
     * @return \PDO
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }



} 