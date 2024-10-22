function formatarTelefone(telefone) {
    telefone = telefone.replace(/\D/g, ''); // Remove tudo que não é dígito
    telefone = telefone.replace(/^(\d{2})(\d)/g, '($1) $2'); // Coloca parênteses em volta dos dois primeiros dígitos
    telefone = telefone.replace(/(\d)(\d{4})$/, '$1-$2'); // Coloca hífen entre o quinto e o sexto dígitos
    return telefone;
}

document.getElementById('tel_cad').addEventListener('input', function (e) {
    let telefone = e.target.value;
    e.target.value = formatarTelefone(telefone);
});