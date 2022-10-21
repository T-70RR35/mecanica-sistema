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

    <body>
        <div class="row">
            <div class="col s12 m8 push-m2">
                <h3 class="light">Veículos Cadastrados</h3>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Proprietario</th>
                            <th>Valor</th>
                            <th>Imagem</th>
                            <th></th>
                            <th></th>
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
                                        <?php echo $dados['marca']; ?>
                                    </td>
                                    <td>
                                        <?php echo $dados['modelo']; ?>
                                    </td>
                                    <td>
                                        <?php echo $dados['proprietario']; ?>
                                    </td>
                                    <td>
                                        <?php echo $dados['valor']; ?>
                                    </td>
                                    <?php
                                        //buscando a imagem na pasta da imagem
                                        if (empty($dados['imagem']))
                                        {
                                            $imagem = 'SemImagem.png';
                                        }
                                        else
                                        {
                                            $imagem = $dados['imagem'];
                                        }
                                        //echo "<td align='center'><img src='imagens/$imagem' width='150px' height='100px' </td>";
                                        $id = $dados['id'];
                                        echo "<td align='center'><a href='verproduto.php?id=$id'><img src='imagens/$imagem'
                                        width='150px' heigth='100px'></a>";
                                    ?>
                                    <?php
                                        echo "<td align='center'><a href='alterar.php?id=$id'> Alterar </a>";
                                        echo "<td align='center'><a href='excluir.php?id=$id'> Excluir </a>";
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
                <a href="cadastro.html" class="btn"> Adicionar Produto </a>
                &nbsp
                <a href="teste.html" class="btn"> Logout </a>
                &nbsp
                <a href="teste2.html" class="btn"> Home Page </a>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js">
        </script>
    </body>
</html>