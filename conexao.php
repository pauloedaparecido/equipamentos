<?php
/* Variáveis PDO */
$base_dados = 'u386355899_bd';
$usuario_bd = 'u386355899_paulo';
$senha_bd   = 'pej@1995';
$host_db    = 'mysql.hostinger.com.br';
$conexao_pdo = null;
 
/* Concatenação das variáveis para detalhes da classe PDO */
$detalhes_pdo = 'mysql:host=' . $host_db . ';dbname='. $base_dados;
 
// Tenta conectar
try {
    // Cria a conexão PDO com a base de dados
    $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);

} catch (PDOException $e) {
    // Se der algo errado, mostra o erro PDO
    print "Erro: " . $e->getMessage() . "<br/>";
	
    // Mata o script
    die();
}
?>