/* Arquivo JavaScrip */

function validar() {
    if(document.form.tipo.value== ""){
        alert("Preencha o campo tipo");
        document.form.tipo.focus();
        return false;
    }


    if(document.form.mercadoria.value== ""){
        alert("Preencha o campo  mercadoria");
        document.form.mercadoria.focus();
        return false;
    }


    if(document.form.quantidade.value== "" ){
        alert("Preencha o campo quantidade");
        document.form.quantidade.focus();
        return false;
    }


    

 
    

    if(document.form.preco.value== ""){
        alert("Preencha o campo preco");
        document.form.preco.focus();
        return false;
    }

    if(document.form.negociacao.value== ""){
        alert("Preencha o campo negociacao");
        document.form.negociacao.focus();
        return false;
    }






}



//* função de restrição de digitação */
 function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }

