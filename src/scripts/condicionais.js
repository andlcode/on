let comissao = document.querySelector('#isComissao');

function removerDisabledComissao(event) {
    console.log(event)
    if (event != 'Trabalhador') {
        comissao.disabled = true
    } else {
        console.log(event)
        /*  comissao.setAttribute('disabled','' ) */
        comissao.disabled = false
    }
}