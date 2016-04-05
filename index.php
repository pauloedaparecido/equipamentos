﻿<?php 
include ('conexao.php');


$prepara_reps = $conexao_pdo->prepare('SELECT * FROM reps');
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
    <div id="menu">
		<ul id="menu">
			<li><a href="http://pauloedaparecido.esy.es">INCIO</a></li>
			<li><a href="#">REPS</a>
            	<ul>
                	<li><a href="http://pauloedaparecido.esy.es/paginas/cadastroRep.php">Cadastrar</a></li>
                    <li><a href="http://pauloedaparecido.esy.es/paginas/editarRep.php">Alterar</a></li>
                </ul>
            </li>
            <li><a href="#">VEICULOS</a>
            	<ul>
                	<li><a href="http://pauloedaparecido.esy.es/paginas/cadastroVeiculo.php">Cadastrar</a></li>
                    <li><a href="http://pauloedaparecido.esy.es/paginas/cadastroVeiculo.php">Alterar</a></li>
                </ul>
            </li>
            <li><a href="#">MANUTENÇÕES</a>
            	<ul>
                	<li><a href="#">REPs</a></li>
                	<li><a href="#">Veiculos</a></li>                   
                </ul>
            </li>
            <li><a href="#">TURMAS</a>
            	<ul>
                	<li><a href="#">Cadastrar</a></li>
                	<li><a href="#">Alterar</a></li>                   
                </ul>
            </li>
            <li><a href="#">ROTEADORES</a>
            	<ul>
                	<li><a href="#">Cadastrar</a></li>
                	<li><a href="#">Alterar</a></li>                   
                </ul>
            </li>
        <li><a href="#">CHIPS</a>
            	<ul>
                	<li><a href="#">Cadastrar</a></li>
                	<li><a href="#">Alterar</a></li>                   
                </ul>
            </li>
		</ul>  
    </div>
       	
    	<center>
        
        <table id="consulta" border="1px" bgcolor="#FAFAFA">
			<tr>
				<td  width="200px" align="center"><b>Tag Equipamento</b></td><td width="200px" align="center"><b>Numero de Série</b></td><td width="200px" align="center"><b>Patrimonio</b></td><td width="200px" align="center"><b>Veiculo</b></td>
			</tr>
		<?php
			$prepara_veiculo = $conexao_pdo->prepare('SELECT nome_veiculo FROM veiculos WHERE id_veiculo = $linha[veiculo_rep]');
			
			
			while ( $linha = $prepara_reps->fetch()) 
			{
				echo '<tr><td align="center">' . $linha['tag_rep'] .'</td>';
				echo '<td align="center">' . $linha['ns_rep']. '</td>';
				echo '<td align="center">' . $linha['pat_rep']. '</td>';
				echo '<td align="center">' . $linha['veiculo_rep']. '</td></tr>';		
			}
				
		?>
		</table>
        <center>
		<br/>
</body>
</html>
