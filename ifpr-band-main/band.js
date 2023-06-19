const teclas = document.querySelectorAll('.tecla');



for (let index = 0; index < teclas.length; index++) {
    const instrumento = teclas[index].classList[1]; //pega o nome da classe do elemento
    console.log(instrumento);

    teclas[index].onclick = function () {
        tocaSom(`#som_${instrumento}`); //queryString
    }
}



function tocaSom(idAudio) {

    const audio = document.querySelector('idAudio');

    audio.play();
}

