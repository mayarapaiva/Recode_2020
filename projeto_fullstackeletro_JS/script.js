// aqui está o código em script do site Full Stack Eletro

function exibir_categoria(categoria){
    //alert(categoria);  // (ESTÁ OKKKKKKK!!!!)

    let elementos = document.getElementsByClassName('box_produto');
    console.log(elementos); // para ver se pegou os elementos corretamente (ESTÁ OKKKKKK!!!!)

    
    for(var i=0; i<elementos.length; i++){
        console.log(elementos[i].id); // no console aparece a qtdd de cada item, organizado (está okkkkk!)
        
        if(categoria == elementos[i].id){
            elementos[i].style = "display:block";
        } else{
            elementos[i].style = "display:none";
        }
    }
}

/* Até aqui está funcionado bem. A condição do For está funcionandooooooooooo) vivaaaa!!!! */

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produto');

    for(var i = 0; i<elementos.length; i++){
        elementos[i].style = "display:block"
    }
}

/* Até aqui está funcionado bem. */

let darZoom = (imagem) => {
    console.log(imagem);

    if(imagem.width == 240){
        imagem.width = 120;
    } else{
        imagem.width = 240;
    }
    
}




