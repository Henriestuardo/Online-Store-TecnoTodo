<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoTodo - Tienda en Línea</title>
    <link rel="stylesheet" href="/public/css/auth/home.css">
    <link rel="stylesheet" href="/public/css/auth/products.css"/>
    <link rel="icon" href="/public/img/brand/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/public/css/auth/home.css" />
    <link rel="stylesheet" href="/public/css/carrito.css"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>

    <header>
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <div class="header">
                <a href="/public/Index.php"><img src="/public/img/brand/logo.png" alt="Logo TecnoTodo" /></a>
                <h1>TecnoTodo</h1>
            </div>
            <!-- Buscador -->
            <form class="d-flex w-50 search-box">
                <input class="form-control" type="search" placeholder="Buscar en toda la tienda..." aria-label="Buscar"/>
                <button class="btn" type="submit">
                    <i class="bi bi-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11 6a5 5 0 1 0-2 3.9l3.85 3.85a1 1 0 0 0 1.415-1.415L10.414 8.5A5 5 0 0 0 11 6zm-1 0a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
                        </svg>
                    </i>
                </button>
            </form>

            <!-- Sección y Carrito -->
            <div class="d-flex align-items-center">
                <a href="#" class="me-3 text-decoration-none text-dark">
                    <i class="bi bi-person">
                        <img class="center-block" src="https://www.steren.com.gt/static/version1758327486/frontend/Glam/sterencartmodala/es_MX/images/account.png" alt=""/>
                    </i>
                    Iniciar sesión
                </a>
              <div class="position-relative">
                    <a href="#" class="text-decoration-none text-dark" id="btnAbrirCarrito">
                        <i class="bi bi-cart">
                            Mi carrito 
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                fill="currentColor"
                                class="bi bi-cart"
                                viewBox="0 0 16 16" >
                                <path d="M0 1.5A.5.5 0 0 1 .5 1h1a.5.5 0 0 1 .485.379L2.89 5H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 14H4a.5.5 0 0 1-.491-.408L1.01 2H.5a.5.5 0 0 1-.5-.5zm3.14 4l1.25 6h7.22l1.25-6H3.14z"/>
                                <path d="M5.5 16a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm6 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg>
                        </i>
                    </a>
                    <span class="cart-badge" id="cartBadge">0</span>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!--========Sección de computadoras=========-->
        <h1 id="computadoras">Mouses</h1>
        <section id="productos">
            <div class="producto">
                <img src="img/Laptops/Laptop de juego Legion 5 Pro.jpg" alt="Producto 1">
                <h3>Legion 5 Pro</h3>
                <p>Laptop de juego Legion 5 Pro.</p>
                <p>Precio: Q15,000</p>
                <button class="btn-agregar-carrito" data-producto="Producto 1" data-precio="8500" data-imagen="img/Laptops/Laptop de juego Legion 5 Pro.jpg">Añadir al carrito</button>
            </div> 

            <div class="producto">
                <img src="img/Laptops/Laptop de juego Omen 15.jpg" alt="Producto 2">
                <h3>Omen 15</h3>
                <p>Laptop de juego Omen 15.</p>
                <p>Precio: Q13,000</p>
                <button class="btn-agregar-carrito" data-producto="Producto 2" data-precio="8500" data-imagen="img/Laptops/Laptop de juego Omen 15.jpg">Añadir al carrito</button>
            </div>
    
            <div class="producto">
                <img src="img/Laptops/Laptop de juego ROG Zephyrus G14.jpg" alt="Producto 3">
                <h3>Zephyrus G14</h3>
                <p>Laptop de juego ROG Zephyrus G14.</p>
                <p>Precio: Q14,000</p>
                <button class="btn-agregar-carrito" data-producto="Producto 3" data-precio="8500" data-imagen="img/Laptops/Laptop de juego ROG Zephyrus G14.jpg">Añadir al carrito</button>            
            </div>

            <div class="producto">
                <img src="img/Laptops/Laptop MacBook Air M1.jpg" alt="Producto 4">
                <h3>MacBook Air M1</h3>
                <p>Laptop MacBook Air M1.</p>
                <p>Precio: Q18,000</p>
                <button class="btn-agregar-carrito" data-producto="Producto 4" data-precio="8500" data-imagen="img/Laptops/Laptop de juego Legion 5 Pro.jpg">Añadir al carrito</button>
            </div>
             
            <div class="producto">
                <img src="img/Laptops/Laptop de juego Blade 15 Advanced.jpg" alt="Producto 5">
                <h3>Blade 15 Advanced</h3>
                <p>Laptop de juego Blade 15 Advanced.</p>
                <p>Precio: Q25,000</p>
                <button class="btn-agregar-carrito" data-producto="Producto 5" data-precio="8500" data-imagen="img/Laptops/Laptop de juego Blade 15 Advanced.jpg">Añadir al carrito</button>
            </div> 

            <div class="producto">
                <img src="img/Laptops/Laptop XPS 13.jpg" alt="Producto 6">
                <h3>XPS 13</h3>
                <p>Laptop XPS 13.</p>
                <p>Precio: Q16,000</p>
                <button class="btn-agregar-carrito" data-producto="Producto 6" data-precio="8500" data-imagen="img/Laptops/Laptop XPS 13.jpg">Añadir al carrito</button>
            </div>
    
            <div class="producto">
                <img src="img/Laptops/Laptop VivoBook 15.jpg" alt="Producto 7">
                <h3>VivoBook 15</h3>
                <p>Laptop VivoBook 15.</p>
                <p>Precio: Q8,500</p>
                <button class="btn-agregar-carrito" data-producto="Producto 7" data-precio="8500" data-imagen="img/Laptops/Laptop VivoBook 15.jpg">Añadir al carrito</button>
            </div>

            <div class="producto">
                <img src="img/Laptops/Laptop de juego Alienware m15 R6.jpg" alt="Producto 8">
                <h3>Alienware m15 R6</h3>
                <p>Laptop de juego Alienware m15 R6.</p>
                <p>Precio: Q22,000</p>
                <button class="btn-agregar-carrito" data-producto="Producto 8" data-precio="8500" data-imagen="img/Laptops/Laptop de juego Legion 5 Pro.jpg">Añadir al carrito</button>
            </div>
        </section>
    </main>
       <div class="modal-carrito" id="modalCarrito">
        <div class="modal-carrito__container">
            <button type="button" class="modal-carrito__close fa-solid fa-xmark" id="btnCerrarCarrito"></button>

            <div class="modal-carrito__info">
                <div class="modal-carrito__header">
                    <h2><i class="fa-brands fa-opencart"></i>Carrito de Compras</h2>
                </div>

                <div class="modal-carrito__body" id="carritoItems">
                    <!-- Los productos del carrito se agregarán aquí dinámicamente -->
                    <div class="empty-cart-message" id="emptyCartMessage">
                        Tu carrito está vacío
                    </div>
                </div>

                <div class="modal-carrito__footer">
                    <div class="modal-carrito__list-price">
                        <ul>
                            <li>Subtotal: <strong id="subtotalCarrito">Q.0.00</strong></li>
                            <li>Envío: <strong>Q.0.00</strong></li>
                        </ul>
                        <h4 class="modal-carrito__total-cart" id="totalCarrito">Total: Q.0.00</h4>
                    </div>

                    <div class="modal-carrito__btns">
                        <a href="/app/views/pages/checkout.php" class="btn-carrito btn-carrito-border">Ir al carrito</a>
                        <a href="#" class="btn-carrito btn-carrito-primary">Comprar Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-wrap">
            <strong>Tienda en Línea</strong>
            <small>
                Elaboración de proyecto Tienda en Línea.
            </small>

            <small>
                ©<span>2025</span> Realizado por: Tecnotodo.
            </small>
        </div>
    </footer>
</body>
<script src="JS/menu.js"></script>
<script src="/public/js/carritocompras.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
