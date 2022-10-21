<html>
    <title> Cadastro de Veículos </title>

    <body>
        <H3> Novo Veículo </H3>
        <?php
            header("location: consulta1.php");
            include_once('conexao.php');
            $Codigo = $_POST['txtCodigo'];
            $Marca = $_POST['txtMarca'];
            $Modelo = $_POST['txtModelo'];
            $Fabricante = $_POST['txtFabricante'];
            $Tipo = $_POST['txtTipo'];
            $Ano = $_POST['txtAno'];
            $Combustivel = $_POST['txtCombustivel'];
            $Cor = $_POST['txtCor'];
            $Chassi = $_POST['txtChassi'];
            $km = $_POST['txtKm'];
            $imagem = $_POST['btnVeiculo'];
            $Observacao = $_POST['txtobservacao'];
            
            //inserindo dados
            $sqlinsert = "insert into carros (Codigo, Marca, Modelo, Fabricante, Tipo, Ano, Combustivel, Cor, Chassi, km, observacao, imagem)
            values ('$Codigo', '$Marca', '$Modelo', '$Fabricante', '$Tipo', '$Ano', '$Combustivel', '$Cor', '$Chassi', '$km', '$Observacao', '$imagem')";

            $resultado = mysqli_query($conexao, $sqlinsert);

            if(!$resultado)
            {
                die('query invalida: ' .mysqli_errno($conexao));
            }
            else
            {
                echo("registro cadastrado com sucesso");
            }
            mysqli_close($conexao);
        ?>
        <br><br>
        <input type="button" onclick="window.location='cadastro1.html';" value="voltar"> 
    </body>
</html>