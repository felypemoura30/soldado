<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<? 
include "conexao.php";
if ($_GET['funcao'] != "editar"){
?>
<form id="form1" name="form1" method="POST" action="funcoes.php?funcao=gravar">
  <table width="299" border="0">
    <tr>
      <td width="47">Materia</td>
      <td width="236"><label for="materia"></label>
      <input name="materia" type="text" id="materia" size="40" /></td>
    </tr>
    <tr>
      <td>nota 1</td>
      <td><label for="n1"></label>
      <input type="text" name="n1" id="n1" /></td>
    </tr>
    <tr>
      <td>nota 2</td>
      <td><label for="n2"></label>
      <input type="text" name="n2" id="n2" /></td>
    </tr>
    <tr>
      <td>nota 3</td>
      <td><label for="n3"></label>
      <input type="text" name="n3" id="n3" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="Enviar" id="Enviar" value="Cadastrar" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<? 
}
?>

<? 
if($_GET['funcao'] == "editar"){
	$sql_update = mysql_query("SELECT * FROM materias WHERE id = '$id'");
	while ($linha = mysql_fetch_array($sql_update)){
	$materia = $linha['materia'];
	$n1 = $linha['n1'];
	$n2 = $linha['n2'];
	$n3 = $linha['n3'];
	}
?>
<form id="form1" name="form1" method="POST" action="funcoes.php?funcao=editar&id=<? echo $id ?>">
  <table width="299" border="0">
    <tr>
      <td width="47">Materia</td>
      <td width="236"><label for="materia"></label>
      <input name="materia" type="text" id="materia" size="40" value="<? echo $materia ?>" /></td>
    </tr>
    <tr>
      <td>nota 1</td>
      <td><label for="n1"></label>
      <input type="text" name="n1" id="n1" value="<? echo $n1 ?>"/></td>
    </tr>
    <tr>
      <td>nota 2</td>
      <td><label for="n2"></label>
      <input type="text" name="n2" id="n2" value="<? echo $n2 ?>"/></td>
    </tr>
    <tr>
      <td>nota 3</td>
      <td><label for="n3"></label>
      <input type="text" name="n3" id="n3"  value="<? echo $n3 ?>"/></td>
    </tr>
    <tr>
      <td><input type="submit" name="Enviar" id="Enviar" value="EDITAR" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<? 
}
?>

<table width="200" border="1">
  <tr>
    <td bgcolor="#666666">MATERIA</td>
    <td bgcolor="#666666">NOTA1</td>
    <td bgcolor="#666666">NOTA2</td>
    <td bgcolor="#666666">NOTA3</td>
    <td bgcolor="#666666">EDITAR</td>
    <td bgcolor="#666666">EXCLUIR</td>
  </tr>
  <? 
 
  $sql_visualizar = mysql_query("SELECT * FROM materias ORDER BY materias");
  
  while($linha = mysql_fetch_array($sql_visualizar)){
	  $id = $linha['id'];
	  $pega_materia = $linha['materia'];
	  $pega_n1 = $linha['n1'];
	  $pega_n2 = $linha['n2'];
	  $pega_n3 = $linha['n3'];
  
  ?>
  <tr>
    <td><? echo $pega_materia ?></td>
    <td><? echo $pega_n1 ?></td>
    <td><? echo $pega_n2 ?></td>
    <td><? echo $pega_n3 ?></td>
    <td><a href="form.php?funcao=editar&id=<? echo $id ?>">EDITAR</a></td>
    <td><a href="funcoes.php?funcao=excluir&id=<? echo $id ?>">EXCLUIR</a></td>
  </tr>
  <? } ?>
</table>


</body>
</html>