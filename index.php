<?php include_once 'head.php';
$page = "venda";
include 'php/read.php';
?>


<div class="container">
    <div class="bloco col s12 row">
        <h5 class="col s2 ">Filtrar</h5>
        <form>
            <div class="input-field col s4 ">
                <select>
                    <option value="" disabled selected>Mês</option>
                    <option value="1">Janeiro</option>
                    <option value="2">Fevereiro</option>
                    <option value="3">Março</option>
                    <option value="4">Abril</option>
                    <option value="5">Maio</option>
                    <option value="6">Junho</option>
                    <option value="7">Julho</option>
                    <option value="8">Agosto</option>
                    <option value="9">Setembro</option>
                    <option value="10">Outubro</option>
                    <option value="11">Novembro</option>
                    <option value="12">Dezembro</option>
                </select>
            </div>
            <div class="input-field col s4 ">
                <select>
                    <option value="" disabled selected>Filtrar</option>
                    <option value="1">Maior Valor</option>
                    <option value="2">Cartão</option>
                    <option value="3">Dinheiro</option>
                </select>
            </div>
            <div class="btn-pesquisa col s1">
                <button type="submit" class="waves-effect waves-light green darken-2 btn"><i class="material-icons">search</i></button>
            </div>
            <div class="btn-pesquisa col s1">
                <button type="submit" class="waves-effect waves-light btn red darken-1"><i class="material-icons">delete</i></button>
            </div>
        </form>
    </div>

    <div>
        <div class="right btn-create ">
            <a href="venda/adicionar.php" class=" btn-floating btn-large waves-effect waves-light orange lighten-1"><i class="material-icons">add</i></a>
        </div>
        <table>
            <thead>
            <tr>
                <th>Cliente</th>
                <th>Valor</th>
                <th>Forma de Pagamento</th>
                <th>Data da Venda</th>
                <th>Editar</th>
            </tr>
            </thead>

            <tbody>
            <?php while ($dado = $read->fetch_array()){?>
                <tr>
                    <td><?= $dado['cliente']?></td>
                    <td><?= $dado['valor']?></td>
                    <td><?= $dado['pagamento']?></td>
                    <td><?= $dado['data']?></td>

                    <td><a class="waves-effect waves-light green darken-2 btn"><i class="material-icons">edit</i></a></td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>


<?php include_once 'footer.php';?>