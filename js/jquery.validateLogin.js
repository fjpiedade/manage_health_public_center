/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready( function() {
    $("#form_log").validate({
        // Define as regras
        rules:{
            username:{
                // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
                required: true
            },
            password:{
                // campoMensagem será obrigatório (required) e terá tamanho mínimo (minLength)
                required: true
            }
        },
        // Define as mensagens de erro para cada regra
        messages:{
            username:{
                required: "Digite o seu Nome do Utilizador!"
            },
            password:{
                required: "Digite sua Senha do Utilizador!"
            }
        }
    });
    
});



