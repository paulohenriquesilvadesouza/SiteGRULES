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

    <nav class="navbar navbar-static-top">
        <div class="container" align="center">
        <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="painel.php">Home</a></li>
        <li role="presentation"><a href="cadastro-aluno.php">Cadastre-se</a></li>
        <li role="presentation"><a href="alunos.php">Alunos</a></li>
        <li role="presentation"><a href="evento.php">Evento</a></li>
        <li role="presentation"><a href="chopin.php">Grupos</a></li>
        <li role="presentation"><a href="http://vest.doctum.edu.br/unidade/ipatinga/">Contato</a></li>
        <li role="presentation"><a href="livros.php">Livro</a></li>
        </ul>
        </div>
    </nav>


<div class="container">
	<div class="row">
		<h1> Cadastre-se</h1>
		<hr>
	</div>
 
	<div class="row">
 
	
 
	<div class="col-md-9">
		<form>		
			<div class="form-group">
				<label for="nome_completo">* Digite seu nome completo:</label>
				<input type="text" class="form-control" name="nome_completo" required>
			</div>
 
			<div class="form-group">
				<label for="matricula">* Matrícula:</label>
				<input type="text" class="form-control" name="matricula" required>
            </div>
            
            <div class="form-group">
				<label for="periodo">* Periodo:</label>
				<input type="text" class="form-control" name="periodo" required>
			</div>
 
			<!-- Agora vou sub-dividir esta coluna em outras três -->
			<div class="container-fluid">
				<div class="col-md-4">
					<!-- <div class="form-group">
						<label for="idade">Informe sua idade:</label>
						<input type="number" class="form-control" name="idade" min="15" max="110" required>
					</div> -->				
					<div class="form-group">
						<label for="genero">Informe seu género sexual:</label><br/>
						<input type="radio" name="genero" value="masculino"> Masculino<br/>
						<input type="radio" name="genero" value="feminino"> Feminino
					</div>
				</div>
 
				<div class="col-md-4">
					<!-- <div class="form-group">
						<label for="data_pgto">Informe sua data de nascimento:</label>
						<input type="date" class="form-control" name="data_pgto"  required>
					</div>
				    <div class="form-group">
						<label for="conheceu">Como conheceu nosso site?</label><br/>
						<input type="checkbox" name="google" value="masculino"> Google<br/>
						<input type="checkbox" name="amigos" value="feminino"> Amigos <br/>
						<input type="checkbox" name="revistas_jornais" value="feminino"> Revistas e Jornais <br/>
					</div> -->
				</div>
 
				<!-- <div class="col-md-4">
					<div class="form-group">
						<label for="cor_favorita">Qual a sua cor favorita?</label><br/>
						<input type="color" class="form-control" name="cor_favorita">
					</div>
				</div> -->
			</div>
			<!-- fim -->	
 
			<div class="form-group" align="center">
				<button type="submit" class="btn btn-lg btn-success"> 
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar dados
				</button>
			</div>
 
 
		</form>	
	</div>
</div>
</body>
        <div id="rodape" align="center">
            <img src="img/logo-doctum.png" class="img-responsive" alt="Responsive image" width="125" height="105"> &copy; Copyright SiteGRULES
        </div>
</head>