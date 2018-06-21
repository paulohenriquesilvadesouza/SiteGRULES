<?php
require_once('verificasessao.php');
$title = 'Cadastrar Aluno';
$currentPage = 'cadastro-aluno';
include('carrega-aluno.php');
?>
<!DOCTYPE html>

<html>
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
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
 
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 
	<title> Cadastre-se</title>	
 
</head>
<body background="img/5912.jpg" background-repeat="no repeat" class="img-responsive">

    <div class="page-header" align="center">
        <img src="img/logo-doctum.png" align="center" class="img-responsive" alt="Responsive image" width="125" height="105">
        <h1>Alunos</h1>
    </div>

<?php include 'nav.php'; ?>

<div class="jumbotron">
	

<div class="container">
	<div class="row">
		<h1> Cadastre-se</h1>
		<hr>
	</div>

	<form method="post" action="cad-aluno.php">

	<div class="row">
	<div class="col-md-9">
		<input input type="hidden" name="txtaluno_id" <?php echo "value=". $aluno_id . "" ?>>
			
			<div class="form-group">
				<label for="nome_completo">* Digite seu nome completo:</label>
				<input type="text" class="form-control" name="txtnome_completo" required="true" <?php if (!$cd_nome_completo == null) { echo "value='". $cd_nome_completo ."'";}; ?>>
				
			</div>
 
			<div class="form-group">
				<label for="matricula">* Matrícula:</label>
				<input type="text" class="form-control" name="txtmatricula" required="true" <?php if (!$cd_matricula == null) { echo "value='". $cd_matricula ."'";}; ?>>
				
            </div>
            
            <div class="form-group">
				<label for="periodo">* Periodo:</label>
				<input type="text" class="form-control" name="txtperiodo" required="true" <?php if (!$cd_periodo == null) { echo "value='". $cd_periodo ."'";}; ?>>
				
			</div>
 
 
			<div class="form-group" align="center">
				<button type="submit" class="btn btn-lg btn-success"> 
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					Enviar dados
				</button>

				<a href="cadastro-aluno.php"> Cancelar
				</a>
			</div>
	
		</div>
	</div>
	</form>
</div>
</div>

<?php include('footer.php'); ?>