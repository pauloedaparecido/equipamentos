<?php
include ('conexao.php');

$patrimonio = $_POST['patrimonio_rep'];
$tag = $_POST['tag_rep'];
$numero_serie = $_POST['numero_serie_rep'];
$status = $_POST['status_rep'];
$veiculo = $_POST['veiculo_rep'];
$setor = $_POST['setor_rep'];


$stmt = $conexao_pdo->prepare('INSERT INTO reps VALUES(:pat_rep, :tag_rep, :ns_rep, :status_rep, :veiculo_rep, :setor_rep)'); 
if($stmt->execute(array( 
	':pat_rep' => $patrimonio, 
	':tag_rep'=> $tag, 
	':ns_rep'=> $numero_serie, 
	':status_rep'=> $status,
	':veiculo_rep'=> $veiculo,
	':setor_rep'=> $setor 
))){
	
	header('Location: http://pauloedaparecido.esy.es/index.php');
	
}else{
	var_dump($stmt->errorCode()); 
	die();
}

?>

