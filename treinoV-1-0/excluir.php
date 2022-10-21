<?php
include_once 'conexao.php';
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
    $sql = "DELETE FROM carros WHERE id = '$id'"; 
    $resultado = mysqli_query($conexao, $sql);

    if($resultado)
    {
        function myAlert($msg, $url)
        {
            echo '<script language="javascript">alert("'.$msg.'");</script>';
            echo "<script>document.location = '$url'</script>";
        }
        myAlert("Registro Excluido com sucesso","consulta1.php");
    }
    else
    {
        die('Nao foi possivel Excluir: ' . mysqli_error($conexao));
    }
?>