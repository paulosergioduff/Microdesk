<?php
// Incluindo arquivo de conexão/configuração
require_once('config/conn.php');

// Instanciando novo objeto da classe Login
$objLogin = new Login();

// Verificando se o usuário está logado, caso contrá será redirecionado para a página de login
if (!$objLogin->verificar('index.php'))
    // Finalizado o script, apenas para garantir que o usuário irá ver o conteúdo da página
    exit;

// Selecionando informações do usuário
$query = mysql_query("SELECT * FROM usuario WHERE usuario_id = {$objLogin->getID()}");
$usuario = mysql_fetch_object($query);
include "template.php";

$include = $_GET['pagina'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Painel do usuário logado</title>
    </head>
    <body>
      <?php
	  // LEMBRAR DE COLOCAR FILE EXIST NO GET
	  
	  date_default_timezone_set("America/Sao_Paulo");
$mes = date("m");
$ano = date("Y");
$dia = date("d");

$resultados = "resultados";

include "suporte/php/$ano/$mes/fila$mes$ano$resultados.php" ;
	  // modelo: suporte/php/2014/10/fila102014.php
	  

	####### PASSANDO URL #############
	
	  if ($pagina = "1010")
	    {
		
		            	  if (file_exists("suporte/php/$ano/$mes/fila$mes$ano.php")) {
                  include "suporte/php/$ano/$mes/fila$mes$ano.php";			  
                 } 
				 
				 else {
                   echo "Parametro não existe!"; 
                      }
	  
	    }
		
		;
		####### PASSANDO URL #############	
		
		
	  // LEMBRAR DE COLOCAR FILE EXIST NO GET
       ?>
        <a href="sair.php">Sair</a>
    </body>
</html>
