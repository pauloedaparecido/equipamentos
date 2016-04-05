<?php

$patrimonio = $_POST('patrimonio_REP');
$tag = $_POST('tag_rep');
$numero_serie = $_POST('numero_serie_rep');
$status = $_POST('status_rep');
$veiculo = $_POST('veiculo_rep');
$setor = $_POST('setor_rep');

$sql = "INSERT INTO reps ('pat_rep', 'tag_rep', 'ns_rep', 'status_rep', 'veiculo_rep', 'setor_rep') values ('$patrimonio', '$tag', '$numero_serie', '$status', '$veiculo', '$setor')";




?>