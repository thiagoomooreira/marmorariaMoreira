<?php include_once 'head.php';?>


<div class="container">
    <div class="bloco col s12 row">
        <h5 class="col s2 ">Filtrar</h5>
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
        <div class="btn-pesquisa col s2">
            <a class="waves-effect waves-light green darken-2 btn"><i class="material-icons">search</i></a>
        </div>
    </div>

    <div>
        <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
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


<?php include_once 'footer.php';?>