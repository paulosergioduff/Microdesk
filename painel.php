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
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Painel do usuário logado</title>
    </head>
    <body>
      <form action="format.php" method="POST">

<table>

<tr>

<td>
  Nome do contato:<input type="text" name="atendimento"><br>
  Assinatura: <select name="assinatura"><option value="<?php echo $hostname; ?>"><?php echo $hostname; ?></option></select><BR>
  <input type="image" src="img/atender.png" value="Enviar" name="acao" >
  
  
  </td>
  


        <a href="sair.php">Sair</a>
    </body>
</html>
