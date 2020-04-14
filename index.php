<?php
    $titulo="inicio";
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
                <img class="Imagen-hero img-fluid w-100" src="Img1/slide_01.jpg" alt="Nuestras Instalaciones">
            </a>
            <div class="carousel-caption">
                <h3 class="text-uppercase">Centro de Copiado</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="Imagen-hero img-fluid w-100" src="Img1/slide_02.jpg" alt="Conoce nuestros servicios">
            <div class="carousel-caption">
                <h3 class="text-uppercase h3-hero" style="color: black;">Acciones Constitucionales</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="Imagen-hero img-fluid w-100" src="Img1/slide_03.jpg" alt="Promoción">
            <div class="carousel-caption">
                <h3 class="text-uppercase">MUCHOS MAS Servicios</h3>
            </div>
        </div>
        <div class="carousel-item active">
            <a href="servicios.php#ramaJudicial">
            <img class="Imagen-hero img-fluid w-100" src="Img1/slide_04_poliza.jpg" alt="Promoción">
            <div class="carousel-caption">
                <h3 class="text-uppercase">Polizas Judiciales</h3>
            </div>
            </a>
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
<!---SPAN-->
<section class="  nuevo-sitio py-5">
    <h1 class="text-center text-uppercase mt-4 encabezado">
        <span class="text-lowercase d-block">bienvenido a nuestro </span> sitio Web
    </h1>
    <p class="d-none d-md-block text-center text-uppercase mt-4">La Mejor Asesoria Personalizada en Organizacion De
        Demandas<br> Danos el Gusto de Atenderte.</p>
</section>

<!---CONTENEDOR DE LOS 3 CARDS-->
<div class="container mb-5">
    <div class="row">
        <div class="col-sm-6 col-md-4 text-center mb-4">
            <div class="imagen-servicio">
                <img src="Img1/Nostros_familia.jpeg" class="Imagen-servicio img-fluid w-100">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-10 pt-4 servicio-info">
                        <h2 class="text-center text-uppercase encabezado">
                            <span class="text-lowercase d-block">Conoce sobre</span> nosotros
                        </h2>
                        <a href="nosotros.php" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                    </div>
                </div>
                <!--.row-->
            </div>
            <!--.imagen-destacada-->
        </div>
        <!--.col-md-4-->
        <div class="col-sm-6 col-md-4 text-center mb-4">
            <div class="imagen-servicio">
                <img src="Img1/servicios_02.png" class=" Imagen-servicio img-fluid w-100">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-10 pt-4 servicio-info">
                        <h2 class="text-center text-uppercase encabezado">
                            <span class="text-lowercase d-block">Nuestros</span> servicios
                        </h2>
                        <a href="servicios.php" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                    </div>
                </div>
                <!--.row-->
            </div>
            <!--.imagen-destacada-->
        </div>
        <div class="col-sm-6 col-md-4 text-center mb-4">
            <div class="imagen-servicio">
                <img src="Img1/Productos.jpg" class=" Imagen-servicio img-fluid w-100">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-10 pt-4 servicio-info">
                        <h2 class="text-center text-uppercase encabezado">
                            <span class="text-lowercase d-block"></span> Productos en Maqueta
                        </h2>
                        <a href="productos.php" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                    </div>
                </div>
                <!--.row-->
            </div>
        </div>
    </div>

</div>
<!--.col-md-4-->
</div>
</div>

<!---HORARIOS-->
<div class="horario">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-4">
                <h2 class="text-center text-uppercase mt-5">Horarios</h2>
                <p class="text-justify mt-3 lead">
                    Calidad, cumplimiento y sentido de responsablidad por nuestros cliente es lo que garantiza nuestro
                    sello de autenticidad al momento de trabajar.
                    <br>
                    </br> Nuestros horarios de atencion son:
                </p>
                <div class="d-none d-md-block">
                    <table class=" table table-hover text-center mt-3">
                        <thead>
                            <tr>
                                <th class="text-center">Día</th>
                                <th class="text-center">De</th>
                                <th class="text-center">Hasta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lunes</td>
                                <td>06:30 AM</td>
                                <td>06:00 PM</td>
                            </tr>
                            <tr>
                                <td>Martes</td>
                                <td>06:30 AM</td>
                                <td>06:00 PM</td>
                            </tr>
                            <tr>
                                <td>Miércoles</td>
                                <td>06:30 AM</td>
                                <td>06:00 PM</td>
                            </tr>
                            <tr>
                                <td>Jueves</td>
                                <td>06:30 AM</td>
                                <td>06:00 PM</td>
                            </tr>
                            <tr>
                                <td>Viernes</td>
                                <td>06:30 AM</td>
                                <td>06:00 PM</td>
                            </tr>
                            <tr>
                                <td>Sábado</td>
                                <td>08:00 AM</td>
                                <td>05:00 PM</td>
                            </tr>
                            <tr>
                                <td>Domingo</td>
                                <td>Cerrado</td>
                                <td>Cerrado</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <table class=" d-sm-none table table-hover text-center mt-3">
                    <thead>
                        <tr>
                            <th class="text-center">LUNES </th>
                            <th class="text-center">- A -</th>
                            <th class="text-center">VIERNES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>jornada Continua</td>
                            <td>06:30 AM</td>
                            <td>06:00 PM</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class=" d-none d-md-block col-6 col-md-6 bg-horario"></div>
        </div>
    </div>
</div>

<!---PRODUCTOS-->
<section class=" d-none d-md-block productos container py-5">
    <h2 class="encabezado text-center text-uppercase mt-4">
        <span class="text-lowercase d-block">nuestros</span> productos
    </h2>
    <div class="row py-5">
        <?php
            $productos = ObtenerParametros(4);
            while($producto= $productos->fetch_assoc()){
        ?>
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href="producto.php?id=<?php echo $producto['id'];?>">
                    <img class="imagen-productos w-100 img-fluid card-img-top" src="Img1/<?php echo $producto['imagen_mini'];?>">
                    <div class="card-body">
                        <h3 class="card-title text-center text-uppercase"><?php echo $producto ['nombre'];?></h3>
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
        </div>
        <!--.col-md-3-->
        <?php
        }
        ?>

    </div>
    <!--.row-->
</section>
<!---REALIZA UNA CONSUTLA-->

<div class="citas container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 text-center">
            <h3 class="text-uppercase">Realiza una consulta </h3>
            <p class="mt-5 text-uppercase text-justify">
                No dudes en realizar una pregunta,
                <br> en el transcurso de 24 horas respondemos tu solicitud
                </br>
            </p>
            <ul style="list-style: none;">
                <li>¿tienes dudas sobre tus derechos?</li>
                <li>¿Necesitas algun tramite ante la rama Judicial?</li>
                <li>¿Necesitas un dependiente Judicial?</li>
                <li>¿Necesitas algun certificado Judcial?</li>
            </ul>
            <a href="https://api.whatsapp.com/send?phone=573155220121&amp;text=&amp;source=&amp;data= "
                class="btn btn-primary mt-3 text-uppercase ">
                <i class="fa fa-whatsapp" aria-hidden="true"></i> Escribenos
            </a>
        </div>
    </div>
</div>

<?php
    include 'Templates/footer.php';
    
?>