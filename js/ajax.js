/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function eliminarDepartamento($x,$y){
    jQuery.ajax({
        type: 'POST',
        dataType: 'json',
        url:'eliminar_departamento.php',
        data: "iddepartamento="+$x,
        success: function(resposta){
            if(resposta.resposta=="sucesso"){
                jQuery('#'+$y).remove();
            }else{
                jAlert('Departamento Nao Removido!');
            }
           
        }
    });
}

function eliminarSeccao($x,$y){
    jQuery.ajax({
        type: 'POST',
        dataType: 'json',
        url:'eliminar_seccao.php',
        data: "idseccao="+$x,
        success: function(resposta){
            if(resposta.resposta=="sucesso"){
                jQuery('#'+$y).remove();
            }else{
                jAlert('Seccao Nao Removida!');
            }
           
        }
    });
}

function eliminarFuncao($x,$y){
    jQuery.ajax({
        type: 'POST',
        dataType: 'json',
        url:'eliminar_funcao.php',
        data: "idfuncao="+$x,
        success: function(resposta){
            if(resposta.resposta=="sucesso"){
                jQuery('#'+$y).remove();
            }else{
                jAlert('Funcao Nao Removida!');
            }
           
        }
    });
}

function eliminarCategoria($x,$y){
    jQuery.ajax({
        type: 'POST',
        dataType: 'json',
        url:'eliminar_categoria.php',
        data: "idcategoria="+$x,
        success: function(resposta){
            if(resposta.resposta=="sucesso"){
                jQuery('#'+$y).remove();
            }else{
                jAlert('Seccao Nao Removida!');
            }
           
        }
    });
}

function eliminarFuncionario($x,$y){
    jQuery.ajax({
        type: 'POST',
        dataType: 'json',
        url:'eliminar_funcionario.php',
        data: "idfuncionario="+$x,
        success: function(resposta){
            if(resposta.resposta=="sucesso"){
                jQuery('#'+$y).remove();
            }else{
                jAlert('Funcionario Nao Removido!');
            }
           
        }
    });
}


