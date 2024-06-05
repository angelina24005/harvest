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



	<section class="banner">
		<div class="content-banner">
			<h1>La mejor cafeteria de Ica </h1>
			<p>
				"Bienvenidos a Harvest CoffeeHouse, donde cada taza de café es una obra de arte y cada visita, un
				momento especial.
				Disfruta de nuestros Cafes y Postres en un ambiente acogedor. Aquí, el café es más que una bebida,
				es una experiencia que despierta tus sentidos.
				¡Ven y descubre tu nuevo rincón favorito!"
			</p>
		</div>
	</section>

	<main class="main-content">
		<section class="container container-features">
			<div class="card-feature">
				<i class="fa-solid fa-mug-saucer"></i>
				<div class="feature-content">
					<span>Cacao 100%</span>
					<p>Explora nuevos sabores</p>
				</div>
			</div>
			<div class="card-feature">
				<i class="fa-solid fa-cookie"></i>
				<div class="feature-content">
					<span>Expertos en postres</span>
					<p>Postres hechos con amor</p>
				</div>
			</div>
			<div class="card-feature">
				<i class="fa-solid fa-bell"></i>
				<div class="feature-content">
					<span>Atencion al cliente</span>
					<p>Ofrecemos un servicio de primera</p>
				</div>
			</div>
		</section>


		<section class="container top-categories">
			<h1 class="heading-1">Mejores Categorías</h1>
			<div class="container-categories">
				<div class="card-category category-moca">
					<p>Cafes</s></p>
					<a href="Cafes.html">
						<span>Ver más</span>
					</a>

				</div>
				<div class="card-category category-expreso">
					<p>Postres</p>
					<a href="Postresybowls.html">
						<span>Ver más</span>
					</a>
				</div>
				<div class="card-category category-capuchino">
					<p>Tienda</p>
					<a href="Tienda.html">
						<span>Ver más</span>
					</a>
				</div>
			</div>
		</section>

		<section class="container top-products">
			<h1 class="heading-1">Mejores Productos</h1>

			<div class="container-options">
				<span class="option active" data-filter="featured">Destacados</span>
				<span class="option" data-filter="recent">Más recientes</span>
				<span class="option" data-filter="best-sellers">Mejores Vendidos</span>
			</div>

			<div class="container-products">
				<!-- Producto 1 -->
				<div class="card-product featured-products">
					<div class="container-img">
						<img src="img/Capuccino.png" alt="Capuccino" />
						<div class="button-group">
							<span>
								<i class="fa-regular fa-eye"></i>
							</span>
							<span>
								<i class="fa-regular fa-heart"></i>
							</span>
							<span>
								<i class="fa-solid fa-code-compare"></i>
							</span>
						</div>
					</div>
					<div class="content-card-product">
						<div class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<h3>Capuccino</h3>
						<span class="add-cart addProductButton">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$9.00</p>
					</div>
				</div>
				<!-- Producto 2 -->
				<div class="card-product featured-products">
					<div class="container-img">
						<img src="img/Piscoffee.PNG" alt="Piscoffee.jpg" />
						<div class="button-group">
							<span>
								<i class="fa-regular fa-eye"></i>
							</span>
							<span>
								<i class="fa-regular fa-heart"></i>
							</span>
							<span>
								<i class="fa-solid fa-code-compare"></i>
							</span>
						</div>
					</div>
					<div class="content-card-product">
						<div class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-regular fa-star"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<h3>Piscoffee</h3>
						<span class="add-cart addProductButton">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$7.30</p>
					</div>
				</div>
				<!-- 3 -->
				<div class="card-product featured-products">
					<div class="container-img">
						<img src="img/panqueque.png" alt="Pancakes" />
						<div class="button-group">
							<span>
								<i class="fa-regular fa-eye"></i>
							</span>
							<span>
								<i class="fa-regular fa-heart"></i>
							</span>
							<span>
								<i class="fa-solid fa-code-compare"></i>
							</span>
						</div>
					</div>
					<div class="content-card-product">
						<div class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
						</div>
						<h3>Pancakes</h3>
						<span class="add-cart addProductButton">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$22.00</p>
					</div>
				</div>
				<!-- 4 -->
				<div class="card-product recent-products">
					<div class="container-img">
						<img src="img/SmoothieBowl.png" alt="Smoothie Bowl" />
						<div class="button-group">
							<span>
								<i class="fa-regular fa-eye"></i>
							</span>
							<span>
								<i class="fa-regular fa-heart"></i>
							</span>
							<span>
								<i class="fa-solid fa-code-compare"></i>
							</span>
						</div>
					</div>
					<div class="content-card-product">
						<div class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<h3>Smoothie Bowl</h3>
						<span class="add-cart addProductButton">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$25.00</p>
					</div>
				</div>
				<!---5--->
				<div class="card-product recent-products">
					<div class="container-img">
						<img src="img/Cacaoccino.jpg" alt="Cacaochino" />
						<div class="button-group">
							<span>
								<i class="fa-regular fa-eye"></i>
							</span>
							<span>
								<i class="fa-regular fa-heart"></i>
							</span>
							<span>
								<i class="fa-solid fa-code-compare"></i>
							</span>
						</div>
					</div>
					<div class="content-card-product">
						<div class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<h3>Cacaochino</h3>
						<span class="add-cart addProductButton">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$8.00</p>
					</div>
				</div>
				<!---6--->
				<div class="card-product recent-products">
					<div class="container-img">
						<img src="img/coldbrew500.jpg" alt="Botella de 500 ml de Cold Brew" />
						<div class="button-group">
							<span>
								<i class="fa-regular fa-eye"></i>
							</span>
							<span>
								<i class="fa-regular fa-heart"></i>
							</span>
							<span>
								<i class="fa-solid fa-code-compare"></i>
							</span>
						</div>
					</div>
					<div class="content-card-product">
						<div class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<h3>Botella de 500 ml de Cold Brew</h3>
						<span class="add-cart addProductButton">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$45.00</p>
					</div>
				</div>
				<!---7--->
				<div class="card-product best-sellers">
					<div class="container-img">
						<img src="img/Brownie.PNG" alt="Brownie" />
						<div class="button-group">
							<span>
								<i class="fa-regular fa-eye"></i>
							</span>
							<span>
								<i class="fa-regular fa-heart"></i>
							</span>
							<span>
								<i class="fa-solid fa-code-compare"></i>
							</span>
						</div>
					</div>
					<div class="content-card-product">
						<div class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
						</div>
						<h3>Brownie</h3>
						<span class="add-cart addProductButton">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$14.00</p>
					</div>
				</div>
				<!---8--->
				<div class="card-product best-sellers">
					<div class="container-img">
						<img src="img/Bowls.PNG" alt="Burrito Bolw" />
						<div class="button-group">
							<span>
								<i class="fa-regular fa-eye"></i>
							</span>
							<span>
								<i class="fa-regular fa-heart"></i>
							</span>
							<span>
								<i class="fa-solid fa-code-compare"></i>
							</span>
						</div>
					</div>
					<div class="content-card-product">
						<div class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<h3>Burrito Bolw</h3>
						<span class="add-cart addProductButton">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$24.00</p>
					</div>
				</div>
				<!---9--->
				<div class="card-product best-sellers">
					<div class="container-img">
						<img src="img/coldbrew.jpg" alt="coldbrew" />
						<div class="button-group">
							<span>
								<i class="fa-regular fa-eye"></i>
							</span>
							<span>
								<i class="fa-regular fa-heart"></i>
							</span>
							<span>
								<i class="fa-solid fa-code-compare"></i>
							</span>
						</div>
					</div>
					<div class="content-card-product">
						<div class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
						</div>
						<h3>Coldbrew</h3>
						<span class="add-cart addProductButton">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$14.00</p>
					</div>
				</div>
			</div>
		</section>

		<?php include 'footer.php'; ?>

		<script src="script.js"></script>
		<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>

</html>