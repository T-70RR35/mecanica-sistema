<?php
    include_once('conexao.php');
?>
<html>
    <head>
    <meta charset="utf-8">
        <title>Sistema de cadastro de produtos</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <style>
        body {
        margin: 0;
        padding: 0;
        background-color: #0ee6db;
        height: 100vh;
        background-repeat: no-repeat;
        }
    </style>

    <body>
        <div class=container>
        <h3> Consulta Geral - Detalhes do Produto </h3>
        <?php
            function convertedata($data)
            {
                $data_vetor = explode('-', $data);
                $novadata = implode('/', array_reverse($data_vetor));
                return $novadata;
            }
            include_once('conexao.php');

            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
            }
            else
            {
                header('Location: consulta1.php');
            }
            //Realizando a pesquisa com o id recebido
            $sql = "SELECT * FROM carros where id = $id";
            $resultado = mysqli_query($conexao, $sql);

            if(!$resultado)
            {
                echo '<input type="button" onclick="window.location= '."consulta1.php'".';"
                    value="Voltar"><br><br>';
                die('<b>Query Inválida:</b>' .@mysqli_error($conexao));
            }
            $dados = mysqli_fetch_array($resultado);
            echo "<table border='0px'><tr><td width='250px'>";
            if (empty($dados['imagem']))
            {
                $imagem = 'SemImagem.png';
            }
            else
            {
                $imagem = $dados['imagem'];
            }
            echo "<img src='imagens/$imagem' width='450px' heigth='400px'>" ;
            echo "</td>";

            echo "<td width='400px'>";
            echo "<b>ID: </b>".$dados['id']."<br>";
            echo "<b>Nome: </b>".$dados['nome']."<br>";
            echo "<b>CPF: </b>".$dados['cpf']."<br>";
            echo "<b>Codigo: </b>".$dados['Codigo']."<br>";
            echo "<b>Marca: </b>".$dados['Marca']."<br>";
            echo "<b>Modelo: </b>".$dados['Modelo']."<br>";
            echo "<b>Fabricante: </b>".$dados['Fabricante']."<br>";
            echo "<b>Tipo: </b>".$dados['Tipo']."<br>";
            echo "<b>Ano: </b>".$dados['Ano']."<br>";
            echo "<b>Combustivel: </b>".$dados['Combustivel']."<br>";
            echo "<b>Cor: </b>".$dados['Cor']."<br>";
            echo "<b>Chassi: </b>".$dados['Chassi']."<br>";
            echo "<b>Km: </b>".$dados['km']."<br>";
            echo "<b>Horario de entrada no sistema: </b>".$dados['entrada']."<br>";
            echo "<b>Observação: </b>".$dados['observacao']."<br>";
            echo "<b>Imagem: </b>".$dados['imagem']."<br>";
            echo "</td></tr></table>";
            
            mysqli_close($conexao);
        ?>
        <br>
        <a href="consulta1.php" class="btn">Lista de produtos</a>
        <?php
            $id = $dados['id'];
            echo "<td align='center'><a href='alterar.php?id=$id' class=btn> Alterar </a>";
            echo "&nbsp";
            echo "<td align='center'><a href='excluir.php?id=$id' class=btn> Excluir </a>";
        ?>    
        </div>
        <div id="version">
             <font type="text" color="#000000"> V.4.2 </font>
        </div>
    </body>
</html>