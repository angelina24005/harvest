document.addEventListener("DOMContentLoaded", function () {
    const options = document.querySelectorAll('.option');
    const products = document.querySelectorAll('.card-product');

    options.forEach(option => {
        option.addEventListener('click', function () {
            const filter = this.dataset.filter;

            // Ocultar todos los productos
            products.forEach(product => {
                product.style.display = 'none';
            });

            // Mostrar solo los productos que corresponden al filtro seleccionado
            if (filter !== "best-sellers") {
                document.querySelectorAll('.' + filter + '-products').forEach(product => {
                    product.style.display = 'block';
                });
            } else {
                // Mostrar productos de "Mejores Vendidos"
                document.querySelectorAll('.best-sellers').forEach(product => {
                    product.style.display = 'block';
                });
            }

            // Cambiar clase activa
            options.forEach(opt => {
                opt.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    // Contador de productos para el carrito de compras
    let productsCount = 0;
    const addProductButtons = document.querySelectorAll('.addProductButton');
    const productsCountDisplay = document.getElementById('productsCount');
    const cartTableBody = document.querySelector('#lista-carrito tbody');
    const vaciarCarritoButton = document.getElementById('vaciar-carrito');
    const totalContainer = document.getElementById('total');

    // Agregar event listeners a los botones de agregar producto
    addProductButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const productCard = button.closest('.card-product');
            const productName = productCard.querySelector('h3').textContent;
            const productPrice = parseFloat(productCard.querySelector('.price').textContent.replace('$', ''));
            const productImage = productCard.querySelector('img').src;
            const quantity = 1;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td><img src="${productImage}" width="50"></td>
                <td>${productName}</td>
                <td>$${productPrice.toFixed(2)}</td>
                <td><input type="number" value="${quantity}" min="1"></td>
                <td>$${(productPrice * quantity).toFixed(2)}</td>
                <td><button class="delete-item">X</button></td>
            `;
            cartTableBody.appendChild(row);

            productsCount++;
            productsCountDisplay.textContent = `(${productsCount})`;

            updateTotal();
        });
    });

    // Event listener para vaciar el carrito
    vaciarCarritoButton.addEventListener('click', () => {
        cartTableBody.innerHTML = '';
        productsCount = 0;
        productsCountDisplay.textContent = `(${productsCount})`;

        updateTotal();
    });

    // Event listener para eliminar un producto del carrito
    cartTableBody.addEventListener('click', (e) => {
        if (e.target.classList.contains('delete-item')) {
            e.target.closest('tr').remove();
            productsCount--;
            productsCountDisplay.textContent = `(${productsCount})`;

            updateTotal();
        }
    });

    // Event listener para cambiar la cantidad de un producto en el carrito
    cartTableBody.addEventListener('change', (e) => {
        if (e.target.tagName === 'INPUT' && e.target.type === 'number') {
            const quantity = parseInt(e.target.value);
            if (quantity < 1) {
                e.target.value = 1;
            }
            updateTotal();
        }
    });

    // Función para actualizar el precio total del carrito
    function updateTotal() {
        let total = 0;
        cartTableBody.querySelectorAll('tr').forEach((row) => {
            const price = parseFloat(row.children[2].textContent.replace('$', ''));
            const quantity = parseInt(row.children[3].querySelector('input').value);
            const totalPriceCell = row.querySelector('td:nth-child(5)');
            const totalPrice = price * quantity;
            totalPriceCell.textContent = `$${totalPrice.toFixed(2)}`;
            total += totalPrice;
        });
        totalContainer.textContent = `$${total.toFixed(2)}`;
    }
});




document.addEventListener('DOMContentLoaded', () => {
    // Contador de productos para el carrito de compras
    let productsCount = 0;
    const addProductButtons = document.querySelectorAll('.btn-agregar-carrito');
    const productsCountDisplay = document.getElementById('productsCount');
    const cartTableBody = document.querySelector('#lista-carrito tbody');
    const vaciarCarritoButton = document.getElementById('vaciar-carrito');
    const totalContainer = document.getElementById('total');

    // Agregar event listeners a los botones de agregar producto
    addProductButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const productName = button.getAttribute('data-nombre');
            const productPrice = parseFloat(button.getAttribute('data-precio'));
            const productImage = button.closest('.card').querySelector('img').src;
            const quantity = 1;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td><img src="${productImage}" width="50"></td>
                <td>${productName}</td>
                <td>$${productPrice.toFixed(2)}</td>
                <td><input type="number" value="${quantity}" min="1"></td>
                <td>$${(productPrice * quantity).toFixed(2)}</td>
                <td><button class="delete-item">X</button></td>
            `;
            cartTableBody.appendChild(row);

            productsCount++;
            productsCountDisplay.textContent = `(${productsCount})`;

            updateTotal();
        });
    });
        // Función para actualizar el precio total del carrito
        function updateTotal() {
            let total = 0;
            cartTableBody.querySelectorAll('tr').forEach((row) => {
                const price = parseFloat(row.children[2].textContent.replace('$', ''));
                const quantity = parseInt(row.children[3].querySelector('input').value);
                const totalPriceCell = row.querySelector('td:nth-child(5)');
                const totalPrice = price * quantity;
                totalPriceCell.textContent = `$${totalPrice.toFixed(2)}`;
                total += totalPrice;
            });
            totalContainer.textContent = `$${total.toFixed(2)}`;
        }
    });
    