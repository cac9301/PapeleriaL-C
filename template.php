<?php
    include 'Templates/header.php';
    include 'Templates/navegation.php';

?>
    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="img/nosotros.jpg" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5">Titulo aqui</h2>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
            <main class="col-lg-8 contenido-principal">
                <h1 class="text-center text-uppercase mt-5 encabezado">
                    <span class="text-lowercase d-block">Conoce Nuestro </span> personal
                </h1>
                <div class="row">
                    <div class="col-md-4 ">
                        <a href="#" data-target="#imagen_1" data-toggle="modal">
                            <img src="/Img1/Padre_pequeño.jpeg" class="img-avatar img-fluid w-100">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" data-target="#imagen_2" data-toggle="modal">
                            <img src="/Img1/carlos.jpeg" class="img-avatar img-fluid w-100">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" data-target="#imagen_3" data-toggle="modal">
                            <img src="/Img1/equipo_de_trabajo.jpeg" class="img-avatar img-fluid w-100">
                        </a>
                    </div>
                </div>

                <!--Modal-->

                <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imagen_1">Carlos Arturo Carmona</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4 pt-5">
                                            <img src="/Img1/Padre_pequeño.jpeg" class=" w-100 img-fluid">
                                        </div>
                                        <div class="clase-modal col-md-8 ml-auto">
                                            <p>
                                                <span>Representante legal</span>
                                                <br></br>
                                                en la acutalidad desempeña el cargo de propietario del establecimiento local comercia L&C
                                                <ul>
                                                    <li>
                                                        profesion:Comunicador Social
                                                    </li>
                                                    <li>edad: 55 años</li>
                                                    <li>
                                                        cargo : propietario
                                                    </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imagen_2">Carlos Arturo Carmona Larrotta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4 pt-5">
                                            <img src="/Img1/carlos.jpeg" class=" w-100 img-fluid">
                                        </div>
                                        <div class="clase-modal col-md-8 ml-auto">
                                            <p>
                                                <span>administrador</span>
                                                <br></br>
                                                en la acutalidad desempeña el cargo de propietario del establecimiento local comercia L&C
                                                <ul>
                                                    <li>
                                                        profesion:Comunicador Social
                                                    </li>
                                                    <li>edad: 55 años</li>
                                                    <li>
                                                        cargo : propietario
                                                    </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imagen_3">Carlos Arturo Carmona Larrotta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4 pt-5">
                                            <img src="/Img1/equipo_de_trabajo.jpeg" class=" w-100 img-fluid">
                                        </div>
                                        <div class="clase-modal col-md-8 ml-auto">
                                            <p>
                                                <span>administrador</span>
                                                <br></br>
                                                en la acutalidad desempeña el cargo de propietario del establecimiento local comercia L&C
                                                <ul>
                                                    <li>
                                                        profesion:Comunicador Social
                                                    </li>
                                                    <li>edad: 55 años</li>
                                                    <li>
                                                        cargo : propietario
                                                    </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>

            <aside class="col-lg-4 pt-4 pt-lg-0">
                <div class="sidebar">
                    <h2 class="text-center text-uppercase mt-4">Algo aqui</h2>

                </div>
            </aside>
        </div>
    </div>

<?php
    include 'Templates/footer.php';
    
?>