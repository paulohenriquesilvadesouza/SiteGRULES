<?php
require_once("conexao.php");

$nome_completo = $_POST['txtnome_completo'];
$matricula = $_POST['txtmatricula'];
$periodo = $_POST['txtperiodo'];

$aluno_id = null;
$aluno_id = $_POST['txtaluno_id'];

if($aluno_id == null){
    $sql = "INSERT INTO aluno (matricula,       nome,    periodo) VALUES ('$matricula', '$nome_completo', '$periodo')";
	$operacao = 'Cadastrado';
}


$query = mysqli_query($conn,$sql);

if ($query){
	echo "<script type='text/javascript'>alert('$operacao com sucesso!');window.location.href = 'livros.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('Erro ao cadastrar...');window.location.href = 'livros.php';</script>";
}

?>