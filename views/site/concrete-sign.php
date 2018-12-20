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
	<h2>Concretar Compra</h2>

</section>

<section class="sign-and-review">

	<div class="sign-in">

		<div class="the-box">

			<h3>Inicia Sesión para Finalizar Tu Compra</h3>

			<a href="#" class="fb-button">Iniciar Sesión con Facebook</a>

			<h3>Si tenés cuenta con nosotros, ingresá tus datos</h3>

			<div class="form-element large-input">
				<label for="register-name">Nombre Completo</label>
				<input type="text" name="register-name" id="register-name" aria-required='true' placeholder="e.g. John Doe" />
			</div>

			<div class="form-element large-input">
				<label for="register-password">Contraseña</label>
				<input type="password" name="register-password" id="register-password" aria-required='true' />
				<button class="show"></button>
			</div>

			<div class="gritty-details control-group">
				
				<div class="wrap-radio remember">
					<label class="control control--checkbox">Recordarme
						<input type="checkbox" />
						<div class="control__indicator"></div>
					</label>
					

				</div>

				<div class="lost-pw">
					<a href="#">¿Olvidó su contraseña?</a>
				</div>
				

			</div>

			<div class="submit-button">

				<input type="submit" class="submitButton" tabindex="5" value="Crear Cuenta" />

			</div>

			<div class="new-user">
			¿Nuevo Usuario? <a href="#">Registrarse</a>
			</div>

		</div>

		
	</div><!-- sign-in -->



	<div class="review">

		<span class="header">Resumen</span>
		
		<div class="review-headers layed-down">
			<span class="type">Tipo de Boleto</span>
			<span class="name">Nombre</span>
			<span class="tickets">Código de Tiquetes</span>
			<span class="price">Precio</span>
		</div>

		<ul class="review-info">

			<li>Niños (4-16)</li>
			<li>Juan Perez</li>
			<li>XXXXXX5C7</li>
			<li>$0.00</li>
			<li>Niños (4-16)</li>
			<li>Juan Perez</li>
			<li>XXXXXX5C7</li>
			<li>$0.00</li>
			<li>Niños (4-16)</li>
			<li>Juan Perez</li>
			<li>XXXXXX5C7</li>
			<li>$0.00</li>
			<li>Niños (4-16)</li>
			<li>Juan Perez</li>
			<li>XXXXXX5C7</li>
			<li>$0.00</li>
		
		</ul>

		<div class="date-id-review layed-down">
			<span class="date">Fecha de Visita</span>
			<span class="number">Número de Confirmación</span>
		</div>

		<ul class="date-info layed-down">

			<li>08 de Abril, 2019</li>
			<li>XXXXXXXXXXMZ2</li>

		</ul>

		<div class="the-totals">
			<span class="coupon">Cupón</span>
			<span class="coupon-amount">N/A</span>
			<span class="subtotal">Subtotal</span>
			<span class="subtotal-amount">$00.00</span>
			<span class="total">Total</span>
			<span class="total-amount">$00.00</span>
		</div>

	</div><!-- review -->


</section>

<?php include ('shared/bottom.php') ?>

