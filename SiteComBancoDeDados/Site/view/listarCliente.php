<?php
    //Para podermos utilizar as funções do nosso controller é necessário inclui-lo no projeto[]
    require_once("./controller/cliente.php");
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Aula de Banco de Dados</title>
</head>
<body>
<table>
        <tr>
            <th>RazaoSocial</th>
            <th>NomeFantasia</th>
            <th>CNPJ</th>
            <th>Responsavel</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Excluir</th>
            <th>Alterar</th>
        </tr>
    <?php
    //A Função listarClientes() foi declarada em nosso controller, e ela retorna um Array multidirecional com todos os nossos clientes do Banco de dados.
    $clientes = listarClientes();
    foreach($clientes as $cli){
        echo "<tr>";
        echo "<td>".$cli["RazaoSocial"]."</td>";
        echo "<td>".$cli["NomeFantasia"]."</td>";
        echo "<td>".$cli["CNPJ"]."</td>";
        echo "<td>".$cli["Responsavel"]."</td>";
        echo "<td>".$cli["Email"]."</td>";
        echo "<td>".$cli["Telefone"]."</td>";
        echo "<td><a href=\"?p=home&deleta=".$cli["id"]."\"> Excluir </a></td>";
        echo "<td><a href=\"./?p=alt&altera=".$cli["id"]."\"> Alterar </a></td>";
        echo "</tr>";
    }

    if (isset($_GET["deleta"])){
        deletaCliente($_GET["deleta"]);
    }
    //echo "</table>";
    ?>
    </table>

    </body>
</html>