<?php
	$lasOpcionesMenu = array(
		"1" => array("texto" => "Opción A", "href" => "./index.php"),
		"2" => array("texto" => "Opción B", "href" => "./opcionb.php"),
		"3" => array("texto" => "Opción C", "href" => "./opcionc.php"),
		"4" => array("texto" => "Opción D", "href" => "./opciond.php"),
	);
	if(!isset($paginaActiva)) $paginaActiva = 1;
?>
<header>
	<div class="titulo">
		
	</div>
	<nav class="menu">
		<ul id="opciones">
			<?php
				forEach( $lasOpcionesMenu as $estaOpcion => $cadaOpcion ) { ?>
					<li>
						<?php if( $estaOpcion == $paginaActiva ) echo "<strong>"; ?>
						<a href="<?php echo $cadaOpcion["href"];?>"><?php echo $cadaOpcion["texto"];?></a>
						<?php if( $estaOpcion == $paginaActiva ) echo "</strong>"; ?>
					</li>
				<?php }
			?>
		</ul>
	</nav>
</header>