// Inicializa el carrito de compras como un array vacío
let cart = [];

// Actualiza el contador de productos en el botón de carrito
function updateCartCounter() {
    const cartCounter = document.querySelector('.quantity');
    cartCounter.textContent = cart.length.toString();
}

// Agregar un producto al carrito
function addToCart(productName, productPrice) {
    cart.push({ name: productName, price: productPrice });
    renderCart();
}

// Calcular el total del carrito
function calculateTotal() {
    let total = 0;
    for (const item of cart) {
        total += item.price;
    }
    return total;
}

// Renderizar el carrito en el HTML
function renderCart() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';

    for (let i = 0; i < cart.length; i++) {
        const cartItem = cart[i];
        const listItem = document.createElement('li');
        listItem.innerHTML = `
            <span class="cart-item-name">${cartItem.name}</span>
            <span class="cart-item-price">$${cartItem.price.toFixed(2)}</span>
            <button class="delete-button remove-from-cart" data-index="${i}">
                <svg class="delete-svgIcon" viewBox="0 0 448 512">
                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                </svg>
            </button>
        `;
        cartItems.appendChild(listItem);
    }

    const cartTotal = document.getElementById('cart-total');
    cartTotal.textContent = `$${calculateTotal().toFixed(2)}`;

    // Agrega manejo de eventos para botones de eliminación
    const removeFromCartButtons = document.querySelectorAll('.remove-from-cart');
    removeFromCartButtons.forEach(button => {
        button.addEventListener('click', event => {
            const index = parseInt(event.target.dataset.index);
            removeFromCart(index);
        });
    });

    // Actualiza el contador del carrito
    updateCartCounter();
}

// Eliminar un producto del carrito
function removeFromCart(index) {
    cart.splice(index, 1);
    renderCart();
}

// Agregar productos al carrito cuando se hace clic en "Agregar al carrito"
const addToCartButtons = document.querySelectorAll('.add-to-cart');
addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        const product = button.closest('.product');
        const productName = product.querySelector('h3').textContent;
        const productPriceText = product.querySelector('.product-price').textContent;
        const productPrice = parseFloat(productPriceText.replace('Precio: $', ''));
        addToCart(productName, productPrice);
    });
});

// Obtener el botón de "Pagar"
const payButton = document.getElementById('pay-button');

// Agregar un controlador de eventos al botón de pago para abrir el modal
payButton.addEventListener('click', () => {
    // Obtener los elementos del carrito
    const cartItems = document.querySelectorAll('#cart-items li');

    // Crear un mensaje con los productos y precios
    let message = '¡Hola! Quiero comprar los siguientes productos:';
    cartItems.forEach(item => {
        const name = item.querySelector('.cart-item-name').textContent;
        const price = item.querySelector('.cart-item-price').textContent;
        message += `%0A- ${name}, Precio: ${price}`;
    });

    // Obtener el total del carrito
    const total = document.getElementById('cart-total').textContent;
    message += `%0ATotal: ${total}`;

    // Crear la URL de WhatsApp con el mensaje
    const whatsappURL = `https://wa.me/+573209970270?text=${message}`;

    // Redirigir al usuario a WhatsApp
    window.open(whatsappURL, '_blank');
});

// Ventana modal
function openModal() {
    const modal = document.getElementById('modal');
    modal.style.display = 'block';
}

function closeModal() {
    const modal = document.getElementById('modal');
    modal.style.display = 'none';
}

// Agregar eventos para abrir y cerrar el modal
const btnCart = document.getElementById("btn-cart");
btnCart.addEventListener("click", openModal);

const closeModalBtn = document.getElementById("close-modal");
closeModalBtn.addEventListener("click", closeModal);

// Inicializar el contador del carrito
updateCartCounter();
