<?php include ('shared/top.php') ?>


<section class="step-by-step">

<nav>

	<ul>

		<li class="done"><span>1</span></li>
		<li class="done"><span>2</span></li>
		<li class="done"><span>3</span></li>
		<li class="current"><span>4</span>Nombre del Paso</li>

	</ul>

</nav>


</section>

<section class="time-remaining">

	<p>Tiempo Restante de Compra:</p>
	<span>04:35</span>

</section>

<section class="day-details">
	<h2>Tipo de Visita</h2>

</section>

<section class="image-rows">

	<figure>
		
		<a href="#"><img src="images/content/familia-kidzania.jpg" alt="" srcset="" /></a>
		<figcaption><a href="#">Entradas para familias</a><figcaption>	
		
	</figure>

	<figure>
		<a href="#"><img src="images/content/grupos-kidzania.jpg" alt="" srcset="" /></a>
		<figcaption><a href="#">Grupos &amp; Eventos</a><figcaption>	
	</figure>

	

</section>

<section class="visit-form">

	<h3>Formulario</h3>

	<form action="#">
		<div class="form-element large-input">
			<label for="register-name">Nombre Completo<span>*</span></label>
			<input type="text" name="register-name" id="register-name" aria-required='true' placeholder="e.g. John Doe" />
		</div>

		<div class="form-element normal-input">
				<label for="register-email">Correo Electrónico<span>*</span></label>
				<input type="email" name="register-email" id="register-email" aria-required='true' placeholder="e.g. john@gmail.com" />
			</div>

		<div class="form-element normal-input">
			<label for="confirm-email">Confirmar Correo Electrónico<span>*</span></label>
			<input type="email" name="confirm-email" id="confirm-email" aria-required='true' placeholder="e.g. john@gmail.com" />
		</div>
		<div class="clearit"></div>
		<div class="form-element petite-input">
			<label for="the-phone">Teléfono<span>*</span></label>
			<input type="text" name="the-phone" id="the-phone" aria-required='true' placeholder="e.g. 2222 - 2222" />
		</div>

		<div class="form-element tiny-input">
			<label for="the-extension">Extensión<span>*</span></label>
			<input type="text" name="the-extension" id="the-extension" aria-required='true' placeholder="e.g. 123" />
		</div>


		<div class="form-element select-input">
			<label for="phone-type">Tipo</label>
			
			<select id="phone-type" name="select-phone-type">
				<option value="hide">-- Seleccione Una Opción --</option>
				<option value="home">Casa</option>
				<option value="mobile">Celular</option>
				<option value="work">Trabajo</option>
				<option value="other">Otro</option>
			</select> 

		</div>
		<div class="clearit"></div>

		<div class="form-element select-input-large">
			
			<label for="request-type">Tipo de Solicitud</label>
			
			<select id="request-type" name="select-request-type">
				<option value="hide">-- ¿Para quién es? --</option>
				<option value="schools">Escuelas</option>
				<option value="companies">Empresas</option>
				<option value="party">Fiestas</option>
				<option value="schools">Escuelas</option>
				
			</select> 
		</div>

		<div class="submit-button">

			<input type="submit" class="submitButton" tabindex="5" value="Crear Cuenta" />

		</div>

	</form>




</section>


<?php include ('shared/bottom.php') ?>

