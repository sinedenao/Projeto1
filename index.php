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
$cliente->setNome('Denis')
        ->setEmail('denis@teste.com.br');
#$resultado = $cliente->inserir();

foreach($cliente->listar("id desc") as $c)
{
    echo $c['nome']."<BR>";
}

