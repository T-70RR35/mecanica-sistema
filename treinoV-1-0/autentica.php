<meta charset="utf-8">
<?php
//Habilita gerenciamento de sessões
session_start();
//Efetua conexão com banco de dados
include_once "conexao.php";

if (!empty($_POST) AND (!empty($_POST['usuario']) OR  (!empty($_POST['senha']))))
{
    function myAlert($msg, $url)
    {
        echo '<script language="javascript">alert("'.$msg.'");</script>';   
        echo "<script>document.location = '$url'</script>";
    }
    //Recebe os dados enviados da login.php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    //Monstagem da instrução SQL que checa usuário e senha no banco
    $sql = "select * from usuarios where usuario = '$usuario' and senha = '$senha'";
    //Executa a instrução SQL no banco de dados
    $resultado = mysqli_query($conexao, $sql);

    //Verifica o número de linha retornadas
    $linhas = mysqli_num_rows($resultado);
    //Direciona o usuário ao menu de opções
    if ($linhas == 0)
    {
        myAlert("Usuário ou Senha incorretos! Verifique os dados inseridos!", "teste.html");
    }
    else
    {
        $_SESSION["autenticado"]="rfc822_allowed";
        $_SESSION["usuario"]= $usuario;
        header("Location: consulta.php");
    }
}
?>