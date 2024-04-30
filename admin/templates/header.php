<?php
$url_base="https://localhost/revproject/admin/";
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Administrador del Sitio Web</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->

            <nav class="navbar navbar-expand navbar-light bg-light">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="#" aria-current="page">Administrador <span class="visually-hidden">(current)</span></a>

                    <a class="nav-item nav-link" href="<?php echo $url_base;?>seccion/banners/">Banners</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>seccion/Testimonios/">Testimonios</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>seccion/menu/">Menú</a>
                    <a class="nav-item nav-link" href="#">Comentarios</a>
                    <a class="nav-item nav-link" href="#">Cerrar Sesion</a>
                </div>
            </nav>
            



        </header>
        <main>
    <section class="container">