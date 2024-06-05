<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="website icon" href="img/tienda-icon.png"/>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container-encabezado">
            <div class="container encabezado">
                <div class="container-logo">
                    <i class="fa-solid fa-mug-hot"></i>
                    <h1 class="logo"><a href="/">Harvest Coffee</a></h1>
                </div>
                <div class="container-user">
                    <i class="fa-solid fa-user"></i>
                    <div class="shopping-cart-container">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <div class="content-shopping-cart">
                            <span class="text">Carrito</span>
                            <span class="number" id="productsCount">(0)</span>
                        </div>
                        <div id="carrito">
                            <ul>
                                <li class="submenu">
                                    <div>
                                        <table id="lista-carrito" class="u-full-width">
                                            <thead>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio unit.</th>
                                                <th>Cantidad</th>
                                                <th>Total</th>
                                                <th></th>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="tienda.php">Tienda</a></li>
                    <li><a href="Cafes.php">Cafes</a></li>
                    <li><a href="Postresybowls.php">Postres y Bowls</a></li>
                    <li><a href="Historia.php">Historia</a></li>
                    <li><a href="Blog.php">Blog</a></li>
                </ul>
            </nav>
        </div>
    </header>
