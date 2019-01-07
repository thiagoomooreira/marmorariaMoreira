<?php include_once '../head.php';?>

<div class="container">
    <div>
        <div class="right btn-create ">
            <a href="adicionar.php" class=" btn-floating btn-large waves-effect waves-light orange lighten-1"><i class="material-icons">add</i></a>
        </div>
        <table>
            <thead>
            <tr>
                <th>Cliente</th>
                <th>Valor</th>
                <th>Forma de Pagamento</th>
                <th>Editar</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Alvin</td>
                <td>150,00</td>
                <td>Dinheiro</td>
                <td><a class="waves-effect waves-light green darken-2 btn"><i class="material-icons">edit</i></a></td>
            </tr>
            <tr>
                <td>Alan</td>
                <td>250</td>
                <td>Cartão</td>
                <td><a class="waves-effect waves-light green darken-2 btn"><i class="material-icons">edit</i></a></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include_once '../footer.php';?>