<html>
    <title> Cadastrar Usuário </title>
    <style>
        
    </style>
    <body>
        <H3> Novo Usuário </H3>
        <?php
            header("location: consulta1.php");
            include_once('conexao.php');
            $usuario = $_POST['txtUsuario'];
            $senha = $_POST['txtSenha'];

            //inserindo dados
            $sqlinsert = "insert into usuarios (usuario, senha)
            values ('$usuario', '$senha')";

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