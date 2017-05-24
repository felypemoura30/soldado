<?
//inclui no codigo a conexao criada com o banco de dados
include "conexao.php";

//obtendo as variaveis
	$grava_materia = $_POST['materia'];
 	$grava_nota1 =$_POST['n1'];
 	$grava_nota2 =$_POST['n2'];
 	$grava_nota3 =$_POST['n3'];

//********************************GRAVAÇÃO*****************************
if($_GET['funcao'] == "gravar"){
$sql_gravar = msql_query("INSERT INTO materias (mateira, nota1, nota2, nota3) VALUES ('$grava_materia','$grava_nota1','$grava_nota2','$grava_nota3')");	
header('Location: form.php');
}
//********************************EDIÇÂO*****************************
if($_GET['funcao']=="editar"){
	$id = $_GET['id'];
	$sql_alterar = mysql_query("UPDATE materias SET materia='$grava_materia',nota1='$grava_nota1',nota2='$grava_nota2',nota3='$grava_nota3' WHERE id = '$id'");
	header('Location: form.php');
	}
	
//********************************EXCLUSÃO*****************************
if($_GET['funcao'] == "excluir"){
	$id = $GET['id'];
	$sql_excluir = mysql_query("DELETE FROM materias WHERE id = '$id' ");
	header('Location: form.php');
	}
?>