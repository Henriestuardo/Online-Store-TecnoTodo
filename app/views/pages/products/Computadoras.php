<?php
require_once '../../../../app/config/database.php';
$stmt = $pdo->prepare("SELECT nombre, descripcion, precio, imagen_principal FROM productos WHERE id_categoria = 3 AND activo = TRUE");
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Computadoras - TecnoTodo</title>
    <link rel="stylesheet" href="/public/css/auth/home.css">
    <link rel="stylesheet" href="/public/css/auth/products.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/public/css/auth/home.css" />
    <link rel="stylesheet" href="/public/css/carrito.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="icon" href="/public/img/brand/logo2.png">
</head>
<body>
    <!-- HEADER -->
    <header class="border-bottom py-2">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="header">
                <img src="/public/img/img-inicio/Tecno.png" alt="Logo TecnoTodo"/>
                <p>Más que tecnología, soluciones inteligentes.</p>  
            </div>
            <form class="d-flex w-50 search-box">
                <input class="form-control" type="search" placeholder="Buscar en toda la tienda..." aria-label="Buscar"/>
                <button class="btn" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <div class="d-flex align-items-center">
                <a href="/app/views/auth/Inicio_de_sesi¾n.html" class="me-3 text-decoration-none text-dark">
                    <i class="bi bi-person"></i> Iniciar sesión
                </a>
                <div class="position-relative">
                    <a href="#" class="text-decoration-none text-dark" id="btnAbrirCarrito">
                        <i class="bi bi-cart"></i> Mi carrito
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

    <h1 id="computadoras">Computadoras</h1>
    <section id="productos">
        <?php while ($p = $stmt->fetch()): ?>
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

    <!-- FOOTER Y MODAL (igual que Index.php) -->
    <footer>
        <div class="footer-wrap">
            <strong>Tienda en Línea</strong>
            <small>Elaboración de proyecto Tienda en Línea.</small>
            <small>©<span>2025</span> Realizado por: Tecnotodo.</small>
        </div>
        <a href="/app/views/pages/Contactanos.php"><p>Contactános</p></a>
    </footer>

    <div class="modal-carrito" id="modalCarrito">
        <!-- Tu modal completo aquí (igual que Index.php) -->
    </div>

    <script src="/public/js/carritocompras.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>