<?php 
include ('conexao.php');

$prepara_veiculo = $conexao_pdo->prepare('SELECT * FROM veiculos');
$prepara_setores = $conexao_pdo->prepare('SELECT * FROM setores');
// A classe PDO executa o comando
$prepara_veiculo->execute();
$prepara_setores->execute();
?>

<html>

<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	
	<div id="form_cadastro_rep">
    <h3>Cadastro do Equipamento:</h3>
	<form action="inserir.php" method="post">
    	<table method="post" action="">
        	<th>
            	<tr>
                <label>Patrimônio: </label>            		
                <br>
                <input type="text" name="patrimonio_rep">
        		</tr>
            </th>
            <br><br>
            <th>
            	<tr>
            		<label>Identificação do Equipamento (TAG):</label> 
                    <br>
                    <input type="text" name="tag_rep">
        		</tr>
            </th>
            <br><br>
            <th>
            	<tr>
            		<label>Número de Série: </label>
                    <br>
                    <input type="text" name="numero_serie_rep" value="0001000028">
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
            		<label>Veículo:</label>
                    <br>
                    <select name="veiculo_rep">
                        <option selected="selected">Selecione...</option>
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
                     	<option selected="selected">Selecione...</option>
                        <?php
							while ($opcao_setor = $prepara_setores->fetch())
							{
								echo '<option>'.$opcao_setor['nome_setor'].'</option>';
							}
						?>
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
