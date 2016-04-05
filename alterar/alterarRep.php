<?php
include ('../conexao.php');

$id = $_REQUEST('id_rep');
$pat_rep = $_POST['pat_rep'];
$tag_rep = $_POST['tag_rep'];
$ns_rep = $_POST['ns_rep'];
$veiculo_rep = $_POST['veiculo_rep'];
$setor_rep = $_POST['setor_rep'];
$status_rep = $_POST['status_rep'];



$stmt = $conexao_pdo->prepare("UPDATE reps (pat_rep, tag_rep, ns_rep, veiculo_rep, setor_rep, status_rep) VALUES (:pat_rep, :tag_rep, :ns_rep, :veiculo_rep, :setor_rep, :status_rep) WHERE  id_rep = $id"); 
if($stmt->execute(array( 
	':pat_rep'=> $pat_rep, 
	':tag_rep'=> $tag_rep, 
	':ns_rep'=> $ns_rep, 
	':veiculo_rep'=> $veiculo_rep,
	':setor_rep'=> $setor_rep,
	':status_rep'=> $status_rep

))){
	
	header('Location: http://pauloedaparecido.esy.es/index.php');
	
}else{
	var_dump($stmt->errorCode()); 
	die();
}

?>

