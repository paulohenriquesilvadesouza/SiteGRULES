<?php
require_once("conexao.php");


$cd_tema = $_POST['txttema'];
$cd_semestre = $_POST['txtsemestre'];


$evento_id = null;
$evento_id = $_POST['txtevento_id'];

echo "<script>console.log('evento_id = $evento_id');</script>";


if($evento_id == null){

class Evento {
	function __construct($id, $semestre, $tema) 
	{
		$this->id = $id;
		$this->semestre = $semestre;
		$this->tema = $tema;
	}
}

ini_set("soap.wsdl_cache_enabled", "0"); //Não permite que se armazena cache dos metodos do SOAP // Essa configuração foi extremamente necessária, depois te explico o porquê, não excluir!!!

$client = new SoapClient('http://localhost:8080/grules-soap-sever/EventoWebService?wsdl');
    $evento = new Evento(null, "AAA", "AAA");
	$parameters = array(
	"evento" => $evento
					);
	$results = $client->saveEvento($parameters);
}
else{
	$sql = "UPDATE evento SET `semestre`='$cd_semestre',`tema`='$cd_tema' WHERE `evento`.`evento_id` =" . $evento_id . ";";
	echo "<script>console.log('$sql');</script>";
	$operacao = 'Atualizado';
}

$query = mysqli_query($conn,$sql);

if ($query){
	echo "<script type='text/javascript'>alert('$operacao com sucesso!');window.location.href = 'evento.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('Erro ao cadastrar...');window.location.href = 'evento.php';</script>";
}

?>