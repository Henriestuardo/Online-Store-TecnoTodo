<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proceso de Pago | TecnoTodo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Proceso de Pago  <span> <img src="img/minimalist shopping .png" class="pequena" alt="Bolsa de compras"></span> </h1>
    </header>

    <main class="checkout">
      <!-- SECCIÓN IZQUIERDA -->
      <section class="envio">
        <h2>Dirección de envío</h2>

        <div class="login-box">
          <div class="user-icon">👤</div>
          <p>¿Ya tienes una cuenta? <a href="#">Iniciar sesión aquí</a></p>
        </div>

        <div class="divider">O continúa sin ingresar a tu cuenta</div>

        <form>
          <label>Apellidos*</label>
          <input type="text" placeholder="Ej. López">

          <div class="form-row">
            <div>
              <label>Nombres*</label>
              <input type="text" placeholder="Ej. Carlos">
            </div>
            <div>
              <label>Apellidos*</label>
              <input type="text" placeholder="Ej. García">
            </div>
          </div>

          <label>Teléfono*</label>
          <div class="phone">
            <span class="code">+502</span>
            <input type="tel" placeholder="1234-5678">
          </div>

          <div class="btn-group">
            <button type="submit" class="pago">Realizar Pago</button>
            <button type="button" class="cancelar">Cancelar Pago</button>
          </div>
        </form>
      </section>

      <!-- SECCIÓN DERECHA -->
      <aside class="resumen">
        <h2>Resumen de compras</h2>

        <div class="item">
          <div class="img-box"></div>
          <div class="info">
            <div class="qty">
              <button>-</button>
              <span>23</span>
              <button>+</button>
            </div>
            <p>Q.200.00</p>
          </div>
          <button class="remove">✖</button>
        </div>

        <div class="item">
          <div class="img-box"></div>
          <div class="info">
            <div class="qty">
              <button>-</button>
              <span>23</span>
              <button>+</button>
            </div>
            <p>Q.200.00</p>
          </div>
          <button class="remove">✖</button>
        </div>

        <div class="item">
          <div class="img-box"></div>
          <div class="info">
            <div class="qty">
              <button>-</button>
              <span>23</span>
              <button>+</button>
            </div>
            <p>Q.200.00</p>
          </div>
          <button class="remove">✖</button>
        </div>

        <div class="totales">
          <div class="row">
            <span>Subtotal</span>
            <span>Q.600.00</span>
          </div>
          <div class="row">
            <span>Envío</span>
            <span>Estimación pendiente</span>
          </div>
          <div class="row">
            <span>IVA</span>
            <span>Estimación pendiente</span>
          </div>
          <div class="metodos">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" alt="Mastercard">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" alt="Visa">
          </div>
        </div>
      </aside>
    </main>
  </div>
</body>
</html>
