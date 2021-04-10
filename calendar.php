<!--Calendario -->

<?php include('partials/header.php') ?>

<body>

    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>FullCalendar PHP MySQL</h1>
                <p class="lead"></p>
                <div id="calendar" class="col-centered">
                    <h1>Formularios</h1>
                </div>
            </div>

        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="calendar.php">Calendario</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Menu</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- Modal -->
    <!-- formulario de eventos calendario -->


    <div id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">


                <form class="form-horizontal" method="POST" action="addEvent.php">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Agregar Evento</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Titulo</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="color" class="col-sm-2 control-label">Color</label>
                            <div class="col-sm-10">
                                <select name="color" class="form-control" id="color">
                                    <option value="">Seleccionar</option>
                                    <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
                                    <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                                    <option style="color:#008000;" value="#008000">&#9724; Verde</option>
                                    <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
                                    <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
                                    <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                                    <option style="color:#000;" value="#000">&#9724; Negro</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start" class="col-sm-2 control-label">Fecha Inicial</label>
                            <div class="col-sm-10">
                                <input type="text" name="start" class="form-control" id="start" placeholder="ingrese la Fecha inicial por: yyyy-mm-dd">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="end" class="col-sm-2 control-label">Fecha Final</label>
                            <div class="col-sm-10">
                                <input type="text" name="end" class="form-control" id="end" placeholder="ingrese la Fecha final por: yyyy-mm-dd">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->




    <!-- Modal -->
    <!--Update table Events -->


    <div id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!--usar  en action editEventDate.php o editEventTitle.php -->

                <form class="form-horizontal" method="POST" action="editEventTitle.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modificar Evento</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Titulo</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="color" class="col-sm-2 control-label">Color</label>
                            <div class="col-sm-10">
                                <select name="color" class="form-control" id="color">
                                    <option value="">Seleccionar</option>
                                    <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
                                    <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                                    <option style="color:#008000;" value="#008000">&#9724; Verde</option>
                                    <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
                                    <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
                                    <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                                    <option style="color:#000;" value="#000">&#9724; Negro</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Id</label>
                            <div class="col-sm-10">
                                <input type="text" name="id" class="form-control" id="id" placeholder="id">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label class="text-danger"><input type="checkbox" name="delete"> Eliminar
                                        Evento</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <?php include('partials/footer.php') ?>