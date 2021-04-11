<?php include('partials/header.php') ?>

<body>

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

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Menu Inicio</h1>
                <p class="lead">En esta Seccion puede ir la configuracion de un perfil tipo Facebook pero  <strong>para mascotas</strong></p>
                <div id="calendar" class="col-centered">
                </div>
            </div>

        </div>
    </div>

    <?php include('partials/footer.php') ?>