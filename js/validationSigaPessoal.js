/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    //alert('Olallallalala');
    var form = $("#form_user_mapas");

    //AGENCIAS BANCARIA
    var state = false;
    var msnInfoUtil = $("#msnInfoUtil");

    var inicio = $("#inicio");
    var fim = $("#fim");

    inicio.keyup(validateinicio);
    fim.keyup(validateinicio);

    function validateinicio() {
        if (inicio.val() == '' || (inicio.val()).length < 10) {
            inicio.removeClass("valid");
            msnInfoUtil.removeClass("valid");
            inicio.addClass("error");
            msnInfoUtil.addClass("error");
            msnInfoUtil.text("Por favor, informe o nome completo!");
            state = false;
        } else {
            inicio.removeClass('error');
            msnInfoUtil.removeClass('error');
            //descricao.addClass("valid");
            msnInfoUtil.addClass("valid");
            msnInfoUtil.text("");
            state = true;
        }
    }

    /* assuming that text input datePicker would have id='datePicker' */
    $("#inicio").datepicker({dateFormat: 'yy/mm/dd'});
    $("#fim").datepicker({dateFormat: 'yy/mm/dd'});
    $("#datanascimento").datepicker({dateFormat: 'yy/mm/dd'});
    
});

