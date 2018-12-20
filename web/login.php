<?php include ('shared/top.php') ?>


<section class="form-fields">

	<h2>Ingresa tu Cuenta</h2>

	<form action="#">

		<div class="form-element normal-input">
			<label for="register-email">Correo Electrónico<span>*</span></label>
			<input type="email" name="register-email" id="register-email" aria-required='true' placeholder="e.g. john@gmail.com" />
		</div>

		
		<div class="form-element normal-input">
			<label for="register-password">Contraseña<span>*</span></label>
			<input type="password" name="register-password" id="register-password" aria-required='true' />
		</div>

		

		<div class="submit-button">

			<input type="submit" class="submitButton" tabindex="5" value="Crear Cuenta" />

		</div>

		<p class="new-user">¿Nuevo Usuario? <a href="#">Registrarse</a></p>
		

	</form>

</section>

<?php include ('shared/bottom.php') ?>
