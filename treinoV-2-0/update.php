<?php
include_once('conexao.php');

if(isset($_POST['btn-editar']))
{
    $Codigo = $_POST['Codigo'];
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Fabricante = $_POST['Fabricante'];
    $Tipo = $_POST['Tipo'];
    $Ano = $_POST['Ano'];
    $Combustivel = $_POST['Combustivel'];
    $Cor = $_POST['Cor'];
    $Chassi = $_POST['Chassi'];
    $km = $_POST['km'];
    $imagem = $_POST['imagem'];
    $id = $_POST['id'];

    $sql = "UPDATE carros SET Codigo = '$Codigo', Marca = '$Marca', Modelo = '$Modelo', Fabricante = '$Fabricante', Tipo = '$Tipo', Ano = '$Ano',
    Combustivel = '$Combustivel', Cor = '$Cor', Chassi = '$Chassi', km = '$km', imagem = '$imagem' WHERE id = '$id'";

    if(mysqli_query($conexao, $sql))
    {
        echo "Atualizado com sucesso!";
        header('Location: consulta1.php');
    }
    else
    {
        echo "Erro ao atualizar";
        header('Location: consulta1.php');
    }
}
?>