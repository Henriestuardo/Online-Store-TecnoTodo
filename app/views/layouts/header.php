<!-- app/views/layouts/header.php -->
<header>
    <button class="hamburger" aria-label="Abrir menú" onclick="toggleMenu()">&#9776;</button>
    <nav id="menu" class="nav-menu">
        <ul>
            <li><a href="/Index.php">Inicio</a></li>
            <li><a href="/app/views/pages/products/audifonos.php">Audífonos</a></li>
            <li><a href="/app/views/pages/products/mouse.php">Mouse</a></li>
            <li><a href="/app/views/pages/contact.php">Contacto</a></li>
        </ul>
    </nav>
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="header">
            <a href="/Index.php"><img src="/img/img-inicio/Tecno.png" alt="Logo TecnoTodo" /></a>
            <h1>TecnoTodo</h1>
        </div>
        <form class="d-flex w-50 search-box">
            <input class="form-control" type="search" placeholder="Buscar..." />
            <button class="btn" type="submit">🔍</button>
        </form>
        <div class="d-flex align-items-center">
            <a href="/app/views/auth/login.php" class="me-3 text-decoration-none text-dark">Iniciar sesión</a>
            <a href="#" class="text-decoration-none text-dark">Mi carrito</a>
        </div>
    </div>
</header>