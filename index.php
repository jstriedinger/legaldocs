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
			  <article class="accordion is-dark">
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
			  <article class="accordion is-light">
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
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_capital_autorizado_acciones_total" placeholder="Total acciones C. Autorizado">
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
			  <article class="accordion is-dark">
			    <div class="accordion-header toggle">
			      <p class="content is-medium">Venta de Acciones</p>
			      <button class="toggle" aria-label="toggle"></button>
			    </div>
			    <div class="accordion-body">
			      <div class="accordion-content">
			      	<form action="" method="POST" class="process" id="acciones">
			      		<div class="columns">
			      			<div class="column is-one-third">
			      				<h3 class="title is-5">Balance General corte</h3>
			      				<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="corte_day" placeholder="dia (ej 2)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="corte_year" placeholder="Año (ej 2018)">
								      </p>
								    </div>
								  </div>
								</div>
								<h3 class="title is-5">Fecha del ejercicio</h3>
			      				<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="date_day" placeholder="dia (ej 2)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="date_month" placeholder="Mes (ej Febrero)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="date_year" placeholder="Año (ej 2018)">
								      </p>
								    </div>
								  </div>
								</div>
								<h3 class="title is-5">Ciudad donde se realiza el ejercicio</h3>
			      				<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="city" placeholder="Ej Bogota">
								      </p>
								    </div>
								  </div>
								</div>
			      			</div>
			      			<div class="column is-one-third">
			      				<h3 class="title is-5">Empresa</h3>
			      				<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_name" placeholder="Razon social">
								      </p>
								    </div>
								  </div>
								</div>
								<br>		
								<div class="field">
				      				<label for="" class="label is-small">Tipo de documento a generar</label>
									<div class="control">
										<div class="select is-small">
											<select name="template" required>
											  <option value="contrato-venta-acciones" selected>1 comprador y 1 vendedor</option>
											  <option value="contrato-venta-acciones-compradores">Varios compradores</option>
											  <option value="contrato-venta-acciones-vendedores" >Varios vendedores</option>
											  <option value="contrato-venta-acciones-vendedores-compradores">Varios compradores y vendedores</option>
											</select>
										</div>
									</div>
								</div>
			      			</div>
			      			<div class="column is-one-third">
			      				<h3 class="title is-5">Info de Acta y Articulo Estatutos</h3>
			      				<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="acta_num" placeholder="Num acta">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="articulo" placeholder="Num articulo estatutos">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="acta_date_day" placeholder="Dia (ej 12)">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="acta_date_month" placeholder="Mes (ej febrero)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="acta_date_year" placeholder="Año ej 2018">
								      </p>
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
			      		<hr>
			      		<div class="columns">
			      			<div class="column is-half">
				      			<h3 class="title is-5">Vendedores</h3>
				      			<p class="content is-small">Info de las personas que desean vender sus acciones (max 5)</p>
				      			<div class="field">
									<label for="" class="label is-small">Vendedor #1</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller1_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller1_id" placeholder="Cedula">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller1_city" placeholder="Ciudad residencia">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="number" name="seller1_stock" placeholder="Num acciones" value="0">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller1_stock_type" placeholder="Clase de acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="number" name="seller1_stock_%" placeholder="%participacion (sin %)" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<h4 class="subtitle is-6">Acciones a vender del vendedor #1</h4>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller1_stock_tosale" placeholder="Num acciones a vender" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
									<div class="field-label is-small">
								    <label class="label">Precio total de venta</label>
								  </div>
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller1_stock_total_price" placeholder="Precio venta total" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<hr>
								<div class="field">
									<label for="" class="label is-small">Vendedor #2</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller2_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller2_id" placeholder="Cedula">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller2_city" placeholder="Ciudad residencia">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller2_stock" placeholder="Num acciones" value="0">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller2_stock_type" placeholder="Clase de acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller2_stock_%" placeholder="%participacion (sin %)" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<h4 class="subtitle is-6">Acciones a vender del vendedor #2</h4>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller2_stock_tosale" placeholder="Num acciones a vender" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
									<div class="field-label is-small">
								    <label class="label">Precio total de venta</label>
								  </div>
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller2_stock_total_price" placeholder="Precio venta total" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<hr>
								<div class="field">
									<label for="" class="label is-small">Vendedor #3</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller3_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller3_id" placeholder="Cedula">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller3_city" placeholder="Ciudad residencia">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller3_stock" placeholder="Num acciones" value="0">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller3_stock_type" placeholder="Clase de acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller3_stock_%" placeholder="%participacion (sin %)" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<h4 class="subtitle is-6">Acciones a vender del vendedor #3</h4>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller3_stock_tosale" placeholder="Num acciones a vender" value="0"> 
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
									<div class="field-label is-small">
								    <label class="label">Precio total de venta</label>
								  </div>
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller3_stock_total_price" placeholder="Precio venta total" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<hr>
								<div class="field">
									<label for="" class="label is-small">Vendedor #4</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller4_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller4_id" placeholder="Cedula">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller4_city" placeholder="Ciudad residencia">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller4_stock" placeholder="Num acciones" value="0">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller4_stock_type" placeholder="Clase de acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller4_stock_%" placeholder="%participacion (sin %)" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<h4 class="subtitle is-6">Acciones a vender del vendedor #4</h4>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller4_stock_tosale" placeholder="Num acciones a vender" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
									<div class="field-label is-small">
								    <label class="label">Precio total de venta</label>
								  </div>
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller4_stock_total_price" placeholder="Precio venta total" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<hr>
								<div class="field">
									<label for="" class="label is-small">Vendedor #5</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller5_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller5_id" placeholder="Cedula">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller5_city" placeholder="Ciudad residencia">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller5_stock" placeholder="Num acciones" value="0">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller5_stock_type" placeholder="Clase de acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller5_stock_%" placeholder="%participacion (sin %)" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<h4 class="subtitle is-6">Acciones a vender del vendedor #5</h4>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller5_stock_tosale" placeholder="Num acciones a vender" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
									<div class="field-label is-small">
								    <label class="label">Precio total de venta</label>
								  </div>
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="seller5_stock_total_price" placeholder="Precio venta total" value="0">
								      </p>
								    </div>
								  </div>
								</div>
								<hr>

								

			      			</div>
			      			<div class="column is-half">
				      			<h3 class="title is-5">Compradores</h3>
				      			<p class="content is-small">Info de las personas que desean comprar las acciones (max 5)</p>
				      			<div class="field">
									<label for="" class="label is-small">Comprador #1</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer1_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer1_id" placeholder="Cedula">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer1_city" placeholder="Ciudad residencia">
								      </p>
								    </div>
								  </div>
								</div>
								<h4 class="subtitle is-6">Info acciones comprador #1</h4>
								<p class="content is-small">Aca se dicen cuantos acciones va a comprar dicho comprador y quienes les pertener. Es decir aca se dice comprador #1 compra #X acciones al vendedor #3 por ejemplo.</p>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer1_stock_tobuy" placeholder="Num acciones a comprar">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer1_stock_toexpend" placeholder="Total $">
								      </p>
								    </div>
								    <div class="field">
								      	<div class="select is-small">
											<select name="buyer1_stock_from" required>
											  <option value="seller1" selected>Vendedor #1</option>
											  <option value="seller2">Vendedor #2</option>
											  <option value="seller3">Vendedor #3</option>
											  <option value="seller4">Vendedor #4</option>
											  <option value="seller5">Vendedor #5</option>
											</select>
										</div>
								    </div>
								  </div>
								</div>
								<hr>
								<div class="field">
									<label for="" class="label is-small">Comprador #2</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer2_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer2_id" placeholder="Cedula">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer2_city" placeholder="Ciudad residencia">
								      </p>
								    </div>
								  </div>
								</div>
								<h4 class="subtitle is-6">Info acciones comprador #2</h4>
								<p class="content is-small">Aca se dicen cuantos acciones va a comprar dicho comprador y quienes les pertener. Es decir aca se dice comprador #1 compra #X acciones al vendedor #3 por ejemplo.</p>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer2_stock_tobuy" placeholder="Num acciones a comprar">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer2_stock_toexpend" placeholder="Total $">
								      </p>
								    </div>
								    <div class="field">
								      <div class="select is-small">
										<select name="buyer2_stock_from" required>
										  <option value="seller1" selected>Vendedor #1</option>
										  <option value="seller2">Vendedor #2</option>
										  <option value="seller3">Vendedor #3</option>
										  <option value="seller4">Vendedor #4</option>
										  <option value="seller5">Vendedor #5</option>
										</select>
									</div>
								    </div>
								  </div>
								</div>
								<hr>
								<div class="field">
									<label for="" class="label is-small">Comprador #3</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer3_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer3_id" placeholder="Cedula">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer3_city" placeholder="Ciudad residencia">
								      </p>
								    </div>
								  </div>
								</div>
								<h4 class="subtitle is-6">Info acciones comprador #3</h4>
								<p class="content is-small">Aca se dicen cuantos acciones va a comprar dicho comprador y quienes les pertener. Es decir aca se dice comprador #1 compra #X acciones al vendedor #3 por ejemplo.</p>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer3_stock_tobuy" placeholder="Num acciones a comprar">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer3_stock_toexpend" placeholder="Total $">
								      </p>
								    </div>
								    <div class="field">
								      <div class="select is-small">
										<select name="buyer3_stock_from" required>
										  <option value="seller1" selected>Vendedor #1</option>
										  <option value="seller2">Vendedor #2</option>
										  <option value="seller3">Vendedor #3</option>
										  <option value="seller4">Vendedor #4</option>
										  <option value="seller5">Vendedor #5</option>
										</select>
									</div>
								    </div>
								  </div>
								</div>
								<hr>
								<div class="field">
									<label for="" class="label is-small">Comprador #4</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer4_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer4_id" placeholder="Cedula">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer4_city" placeholder="Ciudad residencia">
								      </p>
								    </div>
								  </div>
								</div>
								<h4 class="subtitle is-6">Info acciones comprador #4</h4>
								<p class="content is-small">Aca se dicen cuantos acciones va a comprar dicho comprador y quienes les pertener. Es decir aca se dice comprador #1 compra #X acciones al vendedor #3 por ejemplo.</p>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer4_stock_tobuy" placeholder="Num acciones a comprar">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer4_stock_toexpend" placeholder="Total $">
								      </p>
								    </div>
								    <div class="field">
								      <div class="select is-small">
										<select name="buyer4_stock_from" required>
										  <option value="seller1" selected>Vendedor #1</option>
										  <option value="seller2">Vendedor #2</option>
										  <option value="seller3">Vendedor #3</option>
										  <option value="seller4">Vendedor #4</option>
										  <option value="seller5">Vendedor #5</option>
										</select>
									</div>
								    </div>
								  </div>
								</div>
								<hr>
								<div class="field">
									<label for="" class="label is-small">Comprador #5</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer5_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer5_id" placeholder="Cedula">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer5_city" placeholder="Ciudad residencia">
								      </p>
								    </div>
								  </div>
								</div>
								<h4 class="subtitle is-6">Info acciones comprador #5</h4>
								<p class="content is-small">Aca se dicen cuantos acciones va a comprar dicho comprador y quienes les pertener. Es decir aca se dice comprador #1 compra #X acciones al vendedor #3 por ejemplo.</p>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer5_stock_tobuy" placeholder="Num acciones a comprar">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="buyer5_stock_toexpend" placeholder="Total $">
								      </p>
								    </div>
								    <div class="field">
								      <div class="select is-small">
										<select name="buyer5_stock_from" required>
										  <option value="seller1" selected>Vendedor #1</option>
										  <option value="seller2">Vendedor #2</option>
										  <option value="seller3">Vendedor #3</option>
										  <option value="seller4">Vendedor #4</option>
										  <option value="seller5">Vendedor #5</option>
										</select>
									</div>
								    </div>
								  </div>
								</div>
								<hr>

			      			</div>
			      		</div>
			      		
			      	</form>
			        
			      </div>
			    </div>
			  </article>
			  <article class="accordion is-light">
			    <div class="accordion-header toggle">
			      <p class="content is-medium">Cesion de Acciones</p>
			      <button class="toggle" aria-label="toggle"></button>
			    </div>
			    <div class="accordion-body">
			      <div class="accordion-content">
			      	<form action="" method="POST" class="process" id="cesion">
			      		<h3 class="title is-5">Info general</h3>
			      		<input type="text" name="accionista1_quorum_name" value="" hidden>
			      		<input type="text" name="accionista1_quorum_stock" value="" hidden>
			      		<input type="text" name="accionista1_quorum_%" value="" hidden>
			      		<input type="text" name="accionista2_quorum_name" value="" hidden>
			      		<input type="text" name="accionista2_quorum_stock" value="" hidden>
			      		<input type="text" name="accionista2_quorum_%" value="" hidden>
			      		<input type="text" name="accionista3_quorum_name" value="" hidden>
			      		<input type="text" name="accionista3_quorum_stock" value="" hidden>
			      		<input type="text" name="accionista3_quorum_%" value="" hidden>
			      		<input type="text" name="accionista4_quorum_name" value="" hidden>
			      		<input type="text" name="accionista4_quorum_stock" value="" hidden>
			      		<input type="text" name="accionista4_quorum_%" value="" hidden>
			      		<input type="text" name="accionista5_quorum_name" value="" hidden>
			      		<input type="text" name="accionista5_quorum_stock" value="" hidden>
			      		<input type="text" name="accionista5_quorum_%" value="" hidden>

			      		<div class="columns">
			      			<div class="column is-half">
			      				<p class="content is-small">Fecha inicio</p>
			      				<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="date_initial_hour" placeholder="Hora (2pm)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="date_day" placeholder="Dia (ej 12)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="date_month" placeholder="Mes (ej Febrero)">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="date_year" placeholder="Año (ej 2018)">
								      </p>
								    </div>
								  </div>
								</div>
								<p class="content is-small">Fecha de firma</p>
			      				<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="date_final_hour" placeholder="Hora (2pm)">
								      </p>
								    </div>
								  </div>
								</div>
			      			</div>
			      			<div class="column is-half">
			      				<h3 class="title is-5">Otra info</h3>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="acta_num" placeholder="Acta num">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="company_name" placeholder="Nombre empresa">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="president_name" placeholder="Nombre Presidente">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="secretary_name" placeholder="Nombre Secretario">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="articulo" placeholder="Articulo sociedad">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="city" placeholder="Ciudad ejercicio">
								      </p>
								    </div>
								  </div>
								</div>
								<br>		
			      			</div>
			      		</div>
			      		<hr>
			      		<div class="columns">
			      			<div class="column is-half">
				      			<h3 class="title is-5">Accionistas</h3>
				      			<p class="content is-small">Solo llene lo que necesite</p>
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
								        <input class="input is-small" type="text" name="accionista1_stock" placeholder="# acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_%" placeholder="% participacion">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field">
									<label class="checkbox">
									  <input type="checkbox" name="accionista1_inquorum">
									  En Quorum?
									</label>
								</div>
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
								        <input class="input is-small" type="text" name="accionista2_stock" placeholder="# acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_%" placeholder="% participacion">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field">
									<label class="checkbox">
									  <input type="checkbox" name="accionista2_inquorum">
									  En Quorum?
									</label>
								</div>
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
								        <input class="input is-small" type="text" name="accionista3_stock" placeholder="# acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_%" placeholder="% participacion">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field">
									<label class="checkbox">
									  <input type="checkbox" name="accionista3_inquorum">
									  En Quorum?
									</label>
								</div>
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
								        <input class="input is-small" type="text" name="accionista4_stock" placeholder="# acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_%" placeholder="% participacion">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field">
									<label class="checkbox">
									  <input type="checkbox" name="accionista4_inquorum">
									  En Quorum?
									</label>
								</div>
								<div class="field">
									<label for="" class="label is-small">Accionista #5</label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista5_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista5_stock" placeholder="# acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista5_%" placeholder="% participacion">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field">
									<label class="checkbox">
									  <input type="checkbox" name="accionista5_inquorum">
									  En Quorum?
									</label>
								</div>

			      			</div>
			      			<div class="column is-half">
			      				<h3 class="title is-5">Titulares y beneficiario</h3>
			      				<h4 class="title is-6">Titulares</h4>
			      				<div class="field">
									<label for="" class="label is-small">Titular #1 </label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="titular1_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="titular1_stock" placeholder="# acciones a ceder">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Titular #2 </label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="titular2_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="titular2_stock" placeholder="# acciones a ceder">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Titular #3 </label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="titular3_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="titular3_stock" placeholder="# acciones a ceder">
								      </p>
								    </div>
								  </div>
								</div>
								
								<h4 class="title is-6">Beneficiarios</h4>
								<div class="field">
									<label for="" class="label is-small">Beneficiario #1 </label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="beneficiario1_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="beneficiario1_stock" placeholder="# acciones a obtener">
								      </p>
								    </div>
								    <div class="field">
								      	<div class="select is-small">
											<select name="beneficiario1_stock_from" required>
											  <option value="titular1" selected>del titular #1</option>
											  <option value="titular2">del titular #2</option>
											  <option value="titular3">del titular #3</option>
											</select>
										</div>
								    </div>
								  </div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Beneficiario #2 </label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="beneficiario2_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="beneficiario2_stock" placeholder="# acciones a obtener">
								      </p>
								    </div>
								    <div class="field">
								      	<div class="select is-small">
											<select name="beneficiario2_stock_from" required>
											  <option value="titular1" selected>del titular #1</option>
											  <option value="titular2">del titular #2</option>
											  <option value="titular3">del titular #3</option>
											</select>
										</div>
								    </div>
								  </div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Beneficiario #3 </label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="beneficiario3_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="beneficiario3_stock" placeholder="# acciones a obtener">
								      </p>
								    </div>
								    <div class="field">
								      	<div class="select is-small">
											<select name="beneficiario3_stock_from" required>
											  <option value="titular1" selected>del titular #1</option>
											  <option value="titular2">del titular #2</option>
											  <option value="titular3">del titular #3</option>
											</select>
										</div>
								    </div>
								  </div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Beneficiario #4 </label>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="beneficiario4_name" placeholder="Nombre completo">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="beneficiario4_stock" placeholder="# acciones a obtener">
								      </p>
								    </div>
								    <div class="field">
								      	<div class="select is-small">
											<select name="beneficiario4_stock_from" required>
											  <option value="titular1" selected>del titular #1</option>
											  <option value="titular2">del titular #2</option>
											  <option value="titular3">del titular #3</option>
											</select>
										</div>
								    </div>
								  </div>
								</div>
								<h3 class="title is-5">Resultado final</h3>
			      				<h4 class="title is-6">Aca poner la info de como quedan los accionistas</h4>
								<div class="field is-horizontal">
								  <div class="field-body">
								  	<div class="field">	
								  		<label class="label is-small" name="accionista1_name_new">Accionista #1</label>
								  	</div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_stock_new" placeholder="Nuevo # de acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista1_%_new" placeholder="nuevo % de participacion">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								  	<div class="field">	
								  		<label class="label is-small" name="accionista2_name_new">Accionista #2</label>
								  	</div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_stock_new" placeholder="Nuevo # de acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista2_%_new" placeholder="nuevo % de participacion">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								  	<div class="field">	
								  		<label class="label is-small" name="accionista3_name_new">Accionista #3</label>
								  	</div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_stock_new" placeholder="Nuevo # de acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista3_%_new" placeholder="nuevo % de participacion">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								  	<div class="field">	
								  		<label class="label is-small" name="accionista4_name_new">Accionista #4</label>
								  	</div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_stock_new" placeholder="Nuevo # de acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista4_%_new" placeholder="nuevo % de participacion">
								      </p>
								    </div>
								  </div>
								</div>
								<div class="field is-horizontal">
								  <div class="field-body">
								  	<div class="field">	
								  		<label class="label is-small" name="accionista5_name_new">Accionista #5</label>
								  	</div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista5_stock_new" placeholder="Nuevo # de acciones">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="accionista5_%_new" placeholder="nuevo % de participacion">
								      </p>
								    </div>
								  </div>
								</div>
								<hr>
								<div class="field">
				      				<label for="" class="label is-small">Tipo de documento</label>
									<div class="control">
										<div class="select is-small">
											<select name="template" required>
											  <option value="cesion-acciones-individual" selected>Un solo cesionario</option>
											  <option value="cesion-acciones-plural">1 Cedente + varios beneficiarios</option>
											  <option value="cesion-acciones-cedentes-y-cesionarios">Varios Cedentes y varios Cesionarios</option>
											  <option value="cesion-acciones-cedentes-y-cesionario">Varios Cedentes y 1 cesionario</option>
											</select>
										</div>
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
			  <article class="accordion is-dark">
			    <div class="accordion-header">
			      <p class="content is-medium">Nombramientos</p>
			      <button class="toggle" aria-label="toggle"></button>
			    </div>
			    <div class="accordion-body">
			      <div class="accordion-content">
					<form action="" method="POST" class="process">
			      	<h3 class="title is-5">Info general</h3>
			      	<div class="columns">
			      		<div class="column is-half">
			      			<div class="field is-horizontal">
								<div class="field-body">
									<div class="field">
									  <p class="control is-expanded">
									    <input class="input is-small" type="text" name="company_name" placeholder="Empresa">
									  </p>
									</div>
									<div class="field">
									  <p class="control is-expanded">
									    <input class="input is-small" type="text" name="acta_num" placeholder="Acta num">
									  </p>
									</div>
									<div class="field">
									  <p class="control is-expanded">
									    <input class="input is-small" type="text" name="acciones_suscritas" placeholder="# acciones suscritas">
									  </p>
									</div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-body">
									<div class="field">
									  <p class="control is-expanded">
									    <input class="input is-small" type="text" name="president_name" placeholder="Presidente de la reunion">
									  </p>
									</div>
									<div class="field">
									  <p class="control is-expanded">
									    <input class="input is-small" type="text" name="secretary_name" placeholder="Secretario de la reunion">
									  </p>
									</div>
								</div>
							</div>
			      		</div>
			      		<div class="column is-half">
			      			<div class="field">
								<label for="" class="label is-small">Fecha inicio y finalizacion de acta</label>
							</div>
			      			<div class="field is-horizontal">
								<div class="field-body">
									<div class="field">
									  <p class="control is-expanded">
									    <input class="input is-small" type="text" name="date_hour" placeholder="Hora inicio (ej 2pm)">
									  </p>
									</div>
									<div class="field">
									  <p class="control is-expanded">
									    <input class="input is-small" type="text" name="date_final_hour" placeholder="Hora final (ej 4pm)">
									  </p>
									</div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-body">
									<div class="field">
									  <p class="control is-expanded">
									    <input class="input is-small" type="text" name="date_day" placeholder="Dia inicio (ej 12)">
									  </p>
									</div>
									<div class="field">
									  <p class="control is-expanded">
									    <input class="input is-small" type="text" name="date_month" placeholder="Mes (ej Febrero)">
									  </p>
									</div>
									<div class="field">
									  <p class="control is-expanded">
									    <input class="input is-small" type="text" name="date_year" placeholder="Año acta (ej 2018)">
									  </p>
									</div>
								</div>
							</div>
							<div class="field">
							  <p class="control is-expanded">
							    <input class="input is-small" type="text" name="city" placeholder="Ciudad donde se lleva la reunion">
							  </p>
							</div>
			      		</div>
			      	</div>
			      	<div class="columns">
			      		<div class="column is-one-third">
			      			<div class="field">
								<label for="" class="label is-small">Nuevo CEO</label>
							</div>
							<br>
							<div class="field">
								<label for="" class="label is-small">Nombre completo</label>
								<div class="control">
									<input class="input is-small" type="text" name="new_ceo_name">
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Cedula</label>
								<div class="control">
									<input class="input is-small" type="text" name="new_ceo_id">
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Fecha de expedicion</label>
								<div class="control">
									<input class="input is-small" type="text" name="new_ceo_date_day" placeholder="dia">
								</div><br>
								<div class="control">
									<input class="input is-small" type="text" name="new_ceo_date_month" placeholder="mes">
								</div><br>
								<div class="control">
									<input class="input is-small" type="text" name="new_ceo_date_year" placeholder="año">
								</div>
							</div>
							<hr>
							<div class="field">
								<label for="" class="label is-small">Suplente Gerente</label>
							</div>
							<div class="field">
								<label for="" class="label is-small">Nombre</label>
								<div class="control">
									<input class="input is-small" type="text" name="new_ceo_suplente_name">
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Cedula</label>
								<div class="control">
									<input class="input is-small" type="text" name="new_ceo_suplente_id">
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Fecha de expedicion</label>
								<div class="control">
									<input class="input is-small" type="text" name="new_ceo_suplente_date_day" placeholder="dia">
								</div><br>
								<div class="control">
									<input class="input is-small" type="text" name="new_ceo_suplente_date_month" placeholder="mes">
								</div><br>
								<div class="control">
									<input class="input is-small" type="text" name="new_ceo_suplente_date_year" placeholder="año">
								</div>
							</div>
			      		</div>
			      		<div class="column is-one-third">
			      			<div class="field">
								<label for="" class="label is-small">Nueva Junta Directa</label>
							</div>
							<br>
							<div class="field is-horizontal">
								<div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="junta1_name" placeholder="Miembro 1">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="reemplazo1_name" placeholder="Reemplazo 1">
								      </p>
								    </div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="junta2_name" placeholder="Miembro 2">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="reemplazo2_name" placeholder="Reemplazo 2">
								      </p>
								    </div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="junta3_name" placeholder="Miembro 3">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="reemplazo3_name" placeholder="Reemplazo 3">
								      </p>
								    </div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="junta4_name" placeholder="Miembro 4">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="reemplazo4_name" placeholder="Reemplazo 4">
								      </p>
								    </div>
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Ciudad CCB</label>
								<div class="control">
									<input class="input is-small" type="text" name="city_ccb" placeholder="Ej Bogota">
								</div><br>
							</div>
			      		</div>
			      		<div class="column is-one-third">
			      			<div class="field">
								<label for="" class="label is-small">Revisor Fiscal y suplente</label>
							</div>
							<div class="field">
								<label for="" class="label is-small">Revisor Fiscal </label>
							</div>
							<div class="field">
								<label for="" class="label is-small">Nombre</label>
								<div class="control">
									<input class="input is-small" type="text" name="revisor_name">
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Tarjeta profesional</label>
								<div class="control">
									<input class="input is-small" type="text" name="revisor_tarjeta">
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Cedula</label>
								<div class="control">
									<input class="input is-small" type="text" name="revisor_id">
								</div>
							</div>
							
							<div class="field">
								<label for="" class="label is-small">Fecha de expedicion</label>
								<div class="control">
									<input class="input is-small" type="text" name="revisor_date_day" placeholder="dia">
								</div><br>
								<div class="control">
									<input class="input is-small" type="text" name="revisor_date_month" placeholder="mes">
								</div><br>
								<div class="control">
									<input class="input is-small" type="text" name="revisor_date_year" placeholder="año">
								</div>
							</div>
							<hr>
							<div class="field">
								<label for="" class="label is-small">Suplente del revisor fiscal</label>
							</div>
							<div class="field">
								<label for="" class="label is-small">Nombre</label>
								<div class="control">
									<input class="input is-small" type="text" name="revisor_suplente_name">
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Tarjeta profesional</label>
								<div class="control">
									<input class="input is-small" type="text" name="revisor_suplente_tarjeta">
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Cedula</label>
								<div class="control">
									<input class="input is-small" type="text" name="revisor_suplente_id">
								</div>
							</div>
							<div class="field">
								<label for="" class="label is-small">Fecha de expedicion</label>
								<div class="control">
									<input class="input is-small" type="text" name="revisor_suplente_date_day" placeholder="dia">
								</div><br>
								<div class="control">
									<input class="input is-small" type="text" name="revisor_suplente_date_month" placeholder="mes">
								</div><br>
								<div class="control">
									<input class="input is-small" type="text" name="revisor_suplente_date_year" placeholder="año">
								</div>
							</div>
			      		</div>
			      	</div>
			      	<div class="columns">
			      		<div class="column is-full">
			      			<div class="field">
			      				<label for="" class="label is-small">Tipo de nombramiento</label>
								<div class="control">
									<div class="select is-small">
										<select name="template" required>
										  <option value="nombramiento-gerente" selected>Gerente</option>
										  <option value="nombramiento-suplente-gerente" selected>Suplente Gerente</option>
										  <option value="nombramiento-revisor-fiscal" selected>Revisor Fiscal</option>
										  <option value="nombramiento-revisor-fiscal-suplente" selected>Suplente Revisor Fiscal</option>
										  <option value="nombramiento-junta-directiva">Junta Directa y reemplazos</option>
										</select>
									</div>
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
			  <article class="accordion is-light">
			    <div class="accordion-header toggle">
			      <p class="content is-medium">Reformas</p>
			      <button class="toggle" aria-label="toggle"></button>
			    </div>
			    <div class="accordion-body">
			      <div class="accordion-content">
			      	<form action="" method="POST" class="process">
				      	<div class="columns">
				      		<div class="column is-one-quarter">
			      				<h4 class="title is-6">Info general</h4>
				      			<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="company_name" placeholder="Empresa">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="acta_num" placeholder="Acta num">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="acciones_suscritas" placeholder="# acciones suscritas">
										  </p>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="president_name" placeholder="Presidente de la reunion">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="secretary_name" placeholder="Secretario de la reunion">
										  </p>
										</div>
									</div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Si hay un cambio en un articulo de los estatudos, diga el num:</label>
									<div class="control">
										<input class="input is-small" type="text" name="articulo">
									</div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Si es acta de cambio de domicilio, escriba la nueva direccion:</label>
									<div class="control">
										<input class="input is-small" type="text" name="dir">
									</div>
								</div>
				      		</div>
				      		<div class="column is-one-quarter">
				      			<h4 class="title is-6">Fecha inicio y finalizacion de acta</h4>
				      			<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="date_hour" placeholder="Hora inicio (ej 2pm)">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="date_final_hour" placeholder="Hora final (ej 4pm)">
										  </p>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="date_day" placeholder="Dia inicio (ej 12)">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="date_month" placeholder="Mes (ej Febrero)">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="date_year" placeholder="Año acta (ej 2018)">
										  </p>
										</div>
									</div>
								</div>
								<div class="field">
								  <p class="control is-expanded">
								    <input class="input is-small" type="text" name="city" placeholder="Ciudad donde se lleva la reunion">
								  </p>
								</div>
								

				      		</div>
				      		<div class="column">
				      			<h4 class="title is-6">Acta Ordinaria</h4>
				      			<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
											<label for="" class="label is-small">Accionista</label>
										</div>
										<div class="field">
											<label for="" class="label is-small"># acciones</label>
										</div>
										<div class="field">
											<label for="" class="label is-small">Capital</label>
										</div>
										<div class="field">
											<label for="" class="label is-small">%</label>
										</div>
										<div class="field has-text-right">
											<label for="" class="label is-small">Aprueba decision?</label>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista1_name" placeholder="Cosme Fulanito">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista1_stock" placeholder="45">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista1_capital" placeholder="5000">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista1_%" placeholder="20">
											</p>
										</div>
										<div class="field" style="width:10em">
											<div class="control">
											  <label class="radio">
											    <input type="radio" name="accionista1_approved" value="Aprueba" >
											    Si
											  </label>
											  <label class="radio">
											    <input type="radio" name="accionista1_approved" value="No aprueba" >
											    No
											  </label>
											</div>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista2_name" placeholder="Cosme Fulanito">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista2_stock" placeholder="45">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista2_capital" placeholder="5000">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista2_%" placeholder="20">
											</p>
										</div>
										<div class="field" style="width:10em">
											<div class="control">
											  <label class="radio">
											    <input type="radio" name="accionista2_approved"  value="Aprueba">
											    Si
											  </label>
											  <label class="radio">
											    <input type="radio" name="accionista2_approved" value="No Aprueba">
											    No
											  </label>
											</div>
										</div>
									</div>

								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista3_name" placeholder="Cosme Fulanito">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista3_stock" placeholder="45">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista3_capital" placeholder="5000">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista3_%" placeholder="20">
											</p>
										</div>
										<div class="field" style="width:10em">
											<div class="control">
											  <label class="radio">
											    <input type="radio" name="accionista3_approved" value="Aprueba" >
											    Si
											  </label>
											  <label class="radio">
											    <input type="radio" name="accionista3_approved" value="No prueba">
											    No
											  </label>
											</div>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista4_name" placeholder="Cosme Fulanito">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista4_stock" placeholder="45">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista4_capital" placeholder="5000">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista4_%" placeholder="20">
											</p>
										</div>
										<div class="field" style="width:10em">
											<div class="control">
											  <label class="radio">
											    <input type="radio" name="accionista4_approved" value="Aprueba">
											    Si
											  </label>
											  <label class="radio">
											    <input type="radio" name="accionista4_approved" value="No aprueba">
											    No
											  </label>
											</div>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista5_name" placeholder="Cosme Fulanito">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista5_stock" placeholder="45">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista5_capital" placeholder="5000">
											</p>
										</div>
										<div class="field">
											<p class="control is-expanded">
											    <input class="input is-small" type="text" name="accionista5_%" placeholder="20">
											</p>
										</div>
										<div class="field" style="width:10em">
											<div class="control">
											  <label class="radio">
											    <input type="radio" name="accionista5_approved" value="Aprueba" >
											    Si
											  </label>
											  <label class="radio">
											    <input type="radio" name="accionista5_approved" value="No aprueba">
											    No
											  </label>
											</div>
										</div>
									</div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Estados financieros al año:</label>
									<p class="control">
									    <input class="input is-small" type="text" name="estados_year" placeholder="2018">
									</p>
								</div>
				      		</div>

				      	</div>
				      	<hr>
				      	<div class="columns">
				      		<div class="column is-full">
					      		<div class="field">
									<label for="" class="label is-small">Moodificacin articulo/objeto social etc</label>
									<div class="control">
										<textarea name="new_stuff" class="textarea is-small"></textarea>
									</div>
								</div>
								<div class="field">
				      				<label for="" class="label is-small">Tipo de acta/reforma</label>
									<div class="control">
										<div class="select is-small">
											<select name="template" required>
											  <option value="reforma-objeto-social" selected>de Objeto Social</option>
											  <option value="reforma-razon-social">de Razón Social</option>
											  <option value="reforma-administracion">de Administración</option>
											  <option value="cambio-de-domicilio">Cambio de domicilio</option>
											  <option value="acta-ordinaria-sociedad-comercial">Ordinaria Sociedad Comercial</option>
											</select>
										</div>
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
			  <article class="accordion is-dark">
			    <div class="accordion-header">
			      <p class="content is-medium">Aumento de capital</p>
			      <button class="toggle" aria-label="toggle"></button>
			    </div>
			    <div class="accordion-body">
			      <div class="accordion-content">
					<form action="" method="POST" class="process">
				      	<div class="columns">
				      		<div class="column is-full">
				      			<h3 class="title is-5">Info general</h3>
				      			<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="company_name" placeholder="Empresa">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="acta_num" placeholder="Acta num">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="acciones_suscritas" placeholder="# acciones suscritas">
										  </p>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="president_name" placeholder="Presidente">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="secretary_name" placeholder="Secretario">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="city" placeholder="Ciudad">
										  </p>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="date_hour" placeholder="Hora inicio">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="date_final_hour" placeholder="final">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="date_day" placeholder="Dia ej 12">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="date_month" placeholder="Mes ej Febrero">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="date_year" placeholder="Año">
										  </p>
										</div>
									</div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Articulo:</label>
									<p class="control">
									    <input class="input is-small" type="text" name="articulo" placeholder="">
									</p>
								</div>
								<div class="field">
									<label for="" class="label is-small">Actualizacion estatutos</label>
									<div class="control">
										<textarea name="new_stuff" class="textarea is-small"></textarea>
									</div>
								</div>
				      		</div>
				      		
				      	</div>
				      	<hr>
				      	<div class="columns">
				      		<div class="column is-full">
				      			<h3 class="title is-5">Acciones nuevas</h3>
				      			<div class="field is-horizontal">
								  <div class="field-body">
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="acciones_new" placeholder="# total acciones nuevas">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="acciones_new_unit_price" placeholder="Valor nominal">
								      </p>
								    </div>
								    <div class="field">
								      <p class="control is-expanded">
								        <input class="input is-small" type="text" name="acciones_new_total_price" placeholder="Valor total">
								      </p>
								    </div>
								  </div>
								</div>
				      			<table class="table">
				      				<thead>
				      					<tr>
				      						<th>Accionista</th>
				      						<th>Acciones suscritas</th>
				      						<th>Capital Suscrito</th>
				      						<th>Participacion suscrito</th>
				      						<th>Acciones pagadas</th>
				      						<th>Capital pagado</th>
				      						<th>Participacion pagado</th>
				      						<th>Verificacion Quorum - acciones</th>
				      						<th>Verificacion Quorum - participacion</th>
				      					</tr>
				      				</thead>
				      				<tbody>
				      					<tr>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista1_name">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista1_stock_suscritas">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista1_capital_suscrito">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista1_%_suscrito">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista1_stock_pagadas">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista1_capital_pagado">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista1_%_pagado">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista1_stock">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista1_%">
												</div>
				      						</td>
				      					</tr>
				      					<tr>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista2_name">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista2_stock_suscritas">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista2_capital_suscrito">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista2_%_suscrito">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista2_stock_pagadas">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista2_capital_pagado">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista2_%_pagado">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista2_stock">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista2_%">
												</div>
				      						</td>
				      					</tr>
				      					<tr>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista3_name">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista3_stock_suscritas">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista3_capital_suscrito">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista3_%_suscrito">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista3_stock_pagadas">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista3_capital_pagado">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista3_%_pagado">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista3_stock">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista3_%">
												</div>
				      						</td>
				      					</tr>
				      					<tr>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista4_name">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista4_stock_suscritas">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista4_capital_suscrito">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista4_%_suscrito">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista4_stock_pagadas">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista4_capital_pagado">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista4_%_pagado">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista4_stock">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista4_%">
												</div>
				      						</td>
				      					</tr>
				      					<tr>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista5_name">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista5_stock_suscritas">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista5_capital_suscrito">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista5_%_suscrito">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista5_stock_pagadas">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista5_capital_pagado">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista5_%_pagado">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista5_stock">
												</div>
				      						</td>
				      						<td>
				      							<div class="control">
													<input class="input is-small" type="text" name="accionista5_%">
												</div>
				      						</td>
				      					</tr>
				      				</tbody>
				      			</table>
				      		</div>
				      	</div>
				      	<div class="columns">	
				      		<div class="column is-half">
				      			<h3 class="title is-5">Resolucion</h3>
				      			<div class="field">
								  <label for="" class="label"> Resolucion #:</label>
								  <p class="control is-expanded">
								    <input class="input is-small" type="text" name="resolucion" placeholder="">
								  </p>
								</div>
				      			<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="resolucion_date_hour" placeholder="Hora inicio (ej 2pm)">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="resolucion_date_final_hour" placeholder="Hora final (ej 4pm)">
										  </p>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="resolucion_date_day" placeholder="Dia inicio (ej 12)">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="resolucion_date_month" placeholder="Mes (ej Febrero)">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="resolucion_date_year" placeholder="Año acta (ej 2018)">
										  </p>
										</div>
									</div>
								</div>
								<div class="field">
								  <label for="" class="label"> Dia habiles de la oferta:</label>
								  <p class="control is-expanded">
								    <input class="input is-small" type="text" name="dias_habiles" placeholder="">
								  </p>
								</div>
				      		</div>
				      		<div class="column is-half">
				      			<h3 class="title is-5">Contrato de Suscripcion</h3>
				      			<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="contrato_date_hour" placeholder="Hora inicio (ej 2pm)">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="contrato_date_final_hour" placeholder="Hora final (ej 4pm)">
										  </p>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="contrato_date_day" placeholder="Dia inicio (ej 12)">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="contrato_date_month" placeholder="Mes (ej Febrero)">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="contrato_date_year" placeholder="Año acta (ej 2018)">
										  </p>
										</div>
									</div>
								</div>
				      		</div>
				      	</div>
				      	<div class="columns">
				      		<div class="column is-full">
				      			<div class="field">
				      				<label for="" class="label is-small">Tipo de acta</label>
									<div class="control">
										<div class="select is-small">
											<select name="template" required>
											  <option value="acta-aumento-capitales" selected>Aumento de capital</option>
											  <option value="acta-aumento-capitales-reglamento-y-suscripcion">Aumento de capital + reglamente y suscripcion</option>
											</select>
										</div>
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
			  <article class="accordion is-light is-active">
			    <div class="accordion-header">
			      <p class="content is-medium">Titulos de acciones</p>
			      <button class="toggle" aria-label="toggle"></button>
			    </div>
			    <div class="accordion-body">
			      <div class="accordion-content">
					<form action="" method="POST" class="process">
				      	<div class="columns">
				      		<div class="column is-half">
				      			<h1 class="title is-5">Si es Doc privado:</h1>
				      			<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="doc_date_day" placeholder="Dia ej 12">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="doc_date_month" placeholder="Mes ej Febrero">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="doc_date_year" placeholder="Año ej 1990">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="doc_city" placeholder="Ciudad">
										  </p>
										</div>
									</div>
								</div>
				      		</div>
				      		<div class="column is-half">
				      			<h3 class="title is-5">Si es Escritura Publica:</h3>
				      			<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="escritura_date_day" placeholder="Dia ej 12">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="escritura_date_month" placeholder="Mes ej Febrero">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="escritura_date_year" placeholder="Año ej 1990">
										  </p>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="escritura_notaria" placeholder="Notaria">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="escritura_notaria_circulo" placeholder="Notaria circulo...">
										  </p>
										</div>
									</div>
								</div>
				      		</div>
				      	</div>
				      	<div class="columns is-centered">
				      		<div class="column is-two-thirds has-text-centered">
				      			<h3 class="title is-5">Registro Mercantil + Info empresa:</h3>
				      			<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="registro_date_day" placeholder="Dia ej 12">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="registro_date_month" placeholder="Mes ej Febrero">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="registro_date_year" placeholder="Año ej 1990">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="registro_num" placeholder="# registro">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="company_name" placeholder="Nombre empresa">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="company_city" placeholder="Ciudad empresa">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="company_nit" placeholder="NIT">
										  </p>
										</div>
									</div>
								</div>
								
				      		</div>
				      	</div>
				      	<div class="columns">
				      		<div class="column is-one-third">
				      			<h3 class="title is-5">Info del accionista:</h3>
				      			<div class="field">
									<label for="" class="label is-small">nombre</label>
									<div class="control">
										<input class="input is-small" type="text" name="accionista_name">
									</div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Cedula</label>
									<div class="control">
										<input class="input is-small" type="text" name="accionista_id">
									</div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Acciones</label>
									<div class="control">
										<input class="input is-small" type="text" name="accionista_stock">
									</div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Valor nominal</label>
									<div class="control">
										<input class="input is-small" type="text" name="accionista_stock_unit_price">
									</div>
								</div>
				      		</div>
				      		<div class="column is-one-third">
				      			<h3 class="title is-5">Info del gerente:</h3>
				      			<div class="field">
									<label for="" class="label is-small">nombre</label>
									<div class="control">
										<input class="input is-small" type="text" name="gerente_name">
									</div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Cedula</label>
									<div class="control">
										<input class="input is-small" type="text" name="gerente_id">
									</div>
								</div>
								<hr>	
								<h3 class="title is-5">Info adicional:</h3>
				      			<div class="field">
									<label for="" class="label is-small">Derecho de preferencia</label>
									<div class="control">
										<input class="input is-small" type="text" name="derecho_preferencia">
									</div>
								</div>
								<div class="field">
									<label for="" class="label is-small">Restriccion a la negociacion</label>
									<div class="control">
										<input class="input is-small" type="text" name="restriccion">
									</div>
								</div>
				      		</div>
				      		<div class="column is-one-third">
				      			<h3 class="title is-5">Nueva escritura publica:</h3>
				      			<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="date_day" placeholder="Dia ej 12">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="date_month" placeholder="Mes ej Febrero">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="escritura_num_new" placeholder="Num escritura">
										  </p>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="escritura_date_month_new" placeholder="Mes escritura">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="escritura_date_year_new" placeholder="Año escritura">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="escritura_notaria_num" placeholder="Notaria">
										  </p>
										</div>
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="escritura_notaria_circulo_new" placeholder="Notaria circulo..">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="escritura_acto_num_new" placeholder="Acto admin #">
										  </p>
										</div>
										
									</div>
								</div>
								<div class="field is-horizontal">
									<div class="field-body">
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="company_new_name" placeholder="Nuevo nombre de empresa">
										  </p>
										</div>
										<div class="field">
										  <p class="control is-expanded">
										    <input class="input is-small" type="text" name="company_new_city" placeholder="Nueva ciudad">
										  </p>
										</div>
									</div>
								</div>
				      		</div>
				      	</div>
				      	<hr>
				      	<div class="columns">
				      		<div class="column is-full">
				      			<div class="field">
				      				<label for="" class="label is-small">Tipo de titulo</label>
									<div class="control">
										<div class="select is-small">
											<select name="template" required>
											  <option value="titulo-acciones" selected>de Doc Privado</option>
											  <option value="titulo-acciones-transformacion">de Escritura Publica</option>
											</select>
										</div>
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
		</div>
	</section>
	<script type="text/javascript" src="./node_modules/bulma-extensions/bulma-accordion/dist/bulma-accordion.min.js"></script>
</body>
</html>