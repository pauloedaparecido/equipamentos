<?php 
include ('../conexao.php');

$prepara_veiculo = $conexao_pdo->prepare('SELECT * FROM veiculos');
$prepara_setores = $conexao_pdo->prepare('SELECT * FROM setores');
// A classe PDO executa o comando
$prepara_veiculo->execute();
$prepara_setores->execute();
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
    <h3>Cadastro do Equipamento:</h3>
	<form action="../inserir/inserirRep.php" method="post">
    	<table method="post" action="">
        	<th>
            	<tr>
                <label>Patrimônio: </label>            		
                <br>
                <input type="text" name="patrimonio_rep" maxlength="8">
        		</tr>
            </th>
            <br><br>
            <th>
            	<tr>
            		<label>Identificação do Equipamento (TAG):</label> 
                    <br>
                    <input type="text" name="tag_rep" maxlength="10">
        		</tr>
            </th>
            <br><br>
            <th>
            	<tr>
            		<label>Número de Série: </label>
                    <br>
                    <input type="number" name="numero_serie_rep" value="1000028" maxlength="14">
        		</tr>
            </th>
            
            <br><br>
            <th>
            	<tr>
            		<label>Veículo:</label>
                    <br>
                    <select name="veiculo_rep">
                        <option selected="selected"> </option>
							<?php
								while ($opcao_veiculo = $prepara_veiculo->fetch())
								{
									echo '<option>'.$opcao_veiculo['placa_veiculo'].'</option>';
								}
							?>
					</select>
          		</tr>
            </th>
            <br><br>
            <th>
            	<tr>
            		<label>Setor:</label>
                    <br>
                     <select name="setor_rep">
                     	<option selected="selected"> </option>
                        <?php
							while ($opcao_setor = $prepara_setores->fetch())
							{
								echo '<option>'.$opcao_setor['id_setor'].": ".$opcao_setor['nome_setor'].'</option>';
							}
						?>
					</select>
                 </tr>
            </th>
            <br><br>
            <th>
            	<tr>
            		<label>Status: </label>
                    <br>	
                    <select name="status_rep">
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
