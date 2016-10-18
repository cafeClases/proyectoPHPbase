<?php
	if($isset($_GET["que"])) {
		$queCosa = $_GET["que"];
		$cargar = "[]";
		if($queCosa == "cate") $cargar = get_file_contents("categorias.json");
		if($queCosa == "marc") $cargar = get_file_contents("marcas.json");
		if($queCosa == "prod") $cargar = get_file_contents("productos.json");
		echo $cargar;
	} else {
		echo "[]";
	}
?>