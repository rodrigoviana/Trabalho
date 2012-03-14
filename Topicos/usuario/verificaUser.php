<?
$acao = $_REQUEST["acao"];

//FA�A A CONEXAO COM O SEU BANCO DE DADOS
$dbname="monografia"; // Indique o nome do banco de dados que será aberto
$usuario="root"; // Indique o nome do usuário que tem acesso
$password="eu030487"; // Indique a senha do usuário
//1º passo - Conecta ao servidor MySQL
if(!($id = mysql_connect("localhost",$usuario,$password))) {
   echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.";
   exit;
}
//2º passo - Seleciona o Banco de Dados
if(!($con=mysql_select_db($dbname,$id))) {
   echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.";
   exit;
}

$q_user = mysql_query("SELECT * FROM usuario WHERE login='$acao'");
if(mysql_num_rows($q_user) == 1) 
{
  echo "userExistente"; //Diz que j� existe
} else {
  if($acao == "") {
    echo "userVazio";
  } else {
   echo "userDisponivel"; //Diz que n�o existe
  }
}
?>
