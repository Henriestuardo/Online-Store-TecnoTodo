<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoTodo - Tienda en Línea</title>
    <link rel="stylesheet" href="css/productos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>

    <header>

        <!-- Botón  -->
        <button class="hamburger" aria-label="Abrir menú" onclick="toggleMenu()">
            &#9776;
        </button>

        <!--Navegación-->
        <nav id="menu" class="nav-menu">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="turismo.html">Turismo</a></li>
                <li><a href="celebraciones.html">Celebraciones</a></li>
                <li><a href="contacto.html">Contactános</a></li>
            </ul> 
        </nav>

        <div class="container-fluid d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <div class="header">
                <a href="Index.php"><img src="img/img-inicio/Tecno.png" alt="Logo TecnoTodo" /></a>
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
                    <a href="#" class="text-decoration-none text-dark">
                        <i class="bi bi-cart">
                            Mi carrito
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1h1a.5.5 0 0 1 .485.379L2.89 5H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 14H4a.5.5 0 0 1-.491-.408L1.01 2H.5a.5.5 0 0 1-.5-.5zm3.14 4l1.25 6h7.22l1.25-6H3.14z"/>
                                <path d="M5.5 16a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm6 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg>
                        </i>
                    </a>
                    <span class="cart-badge">0</span>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!--========Sección de computadoras=========-->
        <h1 id="computadoras">Computadoras</h1>
        <section id="productos">
            <div class="producto">
                <img src="img/Laptops/Laptop de juego Legion 5 Pro.jpg" alt="Producto 1">
                <h3>Legion 5 Pro</h3>
                <p>Laptop de juego Legion 5 Pro.</p>
                <p>Precio: Q15,000</p>
                <button>Añadir al carrito</button>
            </div> 

            <div class="producto">
                <img src="img/Laptops/Laptop de juego Omen 15.jpg" alt="Producto 2">
                <h3>Omen 15</h3>
                <p>Laptop de juego Omen 15.</p>
                <p>Precio: Q13,000</p>
                <button>Añadir al carrito</button>
            </div>
    
            <div class="producto">
                <img src="img/Laptops/Laptop de juego ROG Zephyrus G14.jpg" alt="Producto 3">
                <h3>Zephyrus G14</h3>
                <p>Laptop de juego ROG Zephyrus G14.</p>
                <p>Precio: Q14,000</p>
                <button>Añadir al carrito</button>
            </div>

            <div class="producto">
                <img src="img/Laptops/Laptop MacBook Air M1.jpg" alt="Producto 4">
                <h3>MacBook Air M1</h3>
                <p>Laptop MacBook Air M1.</p>
                <p>Precio: Q18,000</p>
                <button>Añadir al carrito</button>
            </div>
             
            <div class="producto">
                <img src="img/Laptops/Laptop de juego Blade 15 Advanced.jpg" alt="Producto 5">
                <h3>Blade 15 Advanced</h3>
                <p>Laptop de juego Blade 15 Advanced.</p>
                <p>Precio: Q25,000</p>
                <button>Añadir al carrito</button>
            </div> 

            <div class="producto">
                <img src="img/Laptops/Laptop XPS 13.jpg" alt="Producto 6">
                <h3>XPS 13</h3>
                <p>Laptop XPS 13.</p>
                <p>Precio: Q16,000</p>
                <button>Añadir al carrito</button>
            </div>
    
            <div class="producto">
                <img src="img/Laptops/Laptop VivoBook 15.jpg" alt="Producto 7">
                <h3>VivoBook 15</h3>
                <p>Laptop VivoBook 15.</p>
                <p>Precio: Q8,500</p>
                <button>Añadir al carrito</button>
            </div>

            <div class="producto">
                <img src="img/Laptops/Laptop de juego Alienware m15 R6.jpg" alt="Producto 8">
                <h3>Alienware m15 R6</h3>
                <p>Laptop de juego Alienware m15 R6.</p>
                <p>Precio: Q22,000</p>
                <button>Añadir al carrito</button>
            </div>
        </section>
    </main>

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

</html> -->

<?php
// app/views/pages/products/audifonos.php

// Incluir conexión a la base de datos (¡CORREGIDO!)
require_once __DIR__ . '/../../app/config/database.php';

// Supón que la categoría "Audífonos" tiene id = 2
$id_categoria = 2;

// Consulta segura con PDO
$stmt = $pdo->prepare("
    SELECT id_producto, nombre, descripcion, precio, imagen_principal 
    FROM productos 
    WHERE id_categoria = ? AND activo = TRUE
");
$stmt->execute([$id_categoria]);
$productos = $stmt->fetchAll();

// Preparar contenido para la plantilla
ob_start();
?>
<h1>Audífonos</h1>
<section id="productos">
    <?php if (empty($productos)): ?>
        <p>No hay audífonos disponibles en este momento.</p>
    <?php else: ?>
        <?php foreach ($productos as $p): ?>
        <div class="producto">
            <img src="/img/Audifonos/<?= htmlspecialchars($p['imagen_principal']) ?>" 
                 alt="<?= htmlspecialchars($p['nombre']) ?>">
            <h3><?= htmlspecialchars($p['nombre']) ?></h3>
            <p><?= htmlspecialchars($p['descripcion']) ?></p>
            <p>Precio: Q<?= number_format($p['precio'], 2) ?></p>
            <button>Añadir al carrito</button>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>
<?php
$content = ob_get_clean();
$title = 'Audífonos - TecnoTodo';

// Cargar plantilla
include __DIR__ . '/../../layouts/main.php';
?>