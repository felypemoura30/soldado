<?
//conexao com o banco de dados
$host = 'localhost'; //define o host do banco de dados no caso localhost
$usuario = 'root'; //define a senha do servidor de banco de dados
$senha =''; //define a senha do banco no caso em branco
$banco = 'boletim'; //define o banco de dados a ser utilizado no caso boletim
$conexao= mysql_connect($host, $usuario, $senha ) or die(mysql_error()); //conecta no host usando usuario e senha caso de erraod retorna erro
mysql_select_db($banco) or die (mysql_error()); // seleciona o banco de dados caso de errado retorna o erro

?>