<?php
    $titulo="Servicios";
    include 'Templates/header.php';
    include 'Templates/navegation.php';
    include 'inc/funciones.php';

?>

<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="Img1/servicios_02.png" class="Imagen-hero img-fluid w-100">
            <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
        </div>
    </div>
</div>
<div class="container pt-4">
    <div class="row">
        <main class="my-2 col-lg-9 contenido-principal">
            <h2 class="d-block d-md-none text-uppercase text-center">
                Servicios
            </h2>

            <div id="servicios">
                <div class="card">
                    <div class="card-header text-center" id="servicio1">
                        <h2 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1"
                                aria-expanded="true" aria-controls="#descripcion1">
                                CENTRO DE COPIADO
                            </button>
                        </h2>
                    </div>
                    <!--.card-header-->
                    <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">
                        <div class=" text-justify nuevo-sitio py-1">
                            <h1 class="text-justify text-uppercase mt-4 encabezado-servicio">
                                <span class="text-lowercase text-justify m-3 d-block"> La calidad de la copia es muy
                                    importante,
                                    contamos con equipos que nos permiten ofrecer una copia de alta calidad y
                                    rapidez, ya que contamos con tres maquinas que ofrecen hasta 50 copias por
                                    minuto</span>
                            </h1>
                        </div>
                        <div class="card-body ">
                            <div class="container-fluid no-gutters">
                                <div class="row text-center">
                                    <div class="col-5 col-md-4 text-center" style="border-right: 4px solid orange;">
                                        <h4 class="text-center" style=" color:#dd3333"><em>Papeles</em></h4>
                                        <p>Bond</p>
                                        <p>Bond color</p>
                                        <p>Papel Reciclado</p>
                                        <p>Opalina</p>
                                        <p>Acetato</p>
                                    </div>
                                    <div class="col-7 col-md-4 ">
                                        <p>
                                            Duplicación de documentos
                                        </p>
                                        <p>
                                            Ampliación hasta 400%
                                        </p>
                                        <p>
                                            Copia de documentos notariales
                                        </p>
                                        <p>
                                            Copy producción
                                        </p>
                                    </div>
                                    <div class="col-12  py-2 col-md-4 d-flex align-items-center ">
                                        <img src="./Img1/Servicio_copias.jpg" class="imagen-copia img-fluid w-100"
                                            alt="copias">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--.card-->

                    <div class="card">
                        <div class="card-header text-center" id="servicio2">
                            <h2 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2"
                                    aria-expanded="true" aria-controls="#descripcion1">
                                    IMPRESION LASER
                                </button>
                            </h2>
                        </div>
                        <!--.card-header-->
                        <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="#servicios">
                            <div class="nuevo-sitio py-1">
                                <h1 class="text-center text-uppercase mt-4 encabezado-servicio">
                                    <span class=" text-justify m-4 text-lowercase d-block"> La fidelidad de la impresion
                                        es muy importante,
                                        contamos con equipos que nos permiten ofrecer una impresion de alta calidad y
                                        rapidez.</span>
                                </h1>
                            </div>
                            <div class="card-body ">
                                <div class="container-fluid no-gutters">
                                    <div class="row text-center">
                                        <div class="col-5 col-md-4 text-center">
                                            <h4 class="text-center" style=" color:#dd3333"><em>Papeles</em></h4>
                                            <p>Bond</p>
                                            <p>Bond color</p>
                                            <p>Papel Reciclado</p>
                                            <p>Opalina</p>
                                            <p>Acetato</p>
                                        </div>
                                        <div class="col-7 col-md-4 " style="border-right: 4px solid orange;">
                                            <p>
                                                Impresión tamaño 11x17"
                                            </p>
                                            <p>
                                                Ampliación hasta 400%
                                            </p>
                                            <p>
                                                Fotografías
                                            </p>
                                            <p>
                                                Escáner gran formato Copia gran formato
                                            </p>
                                            <p>
                                                Escáner gran formato Copia gran formato
                                            </p>
                                        </div>
                                        <div class="col-12  py-2 col-md-4 d-flex align-items-center ">
                                            <img src="./Img1/impresion_laser.jpg" class="imagen-copia img-fluid w-100"
                                                alt="copias">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--.card-->

                    <div class="card">
                        <div class="card-header text-center" id="servicio3">
                            <h2 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3"
                                    aria-expanded="true" aria-controls="#descripcion3">
                                    ANILLADOS-EMPASTADOS
                                </button>
                            </h2>
                        </div>
                        <!--.card-header-->
                        <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="#servicios">
                            <div class="nuevo-sitio py-1">
                                <h1 class="text-center text-uppercase mt-4 encabezado-servicio">
                                    <span class=" text-justify m-4 text-lowercase d-block"> Un buen terminado resalta la
                                        importancia de un
                                        documento, le ofrecemos opciones diferentes que se ajustan a su exigencia y
                                        presupuesto.</span>
                                </h1>
                            </div>
                            <div class="card-body ">
                                <div class="container-fluid no-gutters">
                                    <div class="row text-center">
                                        <div class="col-5 col-md-4 text-center" style="border-right: 4px solid orange;">
                                            <h4 class="text-center" style=" color:#dd3333"><em>Materiales</em></h4>
                                            <p>Materiales</p>
                                            <p>Anillo doble o Espiral</p>
                                            <p>Belovinder</p>
                                            <p>Tipo empastado</p>
                                        </div>
                                        <div class="col-7 col-md-4 ">
                                            <p>
                                                Encuadernación
                                            </p>
                                            <p>
                                                Plastificado
                                            </p>
                                            <p>
                                                Clonado
                                            </p>
                                            <p>
                                                Empastado
                                            </p>
                                        </div>
                                        <div
                                            class=" d-none d-md-block col-12  py-2 col-md-4 d-flex align-items-center ">
                                            <div id="carouselExampleIndicators" class="carousel slide"
                                                data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                        class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner contnedor-inner"
                                                    style="width: 250px;height: 200px;">
                                                    <div class="carousel-item active">
                                                        <img src="Img1/ETR-empastados.jpg"
                                                            class="imagen-servicio img-fluid w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="Img1/anillado.jpg"
                                                            class="Imagen-servicio img-fluid w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="Img1/belovainder.jpg"
                                                            class="Imagen-servicio img-fluid w-100" alt="...">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                    role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                    role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--.card-->
                </div>

        </main>
        <!--Menu-->

        <aside class="d-none d-md-block col-lg-3 pt-4 pt-lg-0">
            <div class="sidebar p-4">
                <h2 class="text-center text-uppercase mt-4">Nuevos Clientes</h2>
                <p class="lead text-center mt-4">
                    Recibe 10% de descuento con este cupón
                </p>

                <div class="cupon px-2 py-5 mt-5">
                    <p class="text-uppercase text-center mb-0">
                        <span class="display-4">10% Descuento</span> <br> en tu primera compra
                    </p>
                </div>
            </div>
        </aside>
        <!--Judiciales-->
        <section class=" col-lg-12  nuevo-sitio py-5">
            <h1 class="text-center text-uppercase mt-4 encabezado-Rama">
                <span class="text-uppercase d-block"> Rama Judicial </span>
            </h1>
            <p class="d-none d-md-block text-center text-uppercase mt-4">Somo especialistas en el area Judicial </p>
        </section>



        <div class="container">
            <div id="servicios">
                <div class="card">
                    <div class="card-header text-center" id="servicio5">
                        <h2 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion5"
                                aria-expanded="true" aria-controls="#descripcion1">
                                ACCIONES CONSTITUCIONALES "(RAMA JUDICIAL)"
                            </button>
                        </h2>
                    </div>
                    <!--.card-header-->
                    <div id="descripcion5" class="collapse show" aria-labelledby="servicio5" data-parent="#servicios">
                        <div class="nuevo-sitio_1 py-1">
                            <div class="row">
                                <div class=" text-justify col-12 col-sm-6 col-md-8 col-lg-6 "
                                    style="border-right: 4px solid orange;">
                                    <?php
                            $productos = ObtenerParametro(4);
                            while($producto= $productos->fetch_assoc()){
                            ?>
                                    <ul class="list-group">
                                        <a href="servicios.php?id=<?php echo $producto['id'];?>#Ramajudicial">
                                            <li class="list-group-item">
                                                <?php echo $producto ['nombre'];?>
                                            </li>
                                        </a>

                                    </ul>
                                    <?php 
                                                                    }
                                    ?>
                                </div>

                                <?php 
                                
                                    if(isset($_GET['id']) ){

                                    if (filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
                                        $producto_id =$_GET['id'];
                                        
                                    } else {
                                        header('location: 404.html');
                                        exit;
                                    }
                                    
                                $resultado = obtenerId1($producto_id);
                                $producto1= $resultado->fetch_assoc();
                                
                                ?>

                                <div id="Ramajudicial<?php echo $producto1['id'];?>"
                                    class=" text-justify col-12 col-sm-6 col-md-4 col-lg-6">
                                    <h2 class="text-center text-lo">¿<?php echo $producto1 ['nombre'];?>?</h2>
                                    <p>
                                        <?php echo $producto1 ['descripcion'];?>
                                    </p>
                                    <?php 
                                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="container">
        <div id="servicios">
            <div class="card align-self">
                <div class="card-header text-center" id="servicio6">
                    <h2 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion6"
                            aria-expanded="true" aria-controls="#descripcion6">
                            POLIZAS JUDICIALES & DE CUMPLIMIENTO
                        </button>
                    </h2>
                </div>
                <!--.card-header-->
                <div id="descripcion6" class="collapse show" aria-labelledby="servicio6" data-parent="#servicios">
                    <div class="nuevo-sitio_1 py-1">
                        <div class="d-none mb-4 offset-4 col-12 co-sm-6 col-lg-4">
                            <img src="Img1/seguros_estado.png" class="img-fluid w-100">
                        </div>

                        <div class=" mb-4  col-12 co-sm-6 col-lg-4">
                            <img src="Img1/seguros_estado.png" class="img-fluid w-100">
                        </div>
                        <div class="row">
                            <div class=" text-justify col-12 col-sm-6 col-md-8 col-lg-6 "
                                style="border-right: 4px solid orange;">
                                <ul class=" list-group">
                                    <li class="list-group-item">POLIZAS PENALES DE 1-5 </li>
                                    <li class="list-group-item">POLIZAS DE RESPONSABILIDAD CIVIL</li>
                                    <li class="list-group-item">POLIZAS CIVILES "(ART:599,602,384 & 382)"</li>
                                    <li class="list-group-item">SOATS</li>
                                    <li class="list-group-item">POLIZAS TODO RIESGO</li>
                                </ul>
                            </div>
                            <div class=" text-justify col-12 col-sm-6 col-md-4 col-lg-6">
                                <h2 class="text-center text-lo">
                                    TASAS POLIZAS PENALES
                                </h2>
                                <div class="d-none d-md-block">
                                    <table class="table table-hover  table-bordered  text-center mt-3">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">SMLVG</th>
                                                <th class="text-center">SALARIO</th>
                                                <th class="text-center">PRECIO POLIZA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>UN(1)</td>
                                                <td>$877.803</td>
                                                <td>$146,245</td>
                                            </tr>

                                            <tr>
                                                <td>DOS(2)</td>
                                                <td>$1.755,606</td>
                                                <td>$292,490</td>
                                            </tr>
                                            <tr>
                                                <td>TRES(3)</td>
                                                <td>$2.633.409</td>
                                                <td>$387.222</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        </div>       
        <div></div>




    </div>
</div>

<!---REALIZA UNA CONSUTLA-->

<div class="citas container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 text-center">
            <h3 class="text-uppercase">Realiza una consulta </h3>
            <p class="mt-5 text-uppercase text-justify">
                No dudes en realiar una pregunta,
                <br> en transcurso de 24 horas respondemos tu solicitud
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
<!---FOOTER-->

<?php
    include 'Templates/footer.php';
    
    ?>