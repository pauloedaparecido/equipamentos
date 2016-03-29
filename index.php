<?php 
include ('conexao.php');

$prepara_veiculo = $conexao_pdo->prepare('SELECT * FROM veiculos');
$prepara_setores = $conexao_pdo->prepare('SELECT * FROM setores');
$prepara_reps = $conexao_pdo->prepare('SELECT * FROM reps');

$prepara_veiculo->execute();
$prepara_setores->execute();
$prepara_reps->execute();

?>

<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div id="topo">
    </div>
    <div id="tabelaConteudo">
    	<a href="http://pauloedaparecido.esy.es/cadastroRep.php"><img src='imagens/add.png' width='10px' height='10px'/></a>
    	<table border="1" text-align="center">
			<tr>
				<th>Tag Equipamento</th><th>Numero de Série</th><th>Patrimonio</th><th>Veiculo</th>
			</tr>
		<?php
			while ( $linha = $prepara_reps->fetch() ) 
			{
				echo '<tr><td>' . $linha['tag_rep'] .'</td>';
				echo '<td>' . $linha['ns_rep']. '</td>';
				echo '<td>' . $linha['pat_rep']. '</td>';
				echo '<td>' . $linha['veiculo']. '</td>';
				
			}
		?>
		</table>
<br />
    </div>

</body>
</html>
