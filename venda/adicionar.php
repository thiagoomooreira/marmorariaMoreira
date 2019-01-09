<?php include_once '../head.php';

if($_POST){
    $page = "venda";
    include '../php/create.php';

    if($create){
        echo "<script> location.href='../index.php';</script>";
    }
}
?>

<div class="container box">
    <div class="row">
        <h4 class="col s12 center">Venda</h4>
    </div>
    <div class="row">
        <form class="col s12" method="post">
            <div class="row col s12">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input name="cliente" type="text" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Cliente</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">credit_card</i>
                    <select name="formaPagamento">
                        <option value="" disabled selected>Forma de Pagamento</option>
                        <option value="Dinheiro">Dinheiro</option>
                        <option value="Cartão de Crédito">Cartão de Crédito</option>
                        <option value="Cartão de Débito">Cartão de Débito</option>
                    </select>
                </div>
            </div>
            <div class="row col s12">

                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input name="valor" id="last_name" type="text" class="validate">
                    <label for="last_name">Valor Total</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">local_offer</i>
                    <input name="parcela" value="1" id="first_name" type="text" class="validate">
                    <label for="last_name">Parcela</label>
                </div>
            </div>
            <div class="row col s12">
                <div class="input-field col s8">
                    <i class="material-icons prefix">assignment</i>
                    <textarea name="orcamento" id="textarea2" class="materialize-textarea" data-length="120"></textarea>
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
    <?php

    ?>



<?php
$page = 'vendaAutoComplete';
include '../php/read.php';
include_once '../footer.php';
?>
<script>
    $(document).ready(function(){
        $('input.autocomplete').autocomplete({
            data: {
                <?php while ($dado = $read->fetch_array()){?>
                <?= $dado['nomeCliente']?>:null,
                <?php }?>
            },
        });
    });
</script>
