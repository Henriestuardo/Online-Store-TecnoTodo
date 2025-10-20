
        // Variables globales
        let carrito = [];
        const modalCarrito = document.getElementById('modalCarrito');
        const btnAbrirCarrito = document.getElementById('btnAbrirCarrito');
        const btnCerrarCarrito = document.getElementById('btnCerrarCarrito');
        const carritoItems = document.getElementById('carritoItems');
        const emptyCartMessage = document.getElementById('emptyCartMessage');
        const subtotalCarrito = document.getElementById('subtotalCarrito');
        const totalCarrito = document.getElementById('totalCarrito');
        const cartBadge = document.getElementById('cartBadge');

        // Botones para agregar al carrito
        const addToCartButtons = document.querySelectorAll('.btn-agregar-carrito');

        // Evento para abrir el carrito desde el header
        btnAbrirCarrito.addEventListener('click', (e) => {
            e.preventDefault();
            modalCarrito.classList.add('active');
        });

        // Evento para cerrar el carrito
        btnCerrarCarrito.addEventListener('click', () => {
            modalCarrito.classList.remove('active');
        });

        // Cerrar modal al hacer click fuera
        window.addEventListener('click', (e) => {
            if (e.target === modalCarrito) {
                modalCarrito.classList.remove('active');
            }
        });

        // Agregar productos al carrito
        addToCartButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                const producto = e.target.getAttribute('data-producto');
                const precio = parseFloat(e.target.getAttribute('data-precio'));
                const imagen = e.target.getAttribute('data-imagen');

                agregarAlCarrito(producto, precio, imagen);
                
                // Abrir el carrito automáticamente
                modalCarrito.classList.add('active');
            });
        });

        // Función para agregar producto al carrito
        function agregarAlCarrito(producto, precio, imagen) {
            // Verificar si el producto ya está en el carrito
            const productoExistente = carrito.find(item => item.producto === producto);
            
            if (productoExistente) {
                productoExistente.cantidad += 1;
            } else {
                carrito.push({
                    producto: producto,
                    precio: precio,
                    imagen: imagen,
                    cantidad: 1
                });
            }
            
            actualizarCarrito();
        }

        // Función para actualizar la visualización del carrito
        function actualizarCarrito() {
            // Limpiar el contenedor
            carritoItems.innerHTML = '';
            
            let subtotal = 0;
            
            if (carrito.length === 0) {
                emptyCartMessage.style.display = 'block';
            } else {
                emptyCartMessage.style.display = 'none';
                
                carrito.forEach((item, index) => {
                    const itemTotal = item.precio * item.cantidad;
                    subtotal += itemTotal;
                    
                    const itemElement = document.createElement('div');
                    itemElement.className = 'modal-carrito__item';
                    itemElement.innerHTML = `
                        <div class="modal-carrito__thumb">
                            <img src="${item.imagen}" alt="${item.producto}">
                        </div>
                        <div class="modal-carrito__text-product">
                            <p>${item.producto}</p>
                            <p><strong>Q.${item.precio.toFixed(2)}</strong></p>
                            <p>Cantidad: ${item.cantidad}</p>
                            <button onclick="eliminarDelCarrito(${index})" style="background: none; border: none; color: #ff4444; cursor: pointer; font-size: 12px;">
                                <i class="fas fa-trash"></i> Eliminar
                            </button>
                        </div>
                    `;
                    carritoItems.appendChild(itemElement);
                });
            }
            
            // Actualizar totales
            subtotalCarrito.textContent = `Q.${subtotal.toFixed(2)}`;
            totalCarrito.textContent = `Total: Q.${subtotal.toFixed(2)}`;
            
            // Actualizar badge
            const totalItems = carrito.reduce((total, item) => total + item.cantidad, 0);
            cartBadge.textContent = totalItems;
        }

        // Función para eliminar producto del carrito
        function eliminarDelCarrito(index) {
            carrito.splice(index, 1);
            actualizarCarrito();
        }

        // Inicializar carrito
        actualizarCarrito();