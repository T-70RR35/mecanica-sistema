<?php
    include_once('conexao.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de cadastro de veículos</title>
            <link rel="stylesheet" href="css/materialize.min.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <!--background-image: linear-gradient(to left bottom, #000000, #3b3b3b, #777777, #b9b9b9, #ffffff);-->
    <style>
        body {
        margin: 0;
        padding: 0;
        background: rgb(255,0,0);
        background: linear-gradient(330deg, rgba(255,0,0,1) 0%, rgba(255,255,255,1) 50%, rgba(0,0,255,1) 95%);
        height: 100vh;
        background-repeat: no-repeat;
        }
    </style>

    <body>
        <div class="row">
            <div class="col s12 m8 push-m2">
                <h3 class="light">Veículos Cadastrados</h3>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CODIGO</th>
                            <th>IMAGEM</th>
                        </tr>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM  carros";
                                $resultado = mysqli_query($conexao, $sql);

                                if(mysqli_num_rows ($resultado) > 0)
                                {
                            
                                    while($dados = mysqli_fetch_array ($resultado))
                                    { 
                            ?>    
                                <tr>
                                    
                                    <td align="center">
                                        <?php echo $dados['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $dados['Codigo']; ?>
                                    </td>
                                    <?php
                                        //buscando a imagem na pasta da imagem
                                        if (empty($dados['imagem']))
                                        {
                                            $imagem ='SemImagem.png';
                                        }
                                        else
                                        {
                                            $imagem = $dados['imagem'];
                                        }
                                        //echo "<td align='center'><img src='imagens/$imagem' width='150px' height='100px' </td>";
                                        $id = $dados['id'];
                                        echo "<td align='center'><a href='verproduto.php?id=$id'><img src='imagens/$imagem'
                                        width='160px' heigth='135px'></a>";                                 
                                        echo "<td align='center'><a href='alterar.php?id=$id'><img src='imagens/alterar.png' width='50' heigth='10'></a>";
                                        echo "<td align='center'><a href='excluir.php?id=$id'><img src='imagens/excluir.png' width='50' heigth='10'></a>";
                                    ?>
                                </tr>
                            <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </thead>
                </table>
                <br>
                <a href="cadastro1.html" class="btn"> Adicionar Produto </a>
                &nbsp
                <a href="index.html" class="btn"> Logout </a>
                &nbsp
                <a href="index2.html" class="btn"> Página Inicial </a>
                <br>
                <br>
            </div>
        </div>
        <div id="version">
            <font type="text" color="#000000"> V.4.2 </font>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js">
        </script>
    </body>
</html>