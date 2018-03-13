<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./dist/css/main.css">
	<script type="text/javascript" src="./dist/js/main.js"></script>
</head>
<body>
	<div class="section hero is-info is-bold">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-two-thirds has-text-centered">
					<h1 class="title is-2 is-uppercase is-spaced">formatealo</h1>
					<h3 class="subtitle is-5">Bienvenido a <strong>Formatealo</strong>. Una app web creada para editar de manera sencilla diferentes templates de documentos word que utiliza los APIs de <a href="https://github.com/PHPOffice" target="_blank">PHPOffice</a></h3>
				</div>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="container">
			<div class="columns">
				<div class="column is-two-thirds">
					<h2 class="title is-4">¿Cómo funciona?</h2>
					<p class="content">Sencillamente elegi en la lista la plantilla que deseas editar, ahí apareceran las variables disponibles y, cuando estes lista, haz clic en el botón de "crear documento". Según la plantilla puede que hayan mas de un botón para crear documento. </p>
				</div>
				<div class="column is-one-third has-text-right-desktop">
					<h2 class="title is-4">¿Deseas agregar nuevas plantillas?</h2>
					<p class="content">Escribe a <a href="mailto:jstriedinger@gmail.com">jstriedinger2090@gmail.com</a>.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<section class="accordions">
			  <article class="accordion is-info">
			    <div class="accordion-header">
			      <p class="content is-medium">Poder Especial PN o PJ</p>
			      <button class="toggle" aria-label="toggle"></button>
			    </div>
			    <div class="accordion-body">
			      <div class="accordion-content">
					<form action="" method="POST" class="process">
			      	<div class="columns">
			      		<div class="column is-one-third">
			      			<h3 class="title is-5">Poderdante</h3>
			      			<div class="field">
								<label for="" class="label is-small">Nombre</label>
								<div class="control">
									<input class="input is-small" type="text" name="poderdante_name"required>
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Cedula</label>
								<div class="control">
									<input class="input is-small" type="text" name="poderdante_id" required>
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Residencia</label>
								<div class="control">
									<input class="input is-small" type="text" name="poderdante_address" required>
								</div>
							</div>
						</div>
						<div class="column is-one-third">
							<h3 class="title is-5">Apoderado</h3>
			      			<div class="field">
								<label for="" class="label is-small">Nombre</label>
								<div class="control">
									<input class="input is-small" type="text" name="apoderado_name"required>
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Cedula</label>
								<div class="control">
									<input class="input is-small" type="text" name="apoderado_id" required>
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Tarjeta profesional</label>
								<div class="control">
									<input class="input is-small" type="text" name="apoderado_tarjeta" required>
								</div>
							</div>
			      		</div>
			      		<div class="column is-one-third">
			      			<h3 class="title is-5">Info empresa*</h3>
			      			<h5 class="subtitle is-7">Solo aplica si es poder para persona juridica</h5>
			      			<div class="field">
			      				<label for="" class="label is-small">Nombre</label>
			      				<div class="control">
									<input class="input is-small" type="text" name="company_name">
								</div>
							</div>
							<div class="field">
			      				<label for="" class="label is-small">NIT</label>
			      				<div class="control">
									<input class="input is-small" type="text" name="company_id">
								</div>
							</div>
							<div class="field">
			      				<label for="" class="label is-small">Cedula Representante Legal</label>
			      				<div class="control">
									<input class="input is-small" type="text" name="company_rlegal_id">
								</div>
							</div>
			      		</div>
			      	</div>
			      	<div class="columns">
			      		<div class="column is-one-third">
			      			<h3 class="title is-5">Extra info</h3>
			      			<div class="field">
			      				<label for="" class="label is-small">Tipo de persona</label>
								<div class="control">
									<div class="select is-small">
										<select name="template" required>
										  <option value="PoderEspecialPN" selected>Para Persona Natural</option>
										  <option value="PoderEspecialPJ">Para Persona Juridica</option>
										</select>
									</div>
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Dirigido a</label>
								<div class="control">
									<input class="input is-small" type="text" name="dirigido_a" required>
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Actuación</label>
								<div class="control">
									<textarea name="actuacion" class="textarea is-small"></textarea>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<br>
									<button class="button is-primary is-rounded is-medium" type="submit">Generar Documento</button>
								</div>
							</div>
			      		</div>
			      	</div>
						
					</form>
			      </div>
			    </div>
			  </article>
			  <article class="accordion is-active is-success">
			    <div class="accordion-header toggle">
			      <p class="content is-medium">Estatutos</p>
			      <button class="toggle" aria-label="toggle"></button>
			    </div>
			    <div class="accordion-body">
			      <div class="accordion-content">
			      	<form action="" method="POST" class="process" id="estatutos">
			      		<div class="columns">
			      			<div class="column is-half">
				      			<h3 class="title is-5">Accionistas</h3>
				      			<p class="content is-small">Max. 4. Solo llene los espacios que necesita. Si un accionista tiene un nombre que no sea vacio se tendra en cuenta en la creacion del documento</p>
				      			<div class="field">
									<label for="" class="label is-small">Accionista #1</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_id" placeholder="Cedula completo">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_city" placeholder="Ciudad">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_country" placeholder="Pais" value="Colombia">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_asuscritas" placeholder="Acciones suscritas">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_csuscrito" placeholder="Capital suscrito">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_suscrito_participacion" placeholder="Participacion ej 50%">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_apagadas" placeholder="Acciones pagadas">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_cpagado" placeholder="Capital pagado">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_pagado_participacion" placeholder="Participacion ej 50%">
								      </p>
								    </div>
								  </div>
								</div>
								<!-- #2 -->

								<div class="field">
									<label for="" class="label is-small">Accionista #2</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_id" placeholder="Cedula completo">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_city" placeholder="Ciudad">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_country" placeholder="Pais" value="Colombia">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_asuscritas" placeholder="Acciones suscritas">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_csuscrito" placeholder="Capital suscrito">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_suscrito_participacion" placeholder="Participacion ej 50%">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_apagadas" placeholder="Acciones pagadas">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_cpagado" placeholder="Capital pagado">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_pagado_participacion" placeholder="Participacion ej 50%">
								      </p>
								    </div>
								  </div>
								</div>
								<!-- #3 -->

								<div class="field">
									<label for="" class="label is-small">Accionista #3</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_id" placeholder="Cedula completo">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_city" placeholder="Ciudad">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_country" placeholder="Pais" value="Colombia">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_asuscritas" placeholder="Acciones suscritas">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_csuscrito" placeholder="Capital suscrito">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_suscrito_participacion" placeholder="Participacion ej 50%">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_apagadas" placeholder="Acciones pagadas">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_cpagado" placeholder="Capital pagado">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_pagado_participacion" placeholder="Participacion ej 50%">
								      </p>
								    </div>
								  </div>
								</div>
								<!-- #4 -->

								<div class="field">
									<label for="" class="label is-small">Accionista #4</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_id" placeholder="Cedula completo">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_city" placeholder="Ciudad">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_country" placeholder="Pais" value="Colombia">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_asuscritas" placeholder="Acciones suscritas">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_csuscrito" placeholder="Capital suscrito">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_suscrito_participacion" placeholder="Participacion ej 50%">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_apagadas" placeholder="Acciones pagadas">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_cpagado" placeholder="Capital pagado">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_pagado_participacion" placeholder="Participacion ej 50%">
								      </p>
								    </div>
								  </div>
								</div>
			      			</div>
			      			<div class="column is-half">
			      				<h3 class="title is-5">Empresa</h3>
			      				<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_name" placeholder="Razon social">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_id" placeholder="Registro Mercantil">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_city" placeholder="Ciudad">
								      </p>
								    </div>
								  </div>
								</div>
								<label for="" class="label is-small">Fecha de constitucion</label>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_date_day" placeholder="Dia (ej 21)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_date_month" placeholder="Mes (ej febrero)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_date_year" placeholder="Año (ej 2018)">
								      </p>
								    </div>
								  </div>
								</div>
								<label for="" class="label is-small">Objeto social</label>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_objective" placeholder="Objeto social">
								      </p>
								    </div>
								  </div>
								</div>
								<label for="" class="label is-small">Info de acciones</label>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_capital_autorizado" placeholder="Capital autorizado">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_capital_suscrito" placeholder="Capital suscrito">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_capital_pagado" placeholder="Capital pagado">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_capital_suscrito_acciones_total" placeholder="Total acciones C. Suscrito">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_capital_pagado_acciones_total" placeholder="Total acciones C. Pagado">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_acciones_nominal" placeholder="Valor nominal accion">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_acciones_total" placeholder="# total de acciones">
								      </p>
								    </div>
								  </div>
								</div>
								<br>	
								<h3 class="title is-5">Gerentes</h3>
								
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="gerente1_name" placeholder="Nombre gerente #1">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="gerente1_id" placeholder="Cedula gerente #1">
								      </p>
								    </div>
								  </div>
								</div>
								<label for="" class="label is-small">Fecha expedicion (gerente #1)</label>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="gerente1_id_date_day" placeholder="Dia (ej 12)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="gerente1_id_date_month" placeholder="Mes (ej Febrero)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="gerente1_id_date_year" placeholder="Año (ej 2018)">
								      </p>
								    </div>
								  </div>
								</div>
								<label for="" class="label is-small">Gerente #2 (O pues, suplente del gerente)</label>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="gerente2_name" placeholder="Nombre gerente #2">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="gerente2_id" placeholder="Cedula gerente #2">
								      </p>
								    </div>
								  </div>
								</div>
								<label for="" class="label is-small">Fecha expedicion (gerente #2)</label>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="gerente2_id_date_day" placeholder="Dia (ej 12)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="gerente2_id_date_month" placeholder="Mes (ej Febrero)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="gerente2_id_date_year" placeholder="Año (ej 2018)">
								      </p>
								    </div>
								  </div>
								</div>
								<br>
								<div class="field">
									<label for="" class="label is-small">Cuantia</label>
									<div class="control">
										<input class="input is-small" type="text" name="gerente_cuantia"required>
									</div>
								</div>
								<br>		
								<div class="field">
				      				<label for="" class="label is-small">Tipo de documento a generar</label>
									<div class="control">
										<div class="select is-small">
											<select name="template" required>
											  <option value="Estatutos-adm-neutra" selected>Admin Neutral Normal</option>
											  <option value="Estatutos-adm-neutra-sin-cuantia">Admin Neutral Sin Cuantia</option>
											  <option value="Estatutos-adm-compartida" >Admin Compartida Normal</option>
											  <option value="Estatutos-adm-compartida">Admin Compartida Sin Cuantia</option>
											  <option value="Estatutos-a-favor-gerente">A favor del Gerente</option>
											  <option value="Estatutos-a-favor-gerente-sin-cuantia">A favor del Gerente SIN cuantia</option>
											</select>
										</div>
									</div>
								</div>
								<br>	
								<div class="field">
									<div class="control">
										<br>
										<button class="button is-primary is-rounded is-medium" type="submit">Generar Documento</button>
									</div>
								</div>
			      			</div>
			      		</div>
			      	</form>
			        
			      </div>
			    </div>
			  </article>
			  <article class="accordion">
			    <div class="accordion-header">
			      <p>Hello World</p>
			      <button class="toggle" aria-label="toggle"></button>
			    </div>
			    <div class="accordion-body">
			      <div class="accordion-content">
			        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
			      </div>
			    </div>
			  </article>
			</section>
		</div>
	</section>
	<script type="text/javascript" src="./node_modules/bulma-extensions/bulma-accordion/dist/bulma-accordion.min.js"></script>
</body>
</html>