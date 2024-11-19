<?php
include "db.php";


$id = $_GET['id'];


if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $criticidade = $_POST ['criticidade_chamados'];
    $status = $_POST ['status_chamados'];


    $sql = "UPDATE chamados SET criticidade_chamados ='$criticidade', status_chamados = '$status' WHERE id = $id ";


    if ($conn -> query($sql) === true) {
        echo "Chamado atualizado com sucesso<br>" ;
    } else{
        echo "Erro:". $sql. "<br>". $conn -> error;
    }
    $conn -> close();
    header ("Location: vizualizar_chamado.php");
    exist();
}
$sql = "SELECT * FROM chamados WHERE id=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="readchamadas.php?id= <?php echo $row['id']; ?>">
        Criticidade: <input type="text" name="criticidade_chamados" required>
        Status: <input type="text" name="status_chamados" required>
        <input  type="submit" value="Atualizar">
    </form>
    <a href="readchamadas.php">Vizualizar chamados</a>
    <a href="createchamadas.php">Cadastrar Chamados</a>
</body>
</html>
