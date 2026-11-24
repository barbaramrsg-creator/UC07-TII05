const formCadastro=document.getElementById('form-cadastro');

if(formCadastro) {
const inputCep = document.getElementById('cep');
const inputUF = document.getElementById('uf');
const innputSenha=document.getElementById('senha');
const inputConfirmarSenha=document.getElementById('confirmar-senha');
const erroSenha=document.getElementById('erro-senha');
const msgCepStatus=document.getElementById('cep-status');
}

inputCep.addEventListener ('input', () => {
    let valor = event.target.value.replace(/\D/g, '');
    valor= valor.substring(0, 8);
    if (valor.length > 5) {
        valor= valor.replace(/(\d{5})(\d)/, '$1-$2');
    }

    event.target.value=valor;

    inputCep.classList.remove('erro');
});
