<?php
    $titulo="productos";  
    include 'Templates/header.php';
    include 'Templates/navegation.php';
    include 'inc/funciones.php';
?>

<div class="container">
    <div id="slider-principal" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
            <li data-target="#slider-principal" data-slide-to="1"></li>
            <li data-target="#slider-principal" data-slide-to="2"></li>
            <li data-target="#slider-principal" data-slide-to="3"></li>
        </ol>


        <div class="carousel-item">
            <a href="servicios.html">
                <img class="Imagen-hero img-fluid w-100" src="Img1/slide_productos/slide1.jpeg"
                    alt="Nuestras Instalaciones">
            </a>
            <div class="carousel-caption">
                <h3 class="text-uppercase">TODO PARA REALIZAR TUS MAQUETAS</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="Imagen-hero img-fluid w-100" src="Img1/slide_productos/slide2.jpeg"
                alt="Conoce nuestros servicios ">
            <div class="carousel-caption">
                <h3 class="text-uppercase">TODO PARA REALIZAR TUS MAQUETAS</h3>
            </div>
        </div>
        <div class="carousel-item ">
            <img class="Imagen-hero img-fluid w-100 " src="Img1/slide_productos/slide3.jpeg " alt="Promoción ">
            <div class="carousel-caption">
                <h3 class="text-uppercase">TODO PARA REALIZAR TUS MAQUETAS</h3>
            </div>
        </div>
        <div class="carousel-item active ">
            <img class="Imagen-hero img-fluid w-100 " src="Img1/slide_productos/slide4.jpeg " alt="Promoción ">
            <div class="carousel-caption">
                <h3 class="text-uppercase">TODO PARA REALIZAR TUS MAQUETAS</h3>
            </div>
        </div>

        <!--.carousel-item-->


        <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a href="#slider-principal" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
    </div>
</div>


<div class="container pt-4 productos">
    <div class="row">
        <main class="col-lg-12 contenido-principal">
            <h2 class="d-md-block text-uppercase text-center ">Productos</h2>
            <h2 class="d-block d-md-none text-uppercase text-center">
                Productos
            </h2>

            <div class="row">
                <div class="card-columns">
                    <?php
                    $productos = ObtenerParametros(10);
                    while($producto= $productos->fetch_assoc()){
                    
                ?>
                    <div class="card">
                        <a href="producto.php?id=<?php echo $producto['id'];?>">
                            <img class="imagen-productos w-100 img-fluid card-img-top"
                                src="Img1/<?php echo $producto['imagen_mini'];?>">
                            <div class="card-body">
                                <h3 class="card-title text-center text-uppercase"><?php echo $producto ['nombre'];?>
                                </h3>
                                <p class="card-text text-uppercase">
                                    <?php echo $producto ['descripcion_corta'];?>
                                </p>
                                <p class="precio mb-0 lead text-center">
                                    <?php echo $producto ['precio'];?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <!--.card-->
                    <?php
                                                                }
                ?>
                    <!--.card-columns-->
                </div>
            </div>
        </main>


    </div>
</div>


<!---FOOTER-->

<?php
    include 'Templates/footer.php';
    
?>