<?php 
include ('../conexao.php');

$prepara_reps = $conexao_pdo->prepare('SELECT * FROM reps');
$prepara_reps->execute();

?>

<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
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
				<td  width="200px" align="center"><b>Tag Equipamento</b></td><td width="200px" align="center"><b>Numero de Série</b></td><td width="200px" align="center"><b>Patrimonio</b></td><td width="200px" align="center"><b>Alterar</b></td><td width="200px" align="center"><b>Excluir</b></td>
			</tr>
		<?php
			
			while ( $linha = $prepara_reps->fetch()) 
			{	
				$url_alterar = "formEditarRep.php?id_rep=".$linha['id'];
								
				echo '<tr><td align="center"> ' . $linha['tag_rep'].'</td>';
				echo '<td align="center">' . $linha['ns_rep']. '</td>';
				echo '<td align="center">' . $linha['pat_rep']. '</td>';			
				echo '<td align="center"><a href='.$url_alterar.'>Alterar</a></td>';
				echo '<td align="center">Excluir</td>';
				

			}
		?>
		</table>
        <center>
		<br />
</body>
</html>
