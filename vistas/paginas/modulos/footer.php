<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid py-4 d-none d-md-block">
	
	<div class="container">
		
		<div class="row">

		<!-- GRID CATEGORÍAS FOOTER -->
			
			<div class="col-md-7 col-lg-6">
				
				<div class="p-1 bg-white gridFooter">

					<div class="container p-0">

						<div class="d-flex">

							<div class="d-flex flex-column columna1">
							
								<figure class="p-2 m-0 photo1" vinculo="<?php echo $categorias[1]["ruta_categoria"] ?>" style="background:url(<?php echo $blog["dominio"];?><?php echo $categorias[1]["img_categoria"] ?>)">
									
									<p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categorias[1]["descripcion_categoria"] ?></p>

								</figure>

								<figure class="p-2 m-0 photo2" vinculo="<?php echo $categorias[0]["ruta_categoria"] ?>" style="background:url(<?php echo $blog["dominio"];?><?php echo $categorias[0]["img_categoria"] ?>)">
									
									<p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categorias[0]["descripcion_categoria"] ?></p>

								</figure>								

							</div>

							<div class="d-flex flex-column flex-fill columna2">

								<div class="d-block d-md-flex">

									<figure class="p-2 m-0 flex-fill photo3" vinculo="<?php echo $categorias[3]["ruta_categoria"] ?>" style="background:url(<?php echo $blog["dominio"];?><?php echo $categorias[3]["img_categoria"] ?>)">

										<p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categorias[3]["descripcion_categoria"] ?></p>
										
									</figure>

									<figure class="p-2 m-0 flex-fill photo4" vinculo="<?php echo $categorias[4]["ruta_categoria"] ?>" style="background:url(<?php echo $blog["dominio"];?><?php echo $categorias[4]["img_categoria"] ?>)">
										
										<p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categorias[4]["descripcion_categoria"] ?></p>

									</figure>

								</div>

								<figure class="p-2 m-0 photo5" vinculo="<?php echo $categorias[5]["ruta_categoria"] ?>" style="background:url(<?php echo $blog["dominio"];?><?php echo $categorias[5]["img_categoria"] ?>)">

									<p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categorias[5]["descripcion_categoria"] ?></p>
									
								</figure>

							</div>

						</div>

					</div>

				</div>
					
			</div>

			<div class="d-none d-lg-block col-lg-1 col-xl-2"></div>

			<!-- NEWLETTER -->

			<div class="col-md-5 col-lg-5 col-xl-4 pt-5">
				
				<h6>Inscríbete en nuestro newletter:</h6>

				<div class="input-group my-4">
					
					<input type="text" class="form-control" placeholder="Ingresa tu Email">

					<div class="input-group-append">
						
						<span class="btn btn-info text-white">Inscribirse</span>

					</div>

				</div>

				<div class="p-0 w-100 pt-2">
				
					<ul class="d-flex justify-content-left p-0">
						
					<ul class="d-flex justify-content-end pt-3 mt-1">

					<div class="d-none d-md-block col-md-2 redes">
				
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
			</div>
			
					</ul>

				</div>

			</div>

		</div>

	</div>

</footer>