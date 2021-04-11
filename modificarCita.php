
    <!-- Modal -->
    <!--Update table Events -->

    <?php include('partials/header.php') ?>


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
                <a class="navbar-brand" href="index.php">Menu</a>
                <a class="navbar-brand" href="reservarCita.php">Reservar Citas</a>
                <a class="navbar-brand" href="modificarCita.php">Modificar Citas</a>
            </div>
        </div>
    
    </nav>

    <div id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!--usar  en action editEventDate.php o editEventTitle.php -->

                <form class="form-horizontal" method="POST" action="editEventTitle.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modificar Cita</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="color" class="col-sm-2 control-label">Tipo de Cita</label>
                            <div class="col-sm-10">
                                <select name="color" class="form-control" id="tipoCita">
                                    <option value="">Seleccionar</option>
                                    <option style="color:#0071c5;" value="#0071c5">&#9724; Hospitalizacion</option>
                                    <option style="color:#40E0D0;" value="#40E0D0">&#9724; Medicina Inerna</option>
                                    <option style="color:#008000;" value="#008000">&#9724; Odontologia</option>
                                    <option style="color:#FFD700;" value="#FFD700">&#9724; Traumatologiía</option>
                                    <option style="color:#FF8C00;" value="#FF8C00">&#9724; Cirugía</option>
                                    <option style="color:#FF0000;" value="#FF0000">&#9724; Reproduccion</option>
                                    <option style="color:#000;" value="#000">&#9724; Negro</option>

                                    <option style="color:#0071c5;" value="#0071c5">&#9724; Ecografias</option>
                                    <option style="color:#40E0D0;" value="#40E0D0">&#9724; Endoscopías</option>
                                    <option style="color:#008000;" value="#008000">&#9724; Residencia</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="start" class="col-sm-2 control-label">Fecha </label>
                            <div class="col-sm-10">
                                <input type="text" name="fecha" class="form-control" id="fecha" placeholder="ingrese la Fecha  por: yyyy-mm-dd">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Estado</label>
                            <div class="col-sm-10">
                                <input type="text" name="estado" class="form-control" id="estado" placeholder="Estado" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label class="text-danger"><input type="checkbox" name="delete"> Eliminar
                                        Cita</label>
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