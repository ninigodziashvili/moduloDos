<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Repaso de Examen</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                 <a href="<?php echo home_url(); ?>" class="text-navigation">Navegacion</a>
            </div>
            <ul class="nav-link">
                <li>
                    <a href="<?php echo home_url(); ?>">Inicio</a>
                </li>
                <li>
                    <a href="/sobre-mi-2/">Sobre mi</a>
                </li>
                <li>
                    <a href="/mi-proyectos/">Proyectos</a>
                </li>
            </ul>
            <div class="burger">
                <div class="burger-line1"></div>
                <div class="burger-line2"></div>
                <div class="burger-line3"></div>
            </div>
        </nav>
    </header>