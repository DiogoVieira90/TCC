<?php
$servidor = "187.45.196.198";
$usuario = "bd_cory";
$senha = "Cory@123";
$database = "bd_cory";

$conn = new mysqli($servidor, $usuario, $senha, $database);

if ($conn->connection_error){
    die($conn->connection_error);
}

$nome = $_GET['name'];
$pontos = intval($_GET['pontos']);

echo "Bem vindo " .$name;

$sql = "INSERT INTO game(USERNAME,PONTOS) VALUES('$nome',$pontos)";

if ($conn->query($sql)===TRUE){
    echo "Sucesso";
}else{
    echo "Falhou";
}

$conn->close();

?>