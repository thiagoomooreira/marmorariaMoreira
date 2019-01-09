<?php

include 'conect.php';

if($page == "cliente"){
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $select = $conn->query("SELECT * FROM cliente WHERE nomeCliente ='$nome' ");

    if($select->num_rows == 0){
        $query = "INSERT INTO cliente(nomeCliente,telefoneCliente,enderecoCliente) VALUES ('$nome','$telefone','$endereco')";
    }else{
        $query = false;
    }
}elseif ($page == "venda"){
    $cliente = $_POST["cliente"];
    $valor = $_POST["valor"];
    $data = date ("Y-m-d");
    $parcela = $_POST["parcela"];
    $orcamento = $_POST["orcamento"];
    $formaPagamento = $_POST["formaPagamento"];

    $select = $conn->query("SELECT * FROM cliente WHERE nomeCliente ='$cliente' ");
    $select = $select->fetch_array();
    $clienteId = $select['idCliente'];
    $query = "INSERT INTO venda(clienteVenda,valorVenda,dataVenda,parcela,orcamento,formaPagamento) VALUES ('$clienteId','$valor','$data','$parcela','$orcamento','$formaPagamento')";
}

if($query == true){
    $create = $conn->query($query) or die($mysqli->error);
}else{
    $create = false;
}
