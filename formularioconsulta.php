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


#### IMPLEMENTAÇÃO DE FORMULÁRIO ######

date_default_timezone_set("America/Sao_Paulo");

$protocoloconsulta = $_GET['protocoloconsulta'];

include 'template.php';
include "suporte/total/protocolos/$protocoloconsulta.php";
$datai = date("H:i:s");


$assinatura = $_POST['assinatura'];

$protocoloi = "2014" . $bloco1 . $bloco2 . $bloco3 . $bloco4 . $bloco5 . $bloco6 ;
$protocoloe = $hostname . $_POST['atendimento'];

#### IMPLEMENTAÇÃO DE FORMULÁRIO ######





?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Painel do usuário logado</title>
    </head>
    <body>
	     <form action="geraratendimento.php" method="POST">


<br>

<table>

<tr>

<td>Protocolo externo<select name="protocoloexterno">
  <option value="<?php echo $protocoloexterno ; ?>"><?php echo $protocoloexterno ; ?></option></select>
  
  </td>
  
  </tr>
  
  <tr>

<td>Protocolo interno<select name="protocolointerno">
  <option value="<?php echo $protocolointerno ; ?>"><?php echo $protocolointerno ; ?></option></select>
  
  </td>
  
  </tr>
  
  <td>Início:<select name="inicio">
  <option value="<?php echo $inicioform ; ?>"><?php echo $inicioform ; ?></option></select><td>Fim:<select name="inicio">
  <option value="<?php echo $fimform ; ?>"><?php echo $fimform ; ?></option></select>
  
  </td>
  
  </tr>
  
  </table>
  
  
<table>
<td>
Empresa: <input type="text" name="empresa" onkeyup="up(this)" value="<?php echo "$empresaform"; ?>">CNPJ: <input type="text" name="cnpj" value="<?php echo $cnpjform; ?>"><br><br>
Assunto:  <input type="text" name="assunto" onkeyup="up(this)" value="<?php echo $assunto; ?>">Telefone:  <input type="text" name="telefone" value="<?php echo $telefone; ?>"><br>
<p>

<TABLE>

<TR>
<td>
Possui internet?&nbsp&nbsp&nbsp&nbsp&nbsp<br>
<select><option value="<?php echo $teminternet ; ?>"><?php echo $teminternet ; ?></option></select>
</td>
<td>Acesso remoto:&nbsp&nbsp&nbsp&nbsp&nbsp<br>
Acesso: <input type="text" name="acessoremoto" value="<?php echo $acessoremoto ?>"><br>
Senha:  <input type="text" name="senharemota" value="<?php echo $senharemota?>"><br>

</td>

<td>
Bloco de notas:<br>
<textarea rows="6" cols="20" name="blocodenotas" >
<?php echo $blocodenotas; ?>
</textarea><br>

</td>

<td>
Contrato:
<select><option value="<?php echo $contrato ; ?>"><?php echo $contrato ; ?></option></select>
</td>

</TR>
</TABLE>
<P>
<!-- Solução:<br>
<textarea rows="8" cols="70" name="solucao" onkeyup="up(this)">
</textarea> -->

</td>



</tr>

</table><br>


</form>

        <a href="sair.php">Sair</a>
    </body>
</html>
