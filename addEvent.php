<?php

// Conexion a la base de datos
require_once('bdd.php');

//Formatea las fechas start y end entrantes por POST

//date_format ($_POST['start'] , 'YYYY-MM-DD HH:mm:ss' );

//date_format ($_POST['end'] , 'YYYY-MM-DD HH:mm:ss' );

//format('YYYY-MM-DD HH:mm:ss');

if (isset($_POST['estado']) && isset($_POST['fecha']) && isset($_POST['tipoCita'])){
	
	$estado = $_POST['estado'];
	$fecha = $_POST['fecha'] ;
	$tipoCita = $_POST['tipoCita'];

	$sql = "INSERT INTO events(estado, fecha, TipoCita) values ('$estado', '$fecha', '$tipoCita')";
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
