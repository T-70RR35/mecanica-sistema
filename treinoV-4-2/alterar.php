<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de cadastro de produtos</title>
        <link rel="stylesheet" href="css/materialize.css">
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
        <div class="row">
            <div class="col s12 m6 push-m3">
                <h3 class="light">Alterar Produtos</h3>
                <?php
                    include_once('conexao.php');

                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM carros WHERE id = '$id'";
                        $resultado = mysqli_query($conexao, $sql);
                        $dados = mysqli_fetch_array($resultado);
                    }
                ?>
                <form action="update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                    
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" value="<?php echo $dados['nome'];?>" name="nome" id="nome"/>
                    </div>

                    <div>
                        <label for="cpf">cpf</label>
                        <input type="text" value="<?php echo $dados['cpf'];?>" name="cpf" id="cpf"/>
                    </div>


                    <div>
                        <label for="Codigo">Codigo</label>
                        <input type="text" value="<?php echo $dados['Codigo'];?>" name="Codigo" id="Codigo"/>
                    </div>

                    <div>
                        <label for="Marca">Marca</label>
                        <input type="text" name="Marca" id="Marca" value="<?php echo $dados['Marca'];?>"/>
                    </div>

                    <div>
                        <label for="modelo">Modelo</label>
                        <input type="text" name="Modelo" value="<?php echo $dados['Modelo'];?>" id="Modelo"/>
                    </div>  
                    
                    <div>
                        <label for="fabricante">Fabricante</label>
                        <input type="text" name="Fabricante" value="<?php echo $dados['Fabricante'];?>" id="Fabricante"/>
                    </div>

                    <div>
                        <label for="Tipo">Tipo</label>
                        <input type="text" value="<?php echo $dados['Tipo'];?>" name="Tipo" id="Tipo"/>
                    </div>

                    <div>
                        <label for="Ano">Ano</label>
                        <input type="text" value="<?php echo $dados['Ano'];?>" name="Ano" id="Ano"/>
                    </div>
                    
                    <div>
                        <label for="Combustivel">Combustivel</label>
                        <input type="text" value="<?php echo $dados['Combustivel'];?>" name="Combustivel" id="Combustivel"/>
                    </div>

                    <div>
                        <label for="Cor">Cor</label>
                        <input type="text" value="<?php echo $dados['Cor'];?>" name="Cor" id="Cor"/>
                    </div>

                    <div>
                        <label for="Chassi">Chassi</label>
                        <input type="text" value="<?php echo $dados['Chassi'];?>" name="Chassi" id="Chassi"/>
                    </div>

                    <div>
                        <label for="km">KM</label>
                        <input type="text" value="<?php echo $dados['km'];?>" name="km" id="km"/>
                    </div>

                    <div>
                        <label for="observacao">Observação</label>
                        <input type="text" value="<?php echo $dados['observacao'];?>" name="observacao" id="observacao"/>
                    </div>

                    <div>
                        <label for="imagem">Imagem</label>
                        <input type="text" value="<?php echo $dados['imagem'];?>" name="imagem" id="imagem"/>
                    </div>

                    <button type="submit" name="btn-editar" class="btn">Atualizar</button>
                    <a href="consulta1.php" class="btn green">Lista de Produtos</a>
                </form>
            </div>
        </div>
        <div id="version">
             <font type="text" color="#000000"> V.4.2 </font>
        </div>
        <script src="https://cdjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    </body>
</html>