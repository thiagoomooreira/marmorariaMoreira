<?php include_once '../head.php';

if($_POST){
    $page = "cliente";
    include '../php/create.php';
    if($create){
        echo "<script> location.href='index.php';</script>";
    }
}
?>

<div class="container box box-cliente">
    <div class="row">
        <h4 class="col s12 center">Cliente</h4>
    </div>
    <div class="row">
        <form class="col s12" method="post">
            <div class="row col s12">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="last_name" name="nome" type="text" class="validate">
                    <label for="last_name">Nome do Cliente</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="last_name" name="telefone" type="tel" class="validate">
                    <label for="last_name">Telefone</label>
                </div>
            </div>
            <div class="row col s12">
                <div class="input-field col s8">
                    <i class="material-icons prefix">place</i>
                    <textarea id="textarea2" name="endereco" class="materialize-textarea" data-length="120"></textarea>
                    <label for="textarea2">Endereço</label>
                </div>
                <div class="col s2 btn-forms">
                    <button class="btn-small green darken-2 waves-effect waves-light" type="submit" name="action">Salvar</button>
                </div>
                <div class="col s2 btn-forms ">
                    <a href="index.php" class="waves-effect waves-light btn-small red darken-1">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once '../footer.php';?>
