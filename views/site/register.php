<?php include ('shared/top.php') ?>


<section class="form-fields">

	<h2>Regístrate</h2>

	<form action="home.php">

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

		<div class="form-element normal-input">
			<label for="register-password">Contraseña<span>*</span></label>
			<input type="password" name="register-password" id="register-password" aria-required='true' />
			<button class="show"></button>
		</div>

		<div class="form-element normal-input">
			<label for="confirm-password">Confirmar Contraseña<span>*</span></label>
			<input type="password" name="confirm-password" id="confirm-password" aria-required='true' class="mypw" />
			<button class="show"></button>
		</div>
		
		
		<div class="wrap">
			
			<div class="terms-conditions control-group">
				<label class="control control--checkbox">Cupcake ipsum dolor sit amet I love jelly beans pie pie.
					<input type="checkbox" />
					<div class="control__indicator"></div>
				</label>
				
				<span class="required">* Todos los campos son obligatorios</span>

			</div>

		</div>

		<div class="submit-button">

			<input type="submit" class="submitButton" tabindex="5" value="Crear Cuenta" />

		</div>
		

	</form>

</section>

<?php include ('shared/bottom.php') ?>
