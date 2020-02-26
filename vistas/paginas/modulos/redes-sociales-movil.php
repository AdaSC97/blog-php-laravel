<!--=====================================
REDES SOCIALES PARA MÓVIL
======================================-->

<div class="d-block d-md-none redes redesMovil p-0 bg-white w-100 pt-2">
				
	<ul class="d-flex justify-content-center p-0">
	<ul class="d-flex justify-content-end pt-3 mt-1">
				<?php
				$redes_sociales = json_decode($blog["redes_sociales"], true);
				
				foreach($redes_sociales as $key => $value){

					echo 
					'<li>
						<a href="'.$value["url"].'" target="_blank">
						<img src= "'.$blog["dominio"].''.$value["icono"].'" width="40" heigth="40" style="margin: 0 5px 0 0">
						</a>
					</li>';

				}
				?>
	</ul>

</div>