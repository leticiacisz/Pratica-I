<?php
include "db.php";


if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $datadaabertura_chamados = $_POST ['datadaabertura_chamados'];
    $criticidade_chamados = $_POST['criticidade_chamados'];
    $status_chamados = $_POST ['status+_chamados'];


    $sql = "INSERT INTO chamados ( datadaabertura_chamado, criticidade_chamados, status_chamados) VALUE ( '$datadaabertura_chamados', '$criticidade_chamados', '$status_chamados')";


    if ($conn -> query($sql) === true) {
        echo "Cadastro do chamado adicionado <br>" ;
    } else{
        echo "Erro $sql <br>". $conn -> error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="createchamadas.php">
        Criticidade: <input type="text" name="criticidade_chamados" required>
        Status: <input type="text" name="status_chamados" required>
        Data de Abertura: <input type="date" name="datadaabertura_chamados" required>
        <input  type="submit" value="Cadastrar">
    </form>
</body>
</html>
