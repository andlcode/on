// Texto que será digitado
const texto = "Bem vindo a COMEJACA!";

// Elemento onde o texto será exibido
const titulo = document.getElementById('titulo');

// Função para simular o efeito de digitação
function digitarTexto() {
    let index = 0;
    const intervalo = setInterval(function() {
        titulo.textContent += texto[index];
        index++;
        if (index >= texto.length) {
            clearInterval(intervalo);
        }
    }, 100); // Velocidade de digitação (em milissegundos)
}

// Chama a função para iniciar o efeito de digitação quando a página carrega
window.addEventListener('load', function() {
    digitarTexto();
});
