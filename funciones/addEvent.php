<?php

// Conexion a la base de datos
require_once('bdd.php');

//Formatea las fechas start y end entrantes por POST

//date_format ($_POST['start'] , 'YYYY-MM-DD HH:mm:ss' );

//date_format ($_POST['end'] , 'YYYY-MM-DD HH:mm:ss' );

//format('YYYY-MM-DD HH:mm:ss');

if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	$start = $_POST['start'] ;
	$end = $_POST['end'];
	$color = $_POST['color'];

	$sql = "INSERT INTO events(title, start, end, color) values ('$title', '$start', '$end', '$color')";
	
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
