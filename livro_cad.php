<?php
require_once('verificasessao.php');
$title = 'Cadastrar Livro - SisBiblio';
$currentPage = 'livros';
include('carrega_livro.php');
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

    <nav class="navbar navbar-static-top">
        <div class="container" align="center">
        <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="index.php">Home</a></li>
        <li role="presentation"><a href="bach.php">Alunos</a></li>
        <li role="presentation"><a href="beethoven.php">Evento</a></li>
        <li role="presentation"><a href="chopin.php">Grupos</a></li>
        <li role="presentation"><a href="http://vest.doctum.edu.br/unidade/ipatinga/">Contato</a></li>
        <li role="presentation"><a href="livros.php">Livro</a></li>
        </ul>
        </div>
    </nav>


<div class="jumbotron">
<div class="container" align="center">
	<h3>Cadastro de Livro</h3>
	<br/>
	
	<form method="post" action="inserir_livro.php">

		<input input type="hidden" name="txtcdlivro" <?php echo "value=". $cd_livro . "" ?>>

		<div class="row">
			<div class="col-sm-12">
				<label for="nomelivro">Nome</label>
				<input id="nomelivro" class="form-control" type="text" name="txtnomelivro" required="true"
				<?php if (!$nm_livro == null) { echo "value='". $nm_livro ."'";}; ?>>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6">
				<label for="isbn">ISBN</label>
				<input id="isbn" class="form-control" type="text" name="txtisbn" required="true"
				<?php if (!$isbn_livro == null) { echo "value='". $isbn_livro ."'";}; ?>>
			</div>
			<div class="col-sm-6">
				<label for="numpaginas">Nº Páginas</label>
				<input id="numpaginas" class="form-control" type="number" name="txtnumpaginas" required="true"
				<?php if (!$nr_paginas == null) { echo "value='". $nr_paginas ."'";}; ?>>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<label>Categoria</label><br/>
				<select required="true" class="form-control" name="cd_categoria" >
					<option value="null"> - Selecione uma Categoria - </option>
					
					<?php
					require_once('carrega_todas_categorias.php');
					if ($categorias->num_rows > 0) {
						while($rowcat = $categorias->fetch_assoc()) {

							if ($rowcat["cd_categoria"] == $cd_categoria){
								echo '<option value="' . $rowcat["cd_categoria"] . '" selected="true">' . $rowcat["nm_categoria"] . '</option>';
							}else{
								echo '<option value="' . $rowcat["cd_categoria"] . '">' . $rowcat["nm_categoria"] . '</option>';
							}
							
							// echo '<script>console.log("'. $rowcat["cd_categoria"] . '-' . $rowcat["nm_categoria"] . '")</script>;';
						}
					} 
					?>
				</select>
			</div>
			
			<div class="col-sm-6">
				<label>Editora</label><br/>
				<select required="true" class="form-control" name="cd_editora">
					<option value="null"> - Selecione uma Editora - </option>
					<?php
					require_once('carrega_todas_editoras.php');
					if ($editoras->num_rows > 0) {
						while($rowedi = $editoras->fetch_assoc()) {

							if ($rowedi["cd_editora"] == $cd_editora){
								echo '<option value="' . $rowedi["cd_editora"] . '" selected="true">' . $rowedi["nm_editora"] . '</option>';
							}else{
								echo '<option value="' . $rowedi["cd_editora"] . '">' . $rowedi["nm_editora"] . '</option>';
							}

							// echo '<option value="' . $rowedi["cd_editora"] . '">' . $rowedi["nm_editora"] . '</option>';
							// echo '<script>console.log("'. $rowcat["cd_editora"] . '-' . $rowcat["nm_editora"] . '")</script>;';
						}
					} 
					?>
				</select>
			</div>
		</div>


	<hr/>
		<input class="btn btn-primary" style="text-decoration: none; color: white;" type="submit" name="enviar">
		<button class="btn btn-danger" style="text-decoration: none; color: white;">
			<a href="livros.php">Cancelar</a>
		</button>
	</form>
</div>
</div>

</body>