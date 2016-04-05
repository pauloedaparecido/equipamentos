<html>
<?php 
	include ('../conexao.php');
?>
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
	<form action="../alterar/alterarRep.php" method="post">
    	<table method="post" action="">
        	<th>
            	<tr>
                <label>Patrimônio: </label>            		
                <br>
               <?php
					
					$prepara_reps = $conexao_pdo->prepare("SELECT * FROM reps WHERE tag_rep = DT15RAGR09");
					$prepara_reps->execute();
					while($linha = $prepara_reps->fetch())
					{
						echo $linha['tag_rep'];
						echo $linha['ns_rep'];
						echo $linha['pat_rep'];
							
					}
			   ?>
               <input type="text" value= "<?php $_REQUEST['tag_rep'];?>" name="patrimonio_rep">
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
                    <input type="number" name="numero_serie_rep" value="0001000028">
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
