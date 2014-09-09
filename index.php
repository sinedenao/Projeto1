<?php

require_once 'Cliente.php';

try{
    $conexao = new \PDO("mysql:host=localhost:3306;dbname=pdo","root","root");

}
catch (Exception $e)
{
    //Para execucao do programa
    die($e->getMessage());
}
$cliente = new Cliente($conexao);

$resultado = $cliente->find(2);

echo $resultado['nome'].' - '.$resultado['email'];

  //$cliente->setId(4)
   //     ->setNome('Denis de Paula a')
    //    ->setEmail('denis@teste.com.br');

#$resultado = $cliente->alterar();

#$resultado = $cliente->deletar(4);

#$resultado = $cliente->inserir();
/*
foreach($cliente->listar("id desc") as $c)
{
    echo $c['nome']."<BR>";
}
*/

