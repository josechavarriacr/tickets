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

	<div class="sign-in payment-details">

		<div class="the-box">

			<h3>Detalles de Pago</h3>

			<div class="form-element large-input">
				<label for="register-name">Nombre Completo</label>
				<input type="text" name="register-name" id="register-name" aria-required='true' placeholder="e.g. John Doe" />
			</div>

			<div class="form-element large-input">
				<label for="register-card">Número de Tarjeta</label>
				<input type="text" name="register-card" id="register-card" aria-required='true' placeholder="E.g. 6655 8844 2233 5599" />
			</div>

			<div class="form-element normal-input">
				<label for="expiration-card">Fecha de Expiración</label>
				<input type="text" name="expiration-card" id="expiration-card" aria-required='true' placeholder="MM/AA" />
			</div>

			<div class="form-element normal-input">
				<label for="ccv-card">Código CCV <a href="#" data-tool-tip="marshmallow.chupa chups marshmallow gingerbread Biscuit topping jelly-o bear claw chocolate cake Cupcake ipsum dolor sit amet chocolate cake. ">?</a></label>
				<input type="text" name="ccv-card" id="ccv-card" aria-required='true' placeholder="MM/AA" />
			</div>

			<section class="back-continue">

				<a href="#" class="back">Cancelar</a>

				<div class="submit-button">

					<input type="submit" class="submitButton" tabindex="5" value="Crear Cuenta" />

				</div>

			</section>

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
