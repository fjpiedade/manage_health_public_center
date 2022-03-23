/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready( function() {
    $("#form").validate({
        // Define as regras
        rules:{
            emailInstituicao:{
                // campoEmail será obrigatório (required) e precisará ser um e-mail válido (email)
                email: true
            }
        },
        // Define as mensagens de erro para cada regra
        messages:{
            emailInstituicao:{
                email: ""
            }
        }
    });
});

