<div class="login">
	
    <h1>Login</h1>
        
    <form method="post">
        
        <input type="text" name="nome" placeholder="Nome" />
        <input type="password" name="senha" placeholder="Senha"/>
        <button type="submit" class="btn zoom-shadow">Entrar</button>
        
    </form>
</div>
<div class="resposta">
<?php
    if(isset($_POST["nome"])){


        if($_POST["nome"] == ""){
            echo "Preencha o seu Nome";
        }else{
            echo "Nome: ".$_POST["nome"]."<br>";
            echo "<br>";
            echo "Senha: ".$_POST["senha"]."<br>";   
    }
}
?>
</div>
