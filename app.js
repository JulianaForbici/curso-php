async function adicionar() {
    const formData = new FormData();

    formData.append('acao', 'adicionar');
    formData.append('produto', document.getElementById('produto').value);
    formData.append('quantidade', document.getElementById('quantidade').value);

    const response = await fetch('api.php', {
        method: 'POST',
        body: formData
    });

    const itens = await response.json();

    mostrarNaTela(itens);
}

async function limpar() {
    const formData = new FormData();
    formData.append('acao', 'limpar');

    const response = await fetch('api.php', {
        method: 'POST',
        body: formData
    });

    const itens = await response.json();

    mostrarNaTela(itens);
}

function mostrarNaTela(itens) {
    const lista = document.getElementById('lista');

    lista.innerHTML = '';

    itens.forEach(item => {
        lista.innerHTML += `<p>${item.quantidade}x ${item.produto}</p>`;
    });
}