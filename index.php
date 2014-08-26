<?php
/**
 * Created by PhpStorm.
 * User: sinedenao
 * Date: 12/08/14
 * Time: 21:23
 */
try{
    $conexao = new \PDO("mysql:host=localhost:3306;dbname=pdo","root","root");

   #$query = "insert into clientes (nome,email) values ('Pedro','pedro@gmail.com')";
   $query = "select * from clientes";


    // $resultado = $conexao->exec($query);

    $stmt = $conexao->query($query);

    $resultado = $stmt->fetchAll();

    echo $resultado[0]['email'];


/*
 *
 *
 +----+-------+-------------------------+
| id | nome  | email                   |
+----+---0----+------1-------------------+
0|  1 | Denis | denis.depaula@gmail.com |
1|  2 | Pedro | pedro@gmail.com         |
2|  3 | Joao  | joao@gmail.com          |
+----+-------+-------------------------+

 *
 *
 *
 */

    //print_r($resultado);

}
catch (Exception $e)
{
    echo $e->getMessage();
}