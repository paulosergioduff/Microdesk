<?php


include "template.php";

$inicio = $_POST['inicio'];
$fim = date("H:i:s");
$protocoloexterno = $_POST['protocoloexterno'];
$protocolointerno = $_POST['protocolointerno'];
$empresa = $_POST['empresa'];
$cnpj = $_POST['cnpj'];
$assunto = $_POST['assunto'];
$telefone = $_POST['telefone'];
$teminternet = $_POST['teminternet'];
$acessoremoto = $_POST['acessoremoto'];
$blocodenotas = $_POST['blocodenotas'];
$solucao = $_POST['solucao'];
$contrato = $_POST['contrato'];
$versao = $_POST['motivo'];
$motivopega = $_POST['produtos'] ;
$motivo = "$motivopega" . "-" . "$versao" ;
$senharemota = $_POST['senharemota'];


$paragrafo = '
';
################ PREPARA DIRETÓRIOS ################

date_default_timezone_set("America/Sao_Paulo");
$mes = date("m");
$ano = date("Y");
$dia = date("d");
@mkdir("suporte", 0777);
@mkdir("suporte/total/", 0777);
@mkdir("suporte/total/protocolos/", 0777);
@mkdir("suporte/php/", 0777); 
@mkdir("suporte/php/$ano/", 0777); 
@mkdir("suporte/php/$ano/$mes/", 0777); 

@mkdir("suporte/xml/", 0777); 
@mkdir("suporte/xml/$ano/", 0777); 
@mkdir("suporte/xml/$ano/$mes/", 0777); 



################ PREPARA DIRETÓRIOS ################

### USUARIO ###########
### USUARIO ###########
### USUARIO ###########

############ GRAVAR ARQUIVO ##########


