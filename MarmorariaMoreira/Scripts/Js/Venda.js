var countryArray = clients;
var dataCountry = {};
for (var i = 0; i < countryArray.length; i++) {
    dataCountry[countryArray[i].Nome] = null;
}

$('.datepicker').datepicker({
    i18n: {
        months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
        weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
        weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
        today: 'Hoje',
        clear: 'Limpar',
        cancel: 'Sair',
        done: 'Confirmar',
        labelMonthNext: 'Próximo mês',
        labelMonthPrev: 'Mês anterior',
        labelMonthSelect: 'Selecione um mês',
        labelYearSelect: 'Selecione um ano',
        selectMonths: true,
        selectYears: 15,
    },
    format: 'dd/mm/yyyy',
    container: 'body'
});

$("#cadastrarCliente").change(function () {
    $("#nome").removeAttr("disabled")
    $("#contato").removeAttr("disabled")
    $("#endereco").removeAttr("disabled")
})

$(document).ready(function () {
    $('#valor').mask('000.000.000.000.000,00', { reverse: true });

    $('input.autocomplete').autocomplete({
        data: dataCountry,
        onAutocomplete: function (texto) {
            for (var i = 0; i < countryArray.length; i++) {
                if (countryArray[i].Nome == texto) {
                    $("#idCliente").val(countryArray[i].Id);

                    $("#nome").val(countryArray[i].Nome);
                    //$("#nome").attr("disabled", "disabled")
                    $(".nome").addClass("active");

                    $("#contato").val(countryArray[i].Contato);
                    //$("#contato").attr("disabled", "disabled")
                    $(".contato").addClass("active");
                    
                    $("#endereco").val(countryArray[i].Endereco);
                    //$("#endereco").attr("disabled", "disabled")
                    $(".endereco").addClass("active");

                }
            }
        }
    })
});
