<html>
    <title> Cadastro de Veículos </title>

    <body>
        <H3> Novo Veículo </H3>
        <?php
            header("location: consulta.php");
            include_once('conexao.php');
            $marca = $_POST['txtMarca'];
            $modelo = $_POST['txtModelo'];
            $cor = $_POST['txtCor'];
            $combustivel = $_POST['txtCombustivel'];
            $proprietario = $_POST['txtProprietario'];
            $valor = $_POST['txtValor'];
            $imagem = $_POST['btnVeiculo'];

            //inserindo dados
            $sqlinsert = "insert into carros (marca, modelo, cor, combustivel, proprietario, valor, imagem)
            values ('$marca', '$modelo', '$cor', '$combustivel', '$proprietario', $valor, '$imagem')";

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
        <input type="button" onclick="window.location='cadastro.html';" value="voltar"> 
    </body>
</html>