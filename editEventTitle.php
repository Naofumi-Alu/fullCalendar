<?php
// Conexion a la base de datos
require_once('bdd.php');

//Borra la cita

if (isset($_POST['delete']) && isset($_POST['fecha']) && isset($_POST['tipoCita'])) {


	$fecha = $_POST['fecha'];
	$tipoCita = $_POST['tipoCita'];

	$sql = "DELETE FROM events WHERE fecha = '$fecha' and tipoCita ='$tipoCita' ";

	$query = $bdd->prepare($sql);
	if ($query == false) {
		print_r($bdd->errorInfo());
		die('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
		print_r($query->errorInfo());
		die('Erreur execute');
	}

// Modifica la Cita solamente	
} else if (isset($_POST['tipoCita']) && isset($_POST['fecha'])) {

	$tipoCita = $_POST['tipoCita'];
	$fecha = $_POST['fecha'];

	$sql = "UPDATE events SET  tipoCita = '$tipoCita', fecha = '$fecha' WHERE id = '$id' ";


	$query = $bdd->prepare($sql);
	if ($query == false) {
		print_r($bdd->errorInfo());
		die('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
		print_r($query->errorInfo());
		die('Erreur execute');
	}
}
header('Location: index.php');
