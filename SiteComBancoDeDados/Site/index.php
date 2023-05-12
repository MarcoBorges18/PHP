<?php
// Iniciando as sessões
session_start();
//Verifica se o usuário clicou em logout
if(isset($_GET["logout"])){
    //Se o usuário clicou em logout a sessão usuário é destruída.
    unset($_SESSION["usuario"]);
}
//Verificando se a sessão usuário NÃO existe
if(!isset($_SESSION["usuario"])){
    //Se a sessão não existe o usuário é redirecionado para a página de login, se o redirecionamento falhar, a aplicação é forçada a parar.
    header("Location:./login.php");
    die;
}

?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula de Banco de Dados</title>
</head>
<body>
<?= "O usuário ".$_SESSION["usuario"]." está logado | " ?>
<a href="?logout">Logout</a>
<hr>
<?php
    /* O arquivo index.php apesar de fazer parte da camada de view está fora da pasta view, o que acontece neste caso é que este arquivo é responsável por chamar de forma dinâmica o conteúdo dos demais arquivos de view    
    */

    //Incluindo o menu
    require_once("./menu.php");
    //Verificando se algum parâmetro de página foi passado pela url
    isset($_GET["p"])? $page = $_GET["p"] : $page = "home";
    //Utilizando o switch pra definir qual páginas será exibida
    switch($page){
        case "home":
            require_once("./view/listarCliente.php");
        break;
        case "cad":
            require_once("./view/cadCliente.php");
        break;
        case "alt":
            require_once("./view/alterarCliente.php");
        break;
    }
?>
</body>
</html>