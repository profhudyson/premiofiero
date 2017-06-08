$(function() {

    $("#formRegister input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            // Prevent spam click and default submit behaviour
            $("#btnEnviarForm").attr("disabled", true);
            event.preventDefault();
            
            // get variavel
            var tNome = $("input#tNome").val();
            var tCpf = $("input#tCpf").val();
            var tEndereco = $("input#tEndereco").val();
            var tNumero = $("input#tNumero").val();
            var tBairro = $("input#tBairro").val();
            var tComplemento = $("input#tComplemento").val();
            var tCep = $("input#tCep").val();
            var tEstadoAtual = $("select#tEstadoAtual").val();
            var resultadoMunicipio = $("select#resultadoMunicipio").val();
            var tTelefone = $("input#tTelefone").val();
            var tTelefoneFixo = $("input#tTelefoneFixo").val();
            var tEmail = $("input#tEmail").val();
            var tEmpresa = $("input#tEmpresa").val();
            var tEmpEndereco = $("input#tEmpEndereco").val();
            var tEmpNumero = $("input#tEmpNumero").val();
            var tEmpBairro = $("input#tEmpBairro").val();
            var tEmpComplemento = $("input#tEmpComplemento").val();
            var tEmpCep = $("input#tEmpCep").val();
            var tEmpEstado = $("select#tEmpEstado").val();
            var resultadoMunicipio2 = $("select#resultadoMunicipio2").val();
            var tEmpTelefone = $("input#tEmpTelefone").val();
            var tEmpTelefoneFixo = $("input#tEmpTelefoneFixo").val();
            var tEmpEmail = $("input#tEmpEmail").val();
            var tRegistroProf = $("input#tRegistroProf").val();
            var tTituloTrab = $("input#tTituloTrab").val();
            var tModalidade = $("select#tModalidade").val();
            var tNomeEditor = $("input#tNomeEditor").val();
            
            var firstName = tNome; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "controle/cadastro.controle.php",
                type: "POST",
                    beforeSend: function () {
                        $("#btnEnviarForm").attr("disabled", true);
                        $("#successInscricao").html("<div class='bs-docs-example'><center><img src='img/pfj_carregar.gif' class='img-responsive img-centered' alt=''><br>Enviando informação ao nosso servidor Aguarde...</center></div>");
                    },
                data: {
                    tNome: tNome,
                    tCpf: tCpf,
                    tEndereco: tEndereco,
                    tNumero: tNumero,
                    tBairro: tBairro,
                    tComplemento: tComplemento,
                    tCep: tCep,
                    tEstadoAtual: tEstadoAtual,
                    resultadoMunicipio: resultadoMunicipio,
                    tTelefone: tTelefone,
                    tTelefoneFixo: tTelefoneFixo,
                    tEmail: tEmail,
                    tEmpresa: tEmpresa,
                    tEmpEndereco: tEmpEndereco,
                    tEmpNumero: tEmpNumero,
                    tEmpBairro: tEmpBairro,
                    tEmpComplemento: tEmpComplemento,
                    tEmpCep: tEmpCep,
                    tEmpEstado: tEmpEstado,
                    resultadoMunicipio2: resultadoMunicipio2,
                    tEmpTelefone: tEmpTelefone,
                    tEmpTelefoneFixo: tEmpTelefoneFixo,
                    tEmpEmail: tEmpEmail,
                    tRegistroProf: tRegistroProf,
                    tTituloTrab: tTituloTrab,
                    tModalidade: tModalidade,
                    tNomeEditor: tNomeEditor,
                    EnviarInscricao: "Ok"
                },
                cache: false,
                success: function(msg) {
                    // Enable button & show success message
                    $("#btnEnviarForm").attr("disabled", false);
                    $('#successInscricao').html("<div class='alert alert-success'>");
                    $('#successInscricao > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#successInscricao > .alert-success').append("<strong>")
                                 .html(msg).append("</strong>");
                    $('#successInscricao > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#formRegister').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#successInscricao').html("<div class='alert alert-danger'>");
                    $('#successInscricao > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#successInscricao > .alert-danger').append("<strong>Desculpe " + firstName + ",nossos servidores não respondem, tente novamente mais tarde!");
                    $('#successInscricao > .alert-danger').append('</div>');
                    //clear all fields
                    $('#formRegister').trigger("reset");
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

// When clicking on Full hide fail/success boxes
$('#tNome').focus(function() {
    $('#successInscricao').html('');
});
