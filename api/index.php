<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Revolucionarios</title>
    <link rel="stylesheet" href="/css/home.css">
    <?php require('/layouts/header.php'); ?>
</head>
<body>
    <div class="wave">
        <label for="">Encuentra</label>
    </div>
    <div class="wave1">
        <label class="label">tu antojo</label>
    </div>
    <div class="wave2">
        <label class="label">Favorito</label>
        <a href="/paginas/menu_comida.php" class="button-main-content">IR AL MENÚ</a>
        <p style="letter-spacing: .1rem;">Consulta nuestras platillos ahora mismo</p>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/imagenes/editadas/_DSC0023.jpg" alt="Imagen 1">
            </div>
            <div class="swiper-slide">
                <img src="/imagenes/editadas/_DSC0047.jpg" alt="Imagen 2">
            </div>
            <div class="swiper-slide">
                <img src="/imagenes/editadas/_DSC0059.jpg" alt="Imagen 3">
            </div>
        </div>
    </div>
    <?php require('/layouts/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="/js/home.js"></script>
    <script>
        const waveElements = document.querySelectorAll('.wave label');
        waveElements.forEach(label => {
            label.innerHTML = label.textContent.split('').map((text, wave) =>
                `<span style="transition-delay: ${wave * 25}ms">${text}</span>`
            ).join('');
        });
    </script>
</body>
</html>
