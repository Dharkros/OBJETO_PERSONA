<?php
	//Importamos la clase
	require 'clase_persona.php';
	
	//Creamos el objeto
	$objPersona = new Persona();

	//Usamos el metodo para mostra el nombre
	$objPersona->getnombre('Santiago','Amo');
?>