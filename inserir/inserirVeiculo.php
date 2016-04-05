<?php
include ('../conexao.php');

$placa = $_POST['placa_veiculo'];
$frota = $_POST['frota_veiculo'];
$turma = $_POST['turma_veiculo'];
$status = $_POST['status_veiculo'];
$roteador = $_POST['roteador_veiculo'];
$tipo_veiculo = $_POST['tipo_veiculo'];


$stmt = $conexao_pdo->prepare('INSERT INTO veiculos (placa_veiculo, turma_veiculo, roteador_veiculo, frota_veiculo, status_veiculo, tipo_veiculo) VALUES(:placa_veiculo, :frota_veiculo, :turma_veiculo, :status_veiculo, :roteador_veiculo, :tipo_veiculo)'); 

if($stmt->execute(array( 

	':placa_veiculo'=> $placa, 
	':frota_veiculo'=> $frota, 
	':turma_veiculo'=> $turma, 
	':status_veiculo'=> $status,
	':roteador_veiculo'=> $roteador,
	':tipo_veiculo'=> $tipo_veiculo

))){
	
	header('Location: http://pauloedaparecido.esy.es/paginas/cadastroVeiculo.php');
	
}else{

	var_dump($stmt->errorCode()); 
	die();
}

?>

