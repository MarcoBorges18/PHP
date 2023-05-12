<!-- Marco Antonio Borges -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Trabalho</title>
</head>
<body>

<?php

    require("./pages/Corpo/header.php");  

if(isset($_GET["pagina"])){
    if($_GET["pagina"] == "Login"){

        require ("./pages/Login.php");

    }elseif($_GET["pagina"] == "Calculadora"){

        require ("./pages/Calculadora.php");

    }elseif($_GET["pagina"] == "Temporizador"){

        require ("./pages/Temporizador.php");

    }elseif($_GET["pagina"] == "Calculadora2"){

        require ("./pages/Calculadora2.php");

    }else {

        require ("./pages/Erro.php");

    }
} else {

    require ("./pages/Login.php");
    
}

require("./pages/Corpo/footer.php");

?>

</body>
</html>