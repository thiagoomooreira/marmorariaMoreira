<?php include_once '../head.php';

$page = "cliente";
include '../php/read.php';
?>

<div class="container box-cliente">
    <div>
        <div class="right btn-create ">
            <a href="adicionar.php" class=" btn-floating btn-large waves-effect waves-light orange lighten-1"><i class="material-icons">add</i></a>
        </div>
        <table>
            <thead>
            <tr>
                <th>Cliente</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Editar</th>
            </tr>
            </thead>

            <tbody>
            <?php while ($dado = $read->fetch_array()){?>
            <tr>
                <td><?= $dado['nomeCliente']?></td>
                <td><?= $dado['telefoneCliente']?></td>
                <td><?= $dado['enderecoCliente']?></td>
                <td><a class="waves-effect waves-light green darken-2 btn"><i class="material-icons">edit</i></a></td>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once '../footer.php';?>