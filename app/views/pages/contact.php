<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/auth/contact.css">
    <link rel="stylesheet" href="/public/css/auth/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="icon" href="/public/img/brand/logo2.png">
</head>
<body>
    <header>

        <div class="container-fluid d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <div class="header">
                <a href="/public/Index.php"><img src="/public/img/brand/logo.png" alt="Logo TecnoTodo" /></a>
                <h1>TecnoTodo</h1>
            </div>
        </div>

    </header>

    <main>

        <section class="contact-section">
            <div class="container">
                <div class="map-container">
                    <h2>Ubicación</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.798215539821!2d-91.520268!3d14.8365788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858ebd559aa4116f%3A0x18435b46e10d65f8!2s15%20Avenida%20249%2C%20Quetzaltenango!5e0!3m2!1ses-419!2sgt!4v1760538291146!5m2!1ses-419!2sgt" 
                        width="900" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                
                <h2>Contactános</h2>
                
                <!-- Información de contacto -->
                <div class="contact-info">
                    <div class="contact-item">
                        <div>
                            <p>(502) 2448 7000</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div>
                            <p>TecnoTodoGT</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div>
                            <p>tecnotodoxelo@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Formulario de calificación con estrellas -->
                <div class="rating-section">
                    <h3>Califica nuestro servicio</h3>
                    <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5">
                        <label for="star5">★</label>
                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4">★</label>
                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3">★</label>
                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2">★</label>
                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1">★</label>
                    </div>
                </div>

                <!-- Formulario de comentarios -->
                <div class="comment-section">
                    <form class="comment-form">
                        <textarea 
                            placeholder="Deja un comentario aquí..." 
                            rows="5"
                            required >
                        </textarea>
                        <button type="submit" class="submit-btn">
                            Enviar
                        </button>
                    </form>
                </div>
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
</html>