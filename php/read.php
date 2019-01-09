<?php
include 'conect.php';

if($page == 'cliente'){
    $consulta = "SELECT * FROM cliente";
}elseif ($page == 'vendaAutoComplete'){
    $consulta = "SELECT * FROM cliente";
}elseif ($page == 'venda'){
    $consulta = "SELECT cliente.nomeCliente as cliente,venda.formaPagamento as pagamento,venda.valorVenda as valor , DATE_FORMAT(venda.dataVenda ,'%d/%m/%y') as data  FROM venda INNER JOIN cliente on venda.clienteVenda = cliente.idCliente";
}

$read = $conn->query($consulta) or die ($mysqli->error);