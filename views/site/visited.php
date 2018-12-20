<?php include ('shared/top.php') ?>


<section class="step-by-step">

<nav>

	<ul>

		<li class="done"><span>1</span></li>
		<li class="current"><span>2</span>Nombre del Paso</li>
		<li><span>3</span></li>
		<li><span>4</span></li>

	</ul>

</nav>


</section>

<section class="time-remaining">

	<p>Tiempo Restante de Compra:</p>
	<span>04:35</span>

</section>

<section class="day-details">
	<h2>Día de la Visita</h2>
	<p>Seleccione su día y hora preferida. Favor tomar en consideración que los tiquetes de niños y adultos varia dependiendo de día y hora de la visita.  </p>
	<p>Todo aquel que visite KidZania debe tener un boleto valido, los niños menores de 8 años deben estar acompañados por un adulto (18+)</p>
</section>

<section class="day-code">

	<div class="form-element normal-input">
		<label for="pick-date">Seleccionar Día</label>
		<input type='text' class="datepicker-here" data-position="bottom left" data-language='en' id="pick-date"/>
	</div>

	<div class="form-element normal-input">
		
		<label for="pick-coupon">Ingresar el Código <a href="#" data-tool-tip="marshmallow.chupa chups marshmallow gingerbread Biscuit topping jelly-o bear claw chocolate cake Cupcake ipsum dolor sit amet chocolate cake. ">?</a></label>
		<input type='text' class="coupon-here" id="pick-coupon" />

	</div>


</section>


<section class="tickets-headers">
	<div class="wrap">
		<span class="type">Tipo de Boleto</span>
		<span class="price">Precio</span>
		<span class="tickets">Número de Tiquetes</span>
		<span class="total">Total</span>
	</div>

</section>

<section class="ticket-list">

	<ul>

		<li><span>Tipo de Boleto</span>Niños (1-3 años)</li>

		<li><span>Precio</span>$5</li>
		
		<li><span>Número de Tiquetes</span>
			<div class="wrap-inputs">
				<input type='button' value='-' class='qtyminus' field='quantity' />
				<input type='text' name='quantity' value='0' class='qty' />
				<input type='button' value='+' class='qtyplus' field='quantity' />
			</div>
		</li>	

		<li><span>Total</span>$0.00</li>	

	</ul>

	<ul>
		<li><span>Tipo de Boleto</span>Niños (4 - 15 años)</li>

		<li><span>Precio</span>$25</li>
		
		<li><span>Número de Tiquetes</span>
			<div class="wrap-inputs">
				<input type='button' value='-' class='qtyminus' field='quantity' />
				<input type='text' name='quantity' value='0' class='qty' />
				<input type='button' value='+' class='qtyplus' field='quantity' />
			</div>
		</li>	

		<li><span>Total</span>$0.00</li>	

	</ul>

	

	<ul>
		<li><span>Tipo de Boleto</span>Jóvenes y Adultos(+16)</li>

		<li><span>Precio</span>$10</li>
		
		<li><span>Número de Tiquetes</span>
			<div class="wrap-inputs">
				<input type='button' value='-' class='qtyminus' field='quantity' />
				<input type='text' name='quantity' value='0' class='qty' />
				<input type='button' value='+' class='qtyplus' field='quantity' />
			</div>
		</li>	

		<li>$0.00</li>	

	</ul>

	
</section>

<section class="the-totals">

	<div class="subtotal">
		<span class="header">Subtotal</span>
		<span class="amount">$0.00</span>
	</div>

	<div class="totals">
		<span class="header">Total</span>
		<span class="amount">$0.00</span>
	</div>

</section>


<section class="back-continue">

	<a href="#" class="back">Regresar</a>
	<a href="#" class="continue">Continuar</a>

</section>


<?php include ('shared/bottom.php') ?>
