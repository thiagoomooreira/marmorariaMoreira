<?php include_once '../head.php';?>

<div class="container box">
    <div class="row">
        <h4 class="col s12 center">Venda</h4>
    </div>
    <div class="row">
        <form class="col s12">
            <div class="row col s12">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Cliente</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">credit_card</i>
                    <select>
                        <option value="" disabled selected>Forma de Pagamento</option>
                        <option value="1">Dinheiro</option>
                        <option value="2">Cartão de Crédito</option>
                        <option value="3">Cartão de Débito</option>
                    </select>
                </div>
            </div>
            <div class="row col s12">

                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Valor Total</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">local_offer</i>
                    <input value="1" id="first_name" type="text" class="validate">
                    <label for="last_name">Parcela</label>
                </div>
            </div>
            <div class="row col s12">
                <div class="input-field col s8">
                    <i class="material-icons prefix">assignment</i>
                    <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                    <label for="textarea2">Orçamento</label>
                </div>
                <div class="col s2 btn-forms">
                    <button class="btn-small green darken-2 waves-effect waves-light" type="submit" name="action">Salvar</button>
                </div>
                <div class="col s2 btn-forms ">
                    <a href="../index.php" class="waves-effect waves-light btn-small red darken-1">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once '../footer.php';?>
