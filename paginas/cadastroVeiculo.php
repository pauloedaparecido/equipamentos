<?php 
include ('../conexao.php');

$prepara_veiculo = $conexao_pdo->prepare('SELECT * FROM veiculos');
$prepara_roteador = $conexao_pdo->prepare('SELECT * FROM roteadores');
$prepara_turmas = $conexao_pdo->prepare('SELECT * FROM turmas_agricolas');
$prepara_veiculo->execute();
$prepara_roteador->execute();
$prepara_turmas->execute();

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
                	<li><a href="http://pauloedaparecido.esy.es/paginas/cadastroRep.php">Cadastrar REP</a></li>
                </ul>
            </li>
            <li><a href="#">VEICULOS</a>
            	<ul>
                	<li><a href="http://pauloedaparecido.esy.es/paginas/cadastroVeiculo.php">Cadastrar Veiculo</a></li>
                </ul>
            </li>
            <li><a href="#">MANUTENÇÕES</a>
            	<ul>
                	<li><a href="#">REPs</a></li>
                	<li><a href="#">Veiculos</a></li>                   
                </ul>
            </li>
		</ul>
    </div>    	
	<div id="form_cadastro_rep">
    <h3>Cadastro do Veiculo</h3>
	<form action="../inserir/inserirVeiculo.php" method="post">
    	<table method="post" action="">
        	<th>
            	<tr>
                <label>Placa: </label>            		
                <br>
                <input type="text" name="placa_veiculo" maxlength="7">
        		</tr>
            </th>
            <br><br>
            <th>
            	<tr>
            		<label>Frota:</label> 
                    <br>
                    <input type="number" name="frota_veiculo" maxlength="20">
        		</tr>
            </th>
            <br><br>
            <th>
            	<tr>
            		<label>Turma:</label>
                    <br>
                    <select name="turma_veiculo">
                        <option selected="selected"> </option>
							<?php
								while ($opcao_turmas = $prepara_turmas->fetch())
								{
									echo '<option>'.$opcao_turmas['nome_turma_agr'].'</option>';
								}
							?>
					</select>
        		</tr>
            </th>
            <br><br>
            <th>
            	<tr>
            		<label>Roteador:</label>
                    <br>
                    <select name="roteador_veiculo">
                        <option selected="selected"> </option>
							<?php
								while ($opcao_roteador = $prepara_roteador->fetch())
								{
									echo '<option>'.$opcao_roteador['mac_roteador'].'</option>';
								}
							?>
					</select>
          		</tr>
            </th>
            <br><br>
            <label>Tipo:</label>
                    <br>
                    <select name="tipo_veiculo">
                        <option selected="selected"> </option>
						<option value="valor_01">Onibus</option> 
  						<option value="valor_02">Micro Onibus</option>
  						<option value="valor_03">Van</option>
                        <option value="valor_03">Doblo</option>
					</select>
            <br><br>
            <label>Status:</label>
                    <br>
                    <select name="status_veiculo">
                        <option selected="selected"> </option>
						<option value="valor_01">Ativo</option> 
  						<option value="valor_02">Inativo</option>
  						<option value="valor_03">Manutenção</option>
					</select>
          		</tr>
            </th>
            <br><br>
            <th>
            	<tr>
                	<input type="submit" name="enviar" value="Inserir Dados" />
                </tr>
            </th>
        </table>   	
    </form>
    </div>
</body>
</html>
