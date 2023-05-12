<?php

function conectaDB(){
    //Criando uma conexão com o banco de dados
    $pdo =  new PDO("mysql:host=127.0.0.1:3307;dbname=Prova", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, $pdo::ERRMODE_EXCEPTION);
    return $pdo;
}

function cadClienteDAO($cliente){
    $pdo = conectaDB();
    $sql = $pdo->prepare("INSERT INTO clientes VALUES(null, ?,?,?,?,?,?)");
    //utilizando o array_values para converter o array em um array numérico, para preencher os "?"
    $sql->execute(array_values($cliente));
}

function altClienteDAO($cliente){
    $pdo = conectaDB();
    //try tenta executatar o bloco de código
    try{
    //try tenta executatar o bloco de código
        // Utiliza o prepare para retirar qualquer Sql indesejada, ":" serve para indicar que este é o nome de uma chave o array.
        $sql = $pdo->prepare('UPDATE clientes SET
        RazaoSocial= :RazaoSocial,
        NomeFantasia= :NomeFantasia,
        CNPJ= :CNPJ,
        Responsavel= :Responsavel,
        Email= :Email,
        Telefone= :Telefone
        WHERE id= :id');
        $sql->execute($cliente);
        //caso algo de errado o catch captura o erro.
        //Aqui é utilizado PDOException porque o PDO gera suas próprias excessões.
    }catch(PDOException $e){
        //throw cria uma excessão que será pega pelo try catch um nível acima.
        throw new Exception ($e->getMessage());
    }


}

function delClienteDAO($id){
    $pdo = conectaDB();
    $pdo->exec("DELETE FROM clientes WHERE id=$id");
    //O Correto é que as validações seja feitas no controller
    echo "Clientes deletado com sucesso";
}

function listarClientesDAO(){
    $pdo = conectaDB();
    
    $sql = $pdo->prepare("SELECT * FROM clientes");
    $sql->execute();
    //fetchaAll pega todos os resultados do banco, o parâmetro PDO::FETCH_ASSOC força vir apenas um array associativo
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}

function buscarClienteDAO($id){
    $pdo = conectaDB();
    $sql = $pdo->prepare("SELECT * FROM clientes WHERE id= ?");
    $sql->execute(array($id));
    //fetcha pega apenas um resultado do banco, o parâmetro PDO::FETCH_ASSOC força vir apenas um array associativo
    return $sql->fetch(PDO::FETCH_ASSOC);
}
