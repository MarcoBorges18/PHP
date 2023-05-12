<?php
//Iniciando as sessões
session_start();
//Criando variáveis para receber nosso login e senha, apenas para fins didáticos, o ideal é que estas informações venham do banco de dados.
$login = "teste";
//Password_hash serve para encriptar a senha, o ideal é utilizar esta função quando for salvar no banco de dados, pra que o retorno do banco seja a hash criada.
$senha = password_hash("123", PASSWORD_DEFAULT);

//echo "$senha <br>";

//Verificando se a sessão já existe, caso ela exista o usuário já está logado, sendo assim o usuário precisa ser redirecionado para o index
if(isset($_SESSION["usuario"])){
    header("Location:./index.php");
}
//Verificando se o formulário foi enviado.
if(isset($_POST["usuario"])){
    //verifica se o login e senha estão corretos, para verificara senha é necessário utilizar o passowrd_verify, já que ao ser salvo na variável o conteudo foi encriptado.
    if($_POST["usuario"] == $login AND
    password_verify($_POST["senha"], $senha)){
        echo "Login e senha corretos";
        //Se o login e a senha estiverem corretos a sessão usuário será criada e o usuário será redirecionado para o index
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location:./index.php");
    }else{
        //Se o login ou a senha estierem errados será exibida a mensagem abaixo.
        echo "Login ou senha inválidos";
    }
}
?>
<form method="post">
    Usuario: <input type="text" name="usuario"><br>
    Senha: <input type="password" name="senha"><br>
    <input type="submit">
</form>