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
					<h3 class="subtitle is-5">Bienvanido a <strong>Formatealo</strong>. Una app web creada para editar de manera sencilla diferentes templates de documentos word que utiliza los APIs de <a href="https://github.com/PHPOffice" target="_blank">PHPOffice</a></h3>
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
			  <article class="accordion is-active is-info">
			    <div class="accordion-header toggle">
			      <p class="content is-medium">Poder Especial PN o PJ</p>
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