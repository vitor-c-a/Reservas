//Está colocando o ano atual na parte que aparece o ano do calendário
let ano = document.getElementById('ano');

let anoAtual = new Date().getFullYear();

ano.innerHTML = anoAtual;

