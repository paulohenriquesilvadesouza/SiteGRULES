<?php
require_once('verificasessao.php');
$title = 'Livros - SisBiblio';
$currentPage = 'livros';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> GRULES &copy </title>
        <link rel="icon" type="image/png" href="img/logo-doctum.png">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="print.css" type="text/css" media="print">
        <link href="css/font.css" rel="stylesheet">
		<link rel="stylesheet" href="lib\css\fontawesome-all.css" >
        

        <!-- CSS
        <link rel="stylesheet" type="text/css" href="css/modelo.css"> -->
    
</head>

<!-- <body background="img/Background-composers.jpg" bgproperties="fixed" background-repeat="no repeat" width=100%> -->

<body background="img/5912.jpg" background-repeat="no repeat" class="img-responsive">

    <div class="page-header" align="center">
        <img src="img/logo-doctum.png" align="center" class="img-responsive" alt="Responsive image" width="125" height="105">
        <h1>Livro</h1>
    </div>

<?php include 'nav.php'; ?>

<div class="jumbotron">
    <div class="container" align="center">
	

<?php

echo "<table class='table'  style='margin-left: 50px; margin-right: 50px; width: 80%;'>";
echo "	<thead class='thead-dark'>";
echo "		<tr>";
echo "			<th style='width: 20px'>ID</th>";
echo "			<th>Nome</th>";
echo "			<th style='width: 15px'></th>";
echo "			<th style='width: 15px'> <a href='livro_cad.php?operacao=1' style='text-decoration: none; color: white;'> <button class='btn btn-success'> Novo Livro </button> </a> </th>";
echo "		</tr>";
echo "	</thead>";
echo "<tbody>";
require_once("conexao.php");
if (!$conn->connect_error){
	$sql = "SELECT cd_livro, nm_livro FROM tb_livro";
	$result = mysqli_query($conn,$sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["cd_livro"]. "</td><td>" . $row["nm_livro"]. " </td>
			<td style='text-align: right;'>
			<a href='livro_cad.php?operacao=2&id=" .  $row["cd_livro"] . "'><i class='fas fa-edit'></i></a>
			</td>
			<td style='text-align: right;'>
			<a href='delete_livro.php?id=" .  $row["cd_livro"] . "'><i style='color: red;' class='fas fa-trash'></i></a>
			</td>
			</tr>";
		}
	} else {
		echo "<tr><td> -- </td><td>Sem dados para apresentar...</td></tr>";
	}
}
$conn->close();
echo "	</tbody>";
echo "</table>";
?>

</div>
</div>

<div id="rodape" align="center">
    <img src="img/logo-doctum.png" class="img-responsive" alt="Responsive image" width="125" height="105"> &copy; Copyright SiteGRULES
</div>