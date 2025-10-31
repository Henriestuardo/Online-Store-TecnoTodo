<?php
// Conexión a la base de datos
require_once '../app/config/database.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TecnoTodo - Tu Tienda de Tecnología</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/public/css/auth/home.css" />
    <link rel="stylesheet" href="/public/css/carrito.css">
    <link rel="icon" href="/public/img/brand/logo2.png">
</head>
<body>
    <header class="border-bottom py-2">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <div class="header">
                <img src="/public/img/img-inicio/Tecno.png" alt="Logo TecnoTodo"/>
                <p>Más que tecnología, soluciones inteligentes.</p>  
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

            <!-- Sesión y Carrito -->
            <div class="d-flex align-items-center">
                <a href="/app/views/auth/Inicio_de_sesi¾n.html" class="me-3 text-decoration-none text-dark">
                    <i class="bi bi-person">
                        <img class="center-block" src="https://www.steren.com.gt/static/version1758327486/frontend/Glam/sterencartmodala/es_MX/images/account.png" alt=""/>
                    </i>
                    Iniciar sesión
                </a>
                <div class="position-relative">
                    <a href="#" class="text-decoration-none text-dark" id="btnAbrirCarrito">
                        <i class="bi bi-cart">
                            Mi carrito 
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1h1a.5.5 0 0 1 .485.379L2.89 5H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 14H4a.5.5 0 0 1-.491-.408L1.01 2H.5a.5.5 0 0 1-.5-.5zm3.14 4l1.25 6h7.22l1.25-6H3.14z"/>
                                <path d="M5.5 16a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm6 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg>
                        </i>
                    </a>
                    <span class="cart-badge" id="cartBadge">0</span>
                </div>
            </div>
        </div>
        
        <div class="menu">
            <ul class="menu-list">
                <li><a href="/app/views/pages/products/Computadoras.php" class="category-link active"><img src="/public/img/img-inicio/image copy 5.png" alt="Computadoras" class="category-icon" /><span style="color: #ffffff;">Computadoras</span></a></li>
                <li><a href="/app/views/pages/products/Limpieza.php" class="category-link"><img src="/public/img/img-inicio/image copy 6.png" alt="Limpieza" class="category-icon" /><span style="color: #ffffff;">Limpieza</span></a></li>
                <li><a href="/app/views/pages/products/Memorias.php" class="category-link"><img src="/public/img/img-inicio/image copy 7.png" alt="Memorias" class="category-icon" /><span style="color: #ffffff;">Memorias</span></a></li>
                <li><a href="/app/views/pages/products/Mousepads.php" class="category-link"><img src="/public/img/img-inicio/image copy 8.png" alt="Mousepads" class="category-icon" /><span style="color: #ffffff;">Mousepads</span></a></li>
                <li><a href="/app/views/pages/products/Audifonos.php" class="category-link"><img src="/public/img/img-inicio/image copy 9.png" alt="Audifonos" class="category-icon" /><span style="color: #ffffff;">Audifonos</span></a></li>
                <li><a href="/app/views/pages/products/Mouse.php" class="category-link"><img src="/public/img/img-inicio/image copy 10.png" alt="Mouse" class="category-icon" /><span style="color: #ffffff;">Mouse</span></a></li>
                <li><a href="/app/views/pages/products/Accesorios.php" class="category-link"><img src="/public/img/img-inicio/image copy 11.png" alt="Accesorios" class="category-icon" /><span style="color: #ffffff;">Accesorios</span></a></li>
            </ul>
        </div>
    </header>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Imagen 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Imagen 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Imagen 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="/public/img/img-inicio/audifonos1.png" class="d-block w-100" alt="Audífonos" />
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/public/img/img-inicio/mouse1.png" class="d-block w-100" alt="Mouse" />
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/public/img/img-inicio/compus2.png" class="d-block w-100" alt="Computadoras" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <div class="cuadro-descripcion">
        <h4>Bienvenido a TecnoTodo, tu tienda en línea especializada en tecnología de calidad y precios competitivos. Aquí encontrarás todo lo que necesitas para equiparte con lo último en innovación digital:</h4>
        <h5>Computadoras y Laptops</h5>
        <h5>Audífonos y Auriculares</h5>
        <h5>Mouse y Teclados</h5>
        <h5>Accesorios</h5>
        <h5>Entre otros</h5>
    </div>

    <!-- SECCIÓN DE PRODUCTOS DINÁMICOS -->
    <div>
        <!-- Computadoras -->
        <h1 id="computadoras">Computadoras</h1>
        <section id="productos">
            <?php
            $stmt = $pdo->prepare("SELECT nombre, descripcion, precio, imagen_principal FROM productos WHERE id_categoria = 3 AND activo = TRUE LIMIT 2");
            $stmt->execute();
            while ($p = $stmt->fetch()):
            ?>
            <div class="producto">
                <img src="/public/img/Laptops/<?= htmlspecialchars($p['imagen_principal']) ?>" alt="<?= htmlspecialchars($p['nombre']) ?>">
                <h3><?= htmlspecialchars($p['nombre']) ?></h3>
                <p><?= htmlspecialchars($p['descripcion']) ?></p>
                <p>Precio: Q.<?= number_format($p['precio'], 2) ?></p>
                <button class="btn-agregar-carrito" 
                        data-producto="<?= htmlspecialchars($p['nombre']) ?>" 
                        data-precio="<?= $p['precio'] ?>" 
                        data-imagen="/public/img/Laptops/<?= htmlspecialchars($p['imagen_principal']) ?>">
                    Añadir al carrito
                </button>
            </div>
            <?php endwhile; ?>
        </section>

        <!-- Ratones -->
        <h1 id="ratones">Ratones</h1>
        <section id="productos">
            <?php
            $stmt = $pdo->prepare("SELECT nombre, descripcion, precio, imagen_principal FROM productos WHERE id_categoria = 6 AND activo = TRUE LIMIT 2");
            $stmt->execute();
            while ($p = $stmt->fetch()):
            ?>
            <div class="producto">
                <img src="/public/img/Mouse/<?= htmlspecialchars($p['imagen_principal']) ?>" alt="<?= htmlspecialchars($p['nombre']) ?>">
                <h3><?= htmlspecialchars($p['nombre']) ?></h3>
                <p><?= htmlspecialchars($p['descripcion']) ?></p>
                <p>Precio: Q.<?= number_format($p['precio'], 2) ?></p>
                <button class="btn-agregar-carrito" 
                        data-producto="<?= htmlspecialchars($p['nombre']) ?>" 
                        data-precio="<?= $p['precio'] ?>" 
                        data-imagen="/public/img/Mouse/<?= htmlspecialchars($p['imagen_principal']) ?>">
                    Añadir al carrito
                </button>
            </div>
            <?php endwhile; ?>
        </section>
    </div>

    <!-- MODAL CARRITO (sin cambios) -->
    <div class="modal-carrito" id="modalCarrito">
        <div class="modal-carrito__container">
            <button type="button" class="modal-carrito__close fa-solid fa-xmark" id="btnCerrarCarrito"></button>
            <div class="modal-carrito__info">
                <div class="modal-carrito__header">
                    <h2><i class="fa-brands fa-opencart"></i>Carrito de Compras</h2>
                </div>
                <div class="modal-carrito__body" id="carritoItems">
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
                        <a href="/app/views/pages/Proceso_pago.php" class="btn-carrito btn-carrito-border">Ir al carrito</a>
                        <a href="#" class="btn-carrito btn-carrito-primary">Comprar Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-wrap">
            <strong>Tienda en Línea</strong>
            <small>Elaboración de proyecto Tienda en Línea.</small>
            <small>©<span>2025</span> Realizado por: Tecnotodo.</small>
        </div>
        <a href="/app/views/pages/Contactanos.php"><p>Contactános</p></a>
    </footer>

    <script src="/public/js/carritocompras.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>