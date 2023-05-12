<?php
    //Para podermos utilizar as funções do nosso controller é necessário inclui-lo no projeto
require_once("./controller/cliente.php");
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Aula de Banco de Dados</title>
</head>
<body>
    <?php
    if (isset($_GET["altera"])){
        //Ao receber o parâmetro altera por GET, chamamos a função de buscar cliente e enviamos o id, esta função verifica se o cliente existe no banco de dados e retorna os dados em um array assossiativo
        $cliente = buscaCliente($_GET["altera"]);

        //Armazenamos as posições deste array em uma variável pra facilitar a utilização e validação delas no formulário abaixo, porém seria perfeitamente possível utilizar o Array
        $id = $cliente["id"];
        $RazaoSocial = $cliente["RazaoSocial"];
        $NomeFantasia = $cliente["NomeFantasia"];
        $CNPJ = $cliente["CNPJ"];
        $Responsavel = $cliente["Responsavel"];
        $Email = $cliente["Email"];
        $Telefone = $cliente["Telefone"];
    }

    if (isset($_GET["alt"])){
        //utilizando o try catch para tentar executar o código abaixo
        try{
            alterarCliente($_POST, (int)$_GET["alt"]);
            header("Location:index.php");
            //Caso não seja possível executar o código corretamente e uma Excessão seja lançada o catch a captura e armazena na variável $e
        }catch(Exception $e){
            //$e->getMessage() pega a Excessão lançada e exibe no formato string
            echo "Erro: ". $e->getMessage();
        }
    }

    ?>

    <form action="<?= isset($RazaoSocial)? "./?p=alt&alt=$id" : "" ?>" method="post">
        <label for="RazaoSocial">RazaoSocial: </label>
        <input type="text" name="RazaoSocial" value="<?= isset($RazaoSocial)? $RazaoSocial: "" ?>"><br>

        <label for="NomeFantasia">NomeFantasia: </label>
        <input type="text" name="NomeFantasia" value="<?= isset($RazaoSocial)? $NomeFantasia: "" ?>"><br>

        <label for="CNPJ">CNPJ: </label>
        <input type="text" name="CNPJ" value="<?= isset($RazaoSocial)? $CNPJ: "" ?>"><br>

        <label for="Responsavel">Responsavel: </label>
        <input type="text" name="Responsavel" value="<?= isset($RazaoSocial)? $Responsavel: "" ?>"><br>

        <label for="Email">Email: </label>
        <input type="text" name="Email" value="<?= isset($RazaoSocial)? $Email: "" ?>"><br>

        <label for="Telefone">Telefone: </label>
        <input type="text" name="Telefone" value="<?= isset($RazaoSocial)? $Telefone: "" ?>"><br>

        <input type="submit">
    </form>
</body>
</html>