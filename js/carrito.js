let carrito = [];

function agregarAlCarrito(nombre, precio) {
    const item = { nombre, precio };
    carrito.push(item);
    actualizarCarrito();
}

function actualizarCarrito() {
    const listaCarrito = document.getElementById('lista-carrito');
    listaCarrito.innerHTML = ''; // Limpiar la lista
    carrito.forEach((item, index) => {
        const li = document.createElement('li');
        li.textContent = `${item.nombre} - $${item.precio}`;
        listaCarrito.appendChild(li);
    });
    if (carrito.length > 0) {
        document.getElementById('carrito').style.display = 'block';
    } else {
        document.getElementById('carrito').style.display = 'none';
    }
}

function vaciarCarrito() {
    carrito = [];
    actualizarCarrito();
}