$arquivo = fopen("suporte/php/$ano/$mes/$hostname.php",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

	<table border='01'>
	<tr>
    <td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$inicio</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$fim</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$protocoloexterno</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$protocolointerno</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$empresa</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$motivo</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$cnpj</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$assunto</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$telefone</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$teminternet</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$acessoremoto</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$blocodenotas</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$solucao</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$contrato</font></td>
	
	</tr>
	</table>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Log de usuário mensal gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########
$arquivo = fopen("suporte/total/$hostname.xml",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

<inicio>$inicio</inicio>
	<fim>$fim</fim>
	<protocoloexterno>$protocoloexterno</protocoloexterno>
	<protocolointerno>$protocolointerno</protocolointerno>
	<empresa>$empresa</empresa>
	<cnpj>$cnpj</cnpj>
	<assunto>$assunto</assunto>
	<telefone>$telefone</telefone>
	<teminternet>$teminternet</teminternet>
	<acessoremoto>$acessoremoto</acessoremoto>
	<blocodenotas>$blocodenotas</blocodenotas>
	<solucao>$solucao</solucao>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Protocolo geral gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########

############ GRAVAR ARQUIVO ##########


############ GRAVAR ARQUIVO ##########


$arquivo = fopen("suporte/php/$ano/$hostname.php",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

	<table border='01'>
	<tr>
    <td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$inicio</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$fim</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$protocoloexterno</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$protocolointerno</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$empresa</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$motivo</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$cnpj</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$assunto</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$telefone</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$teminternet</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$acessoremoto</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$blocodenotas</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$solucao</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$contrato</font></td>
	
	</tr>
	</table>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Log de usuário anual gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########



###### PROTOCOLOS ######
###### PROTOCOLOS ######
###### PROTOCOLOS ######

############ GRAVAR ARQUIVO ##########

$empresaform = "$protocolointerno";
$aspas = '"';
$formulario = 'formularioconsulta.php';

// PASSA AS VARIAVEIS PARA O FORMULÁRIO RECEBER DADOS

   $inicioform = '$inicioform';
   $fimform = '$fimform';
   $protocoloexternoform = '$protocoloexterno';
   $protocolointernoform = '$protocolointerno';
   $empresaform = '$empresaform';
   $cnpjform = '$cnpjform';
   $assuntoform = '$assunto';
   $telefoneform = '$telefone';
   $teminternetform = '$teminternet';
   $acessoremotoform = '$acessoremoto';
   $blocodenotasform = '$blocodenotas';
   $solucaoform = '$solucao';
   $contratoform = '$contrato';
   $versaoform = '$versao';
   $motivopegaform = '$motivopega' ;
   $motivoform = '$motivo' ;
   $senharemotaform = '$senharemota';
   $contratoform = '$contrato';

$arquivo = fopen("suporte/total/protocolos/$protocolointerno.php",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "
   <?php
   
   $inicioform = $aspas$inicio$aspas;
   $fimform = $aspas$fim$aspas;
   $protocoloexternoform = $aspas$protocoloexterno$aspas;
   $protocolointernoform = $aspas$protocolointerno$aspas;
   $empresaform = $aspas$empresa$aspas;
   $cnpjform = $aspas$cnpj$aspas;
   $assuntoform = $aspas$assunto$aspas;
   $telefoneform = $aspas$telefone$aspas;
   $teminternetform = $aspas$teminternet$aspas;
   $acessoremotoform = $aspas$acessoremoto$aspas;
   $blocodenotasform = '$aspas$blocodenotas$aspas';
   $solucaoform = $aspas$solucao$aspas;
   $contratoform = $aspas$contrato$aspas;
   $versaoform = $aspas$versao$aspas;
   $motivopegaform = $aspas$motivopega$aspas ;
   $motivoform = $aspas$motivo$aspas ;
   $senharemotaform = '$senharemota';
	
	?>
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Log de usuário total gerado com sucesso...<br>';
	fclose($arquivo);
}

###### PROTOCOLOS ######
###### PROTOCOLOS ######
###### PROTOCOLOS ######

############ GRAVAR ARQUIVO ##########


### USUARIO ###########
### USUARIO ###########
### USUARIO ###########

################# FILAS ###########################
################# FILAS ###########################
################# FILAS ###########################



############ GRAVAR ARQUIVO ##########

############ GRAVAR RESULTADOS ##########

$resultados = 'resultados';


$arquivo = fopen("suporte/php/$ano/$mes/fila$mes$ano$resultados.php",'a+');

$chaveresultado = '$_' . "$protocolointerno";

$resultadoatual = '$_' . "$protocolointerno";

if ($arquivo) {
	if (!fwrite($arquivo, "
<?php
$chaveresultado = 
$aspas
	<html>
	<head>
	</head>
	</body>
	<inicio $protocolointerno></inicio $protocolointerno>
	
	

	<table border='01'>
	<tr BGCOLOR=#FF8566 name='$protocolointerno'>
	 <form action='resultado.php' method='GET'>
   <td><select name='data'><option value='$dia/$mes/$ano'>$dia/$mes/$ano</option></select></td>
   <td><select name='inicio'><option value='$inicio'>$inicio</option></select></td>
   <td><a href='formularioconsulta.php?protocoloconsulta=$protocolointerno'><font color='white' style='text-decoration: none'>$protocolointerno</font></a></td>
   <td><select name='empresa'><option value='$empresa'>$empresa</option></select></td>
   <td><select name='telefone'><option value='$telefone'>$telefone</option></select></td>
  
   
  
   <td>
   <select name='arquivo'><option value='suporte/php/$ano/$mes/fila$mes$ano$resultados.php'>DIR</option></select>
   <select name='protocolo'><option value='$protocolointerno'>$protocolo</option></select>
   <select name='resultado'><option value='#FF8566'>Pendente</option>
   <option value='#FFCC00'>Aguardando</option>
   <option value='#33CC33'>Resolvido</option>
   </select>
   <input type='submit' value='marcar'>
   </form>
	
	
	</td>
	</tr><final></final $protocolointerno>
	</table>
	
	</body>
	</html>
	$aspas ;
?>

	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Fila mensal gerada gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR RESULTADOS ##########



$arquivo = fopen("suporte/php/$ano/$mes/fila$mes$ano.php",'a+');

$aspassimples = "'";
if ($arquivo) {
	if (!fwrite($arquivo, "
	<?php
echo $aspas$chaveresultado$aspas ;
?>	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Fila mensal gerada gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########

############ GRAVAR ARQUIVO ##########


####### MES

$arquivo = fopen("suporte/php/$ano/$mes/fila$ano.php",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

	<table border='01'>
	<tr>
   <td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$dia/$mes/$ano/</td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'><a href='$linkexterno$linkinternomes'>$inicio</a></font></td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$empresa</font></td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$telefone</font></td>
	</tr>
	</table>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Registro anual gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########

############ GRAVAR ARQUIVO ##########


### DIA

$arquivo = fopen("suporte/php/$ano/$mes/fila$dia.php",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

	<table border='01'>
	<tr>
   <td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$dia/$mes/$ano/</td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'><a href='$linkexterno$linkinternomes'>$inicio</a></font></td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$empresa</font></td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$telefone</font></td>
	</tr>
	</table>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Log de atendimento diário gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########

############ GRAVAR ARQUIVO ##########


##### ANO

$arquivo = fopen("suporte/php/$ano/fila$ano.php",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

	<table border='01'>
	<tr>
   <td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$dia/$mes/$ano/</td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'><a href='$linkexterno$linkinternomes'>$inicio</a></font></td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$empresa</font></td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$telefone</font></td>
	</tr>
	</table>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Log de atendimento anual gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########


### XMLs ######
### XMLs ######
### XMLs ######

############ GRAVAR ARQUIVO ##########


$arquivo = fopen("suporte/xml/$ano/$mes/$mes.xml",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

<inicio>$inicio</inicio>
	<fim>$fim</fim>
	<protocoloexterno>$protocoloexterno</protocoloexterno>
	<protocolointerno>$protocolointerno</protocolointerno>
	<empresa>$empresa</empresa>
	<motivo>$motivo</motivo>
	<contrato$contrato</contrato>
	<cnpj>$cnpj</cnpj>
	<assunto>$assunto</assunto>
	<telefone>$telefone</telefone>
	<teminternet>$teminternet</teminternet>
	<acessoremoto>$acessoremoto</acessoremoto>
	<blocodenotas>$blocodenotas</blocodenotas>
	<solucao>$solucao</solucao>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'XML mensal gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########

############ GRAVAR ARQUIVO ##########


$arquivo = fopen("suporte/xml/$ano/$ano.xml",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

<inicio>$inicio</inicio>
	<fim>$fim</fim>
	<protocoloexterno>$protocoloexterno</protocoloexterno>
	<protocolointerno>$protocolointerno</protocolointerno>
	<empresa>$empresa</empresa>
	<motivo>$motivo</motivo>
	<contrato$contrato</contrato>
	<cnpj>$cnpj</cnpj>
	<assunto>$assunto</assunto>
	<telefone>$telefone</telefone>
	<teminternet>$teminternet</teminternet>
	<acessoremoto>$acessoremoto</acessoremoto>
	<blocodenotas>$blocodenotas</blocodenotas>
	<solucao>$solucao</solucao>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'XML anual gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########

### XMLs ######
### XMLs ######
### XMLs ######




// $ = $_POST[''];

$aspas = '"';


//<textarea  rows="8" cols="70" >

// echo '<div id="selecao">';

// CANCELADO:
/*echo '<form name="copiar">
<BR><textarea cols="50" name="txt" rows="10" wrap="VIRTUAL">' . "$paragrafo";*/

echo '<center>
<h1>Resultado:</h1>
<form name="copiar">
<BR><textarea cols="70" name="txt" rows="10" wrap="VIRTUAL">';


echo "************** - OCKAM PRC GERADOR DE CHAMADO 0.0.1 - ******" . "$paragrafo" ;
echo "============================================================" . "$paragrafo" ;
echo "************************************************************" . "$paragrafo" ;
echo "INÍCIO: " . $inicio . "$paragrafo" ;
echo "FIM: " . $fim . "$paragrafo" ;
echo "PROTOCOLO EXTERNO: " . $protocoloexterno . "$paragrafo" ;
echo "ASSINATURA: " . $protocolointerno . "$paragrafo"  ;
echo "EMPRESA: " . $empresa . "$paragrafo" ;
echo "CNPJ: " . $cnpj . "$paragrafo"  ;
echo "ASSUNTO: " . $assunto . "$paragrafo"  ;
echo "TELEFONE: " . $telefone  . "$paragrafo" ;
echo "TEM INTERNET? : " . $teminternet . "$paragrafo"  ;
echo "ACESSO REMOTO: " . $acessoremoto  . "$paragrafo" ;
echo "ANOTAÇÕES: " . $blocodenotas  . "$paragrafo" ;
echo "SOLUÇÃO USADA: " . $solucao . "$paragrafo"  ;
echo "CONTRATO: " . $solucao . "$contrato" . "$paragrafo"  ;
echo "VERSÃO: " . $solucao . "$versao" . "$paragrafo"  ;
echo "MOTIVO: " . $solucao . "$motivo"  ;
echo '</textarea>';

$botaselecionar = '<!-botão->
<input name="value" onclick="javascript:this.form.txt.focus();this.form.txt.select();" type="button" value="Selecionar">';



// echo "</form>";




// echo '<button id="botao">Copiar conteudo</button>$paragrafo';

// echo $copiadiv ;

?>




</textarea>
<BR>
<!--botão
<input name="value" onclick="javascript:this.form.txt.focus();this.form.txt.select();" type="button" value="Selecionar"><br> -->
<a href="painel.php"><img src="iniciarnovoatendimento.png"></a>
</form> 

<!-- 

XML:

	<inicio>$inicio</inicio>
	<fim>$fim</fim>
	<protocoloexterno>$protocoloexterno</protocoloexterno>
	<protocolointerno>$protocolointerno</protocolointerno>
	<empresa>$empresa</empresa>
	<cnpj>$cnpj</cnpj>
	<assunto>$assunto</assunto>
	<telefone>$telefone</telefone>
	<teminternet>$teminternet</teminternet>
	<acessoremoto>$acessoremoto</acessoremoto>
	<blocodenotas>$blocodenotas</blocodenotas>
	<solucao>$solucao</solucao>

BOTÃO DESABILITADO

    $paragrafo
     <input type="button" name="Submit" value="Selecionar e Copiar" class="formul&aacute;rio" onClick="MM_callJS('Javascript: seleciona(\'codigo.script\')')" > -->