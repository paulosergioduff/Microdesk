<?php

 function concluido()
 
 {
 
############ GRAVAR RESULTADOS ##########

if ($resultado = "#33CC33")

                    {



$resultados = 'resultados';


$arquivo = fopen("suporte/php/$ano/$mes/fila$mes$ano$resultados.php",'a+');

$chaveresultado = '$_' . "$protocolo";

$resultadoatual = '$_' . "$protocolo";


if ($arquivo) {
	if (!fwrite($arquivo, "
<?php
$chaveresultado = 
$aspas
	<html>
	<head>
	</head>
	</body>
	<inicio $protocolo></inicio $protocolo>
	
	

	<table border='01'>
	<tr BGCOLOR=#33CC33 name='$protocolo'>
	 <form action='resultado.php' method='GET'>
   <td><select name='data'><option value='$dia/$mes/$ano'>$dia/$mes/$ano</option></select></td>
   <td><select name='inicio'><option value='$inicio'>$inicio</option></select></td>
   <td><font color='white' style='text-decoration: none'><a href='formularioconsulta.php?protocoloconsulta=$protocolo'>$protocolo</a></font></td>
   <td><select name='empresa'><option value='$empresa'>$empresa</option></select></td>
   <td><select name='telefone'><option value='$telefone'>$telefone</option></select></td>
  
   
  
   <td>
   <select name='arquivo'><option value='suporte/php/$ano/$mes/fila$mes$ano$resultados.php'>DIR</option></select>
   <select name='protocolo'><option value='$protocolo'>$protocolo</option></select>
   <select name='resultado'><option value='#FF8566'>Pendente</option>
   <option value='#FFCC00'>Aguardando</option>
   <option value='#33CC33'>Resolvido</option>
   </select>
   <input type='submit' value='marcar'>
   </form>
	
	
	</td>
	</tr><final></final $protocolo>
	</table>
	
	</body>
	</html>
	$aspas ;
?>

	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Fila mensal gerada gerado com sucesso...<br>';
	fclose($arquivo);
}



                            }
							


     }
	 
	 ############ GRAVAR RESULTADOS ##########
	 
	 function aguardando()
 
 {
 
############ GRAVAR RESULTADOS ##########

if ($resultado = "#FFCC00")

                    {



$resultados = 'resultados';


$arquivo = fopen("suporte/php/$ano/$mes/fila$mes$ano$resultados.php",'a+');

$chaveresultado = '$_' . "$protocolo";

$resultadoatual = '$_' . "$protocolo";


if ($arquivo) {
	if (!fwrite($arquivo, "
<?php
$chaveresultado = 
$aspas
	<html>
	<head>
	</head>
	</body>
	<inicio $protocolo></inicio $protocolo>
	
	

	<table border='01'>
	<tr BGCOLOR=#33CC33 name='$protocolo'>
	 <form action='resultado.php' method='GET'>
   <td><select name='data'><option value='$dia/$mes/$ano'>$dia/$mes/$ano</option></select></td>
   <td><select name='inicio'><option value='$inicio'>$inicio</option></select></td>
   <td><font color='white' style='text-decoration: none'><a href='formularioconsulta.php?protocoloconsulta=$protocolo'>$protocolo</a></font></td>
   <td><select name='empresa'><option value='$empresa'>$empresa</option></select></td>
   <td><select name='telefone'><option value='$telefone'>$telefone</option></select></td>
  
   
  
   <td>
   <select name='arquivo'><option value='suporte/php/$ano/$mes/fila$mes$ano$resultados.php'>DIR</option></select>
   <select name='protocolo'><option value='$protocolo'>$protocolo</option></select>
   <select name='resultado'><option value='#FF8566'>Pendente</option>
   <option value='#FFCC00'>Aguardando</option>
   <option value='#33CC33'>Resolvido</option>
   </select>
   <input type='submit' value='marcar'>
   </form>
	
	
	</td>
	</tr><final></final $protocolo>
	</table>
	
	</body>
	</html>
	$aspas ;
?>

	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Fila mensal gerada gerado com sucesso...<br>';
	fclose($arquivo);
}



                            }
							


     }
	 
	 ############ GRAVAR RESULTADOS ##########
	 
	 function pendente()
 
 {
 
############ GRAVAR RESULTADOS ##########

if ($resultado = "#FF8566")

                    {



$resultados = 'resultados';


$arquivo = fopen("suporte/php/$ano/$mes/fila$mes$ano$resultados.php",'a+');

$chaveresultado = '$_' . "$protocolo";

$resultadoatual = '$_' . "$protocolo";


if ($arquivo) {
	if (!fwrite($arquivo, "
<?php
$chaveresultado = 
$aspas
	<html>
	<head>
	</head>
	</body>
	<inicio $protocolo></inicio $protocolo>
	
	

	<table border='01'>
	<tr BGCOLOR=#33CC33 name='$protocolo'>
	 <form action='resultado.php' method='GET'>
   <td><select name='data'><option value='$dia/$mes/$ano'>$dia/$mes/$ano</option></select></td>
   <td><select name='inicio'><option value='$inicio'>$inicio</option></select></td>
   <td><font color='white' style='text-decoration: none'><a href='formularioconsulta.php?protocoloconsulta=$protocolo'>$protocolo</a></font></td>
   <td><select name='empresa'><option value='$empresa'>$empresa</option></select></td>
   <td><select name='telefone'><option value='$telefone'>$telefone</option></select></td>
  
   
  
   <td>
   <select name='arquivo'><option value='suporte/php/$ano/$mes/fila$mes$ano$resultados.php'>DIR</option></select>
   <select name='protocolo'><option value='$protocolo'>$protocolo</option></select>
   <select name='resultado'><option value='#FF8566'>Pendente</option>
   <option value='#FFCC00'>Aguardando</option>
   <option value='#33CC33'>Resolvido</option>
   </select>
   <input type='submit' value='marcar'>
   </form>
	
	
	</td>
	</tr><final></final $protocolo>
	</table>
	
	</body>
	</html>
	$aspas ;
?>

	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Fila mensal gerada gerado com sucesso...<br>';
	fclose($arquivo);
}



                            }
							


     }
	 
	 ############ GRAVAR RESULTADOS ##########
	 
	 
	