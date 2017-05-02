<html>
<head>
	<title>cadastro materias</title>
</head>

<body>

<?php
//***************************************CONEXAO COM BANCO DE DADOS*************************************
$host = 'localhost';
$usuario = 'root';
$senha ='';
$banco = 'boletim';
$conexao= mysql_connect($host, $usuario, $senha ) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());



//**************************************GRAVAR***********************************************************
	$materia=$_POST ['materia'];
	$n1=$_POST['n1'];
	$n2=$_POST['n2'];
	$n3=$_POST['n3'];


if ($_GET['funcao'] == 'gravar'){
$sql = mysql_query("INSERT INTO materias (materia, n1, n2, n3) VALUES ('$materia','$n1','$n2','$n3')");
header('Location:cadastro.php');
}

//*********************************************EDITAR*************************************************



//*********************************************EXCLUIR*************************************************


?>

</body>
</html>