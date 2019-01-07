<?php include("url.php");?>
<!-- Jquery e Script -->
<script src="<?php echo("$url")?>/marmorariaMoreira/jquery/jquery-1.12.0.min.js"></script>
<script src="<?php echo("$url")?>/marmorariaMoreira/materialize/js/materialize.min.js"></script>
<script src="<?php echo("$url")?>/marmorariaMoreira/arquivos/js/script.js"></script>

<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
    $(document).ready(function(){
        $('input.autocomplete').autocomplete({
            data: {
                "Apple": null,
                "Microsoft": null,
                "Google": null
            },
        });
    });
</script>
</body>

</html>