<?php
require_once("conexao.php");

$cd_nome_completo = $_POST['txtnome_completo'];
$cd_matricula = $_POST['txtmatricula'];
$cd_periodo = $_POST['txtperiodo'];

$aluno_id = null;
$aluno_id = $_POST['txtaluno_id'];

if($aluno_id == null){
    $sql = "INSERT INTO aluno (matricula,       nome,    periodo) VALUES ('$cd_matricula', '$cd_nome_completo', '$cd_periodo')";
	$operacao = 'Cadastrado';
}
else {
	# code...
}


$query = mysqli_query($conn,$sql);

if ($query){
	echo "<script type='text/javascript'>alert('$operacao com sucesso!');window.location.href = 'livros.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('Erro ao cadastrar...');window.location.href = 'livros.php';</script>";
}

?>