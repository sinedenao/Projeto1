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

    public function listar($order = null)
    {
        if($order)
        {
            $query = "select * from clientes order by {$order}";
        }
        else
        {
           $query = "select * from clientes";
        }



        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $query = "select * from clientes where id =:id";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id',$id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);

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
        $query = "update clientes set nome=:nome,  email=:email where id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id',$this->getId());
        $stmt->bindValue(':nome',$this->getNome());
        $stmt->bindValue(':email',$this->getEmail());

        if($stmt->execute())
        {
            return true;
        }

    }

    public function deletar($id)
    {
        $query = "delete from clientes where id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id',$id);

        if($stmt->execute())
        {
            return true;
        }

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