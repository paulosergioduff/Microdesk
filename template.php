<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//$host = "http://localhost:8080/Atendimento/novo/login/";
$raiz = "suporte/";

?>
<html>
<head>
<title>MicroDesk - v 0.8</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<?php include "estilo/css.php" ; ?>
<?php include "javascript/convertcase.php" ; ?> 

<?php include "javascript/escondeinput.php" ; ?>







</head>
<body background="img/fundo.gif">
<!-- <?php echo $hostname; ?> -->
<font>
<center>
<img src="img/head.jpg"><a href="sair.php"><img src="img/logoff.png"></a><br>

<a href="painel.php"><img src="img/gancho.png"></a><a href="central.php?pagina=1010"><img src="img/filames.png"></a><img src="img/semanal.png"><BR>Consultar protocolo:<form action="formularioconsulta.php" method="GET"><input type="text" name="protocoloconsulta"><input type="submit" value="Consultar">


</form>

<center>


<?php error_reporting(E_ERROR | E_PARSE);
ini_set('default_charset','UTF-8');
date_default_timezone_set("America/Sao_Paulo");
$mes = date("m");
$ano = date("Y");
$dia = date("d");

?>