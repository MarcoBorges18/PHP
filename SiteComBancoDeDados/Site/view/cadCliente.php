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
    /* O Action do nosso formulário está apontado para esta página,sendo assim é necessário utilizar o isset para sabermos se o form foi de fato postado ou não.
    Apesar de estar na página da View este isset poderia estar dentro do nosso controller. 
    */
    if (isset($_POST["RazaoSocial"])){
        //Como vimos anteriormente o $_POST é um array associativo, sendo assim eu posso passar o próprio $_POST como parâmetro pra minha função
        try{
            cadCliente($_POST);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    ?>
    
    <form action="./?p=cad" method="post">
        <label for="RazaoSocial">RazaoSocial: </label>
        <input type="text" name="RazaoSocial"><br>

        <label for="NomeFantasia">NomeFantasia: </label>
        <input type="text" name="NomeFantasia"><br>

        <label for="CNPJ">CNPJ: </label>
        <input type="text" name="CNPJ"><br>

        <label for="Responsavel">Responsavel: </label>
        <input type="text" name="Responsavel"><br>

        <label for="Email">Email: </label>
        <input type="text" name="Email"><br>

        <label for="Telefone">Telefone: </label>
        <input type="text" name="Telefone"><br>

        <input type="submit">
    </form>

</body>
</html>