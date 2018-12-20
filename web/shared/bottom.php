<?php
use  yii\helpers\Html;
?>
<footer>

    <img src="images/content/kizania-logo-colored.svg" alt="" class="logo-footer" />

    <nav class="icons">

        <a href="#"><img src="images/content/facebook-footer.svg" alt=""></a>
        <a href="#"><img src="images/content/instagram-footer.svg" alt=""></a>
        <a href="#"><img src="images/content/youtube-footer.svg" alt=""></a>

    </nav>

    <div class="notice">

        <p>© 2018 KidZania y todos los personajes y elementos relacionados son marcas registradas de KidZania Costa Rica.  </p>
        <p>Todos los derechos reservados. <a href="#">Política de Privacidad</a></p>

    </div>


    <nav class="bottom-links">

        <h3>Uso Interno</h3>
        <ul>
            <li><?php  ?></li>
            <li> <?= Html::a('Inicio', ['site/index']) ?></li>
            <li> <?= Html::a('Registrar', ['site/register']) ?></li>
            <li> <?= Html::a('Dia de la Visita', ['site/visited']) ?></li>
            <li> <?= Html::a('Personalize', ['site/personalize']) ?></li>
            <li> <?= Html::a('Logear Para Compra', ['site/concrete-sign']) ?></li>
            <li> <?= Html::a('Informacion Compra Completa', ['site/concrete-details']) ?></li>
            <li> <?= Html::a('Compra Completa', ['site/purchase-complete']) ?></li>
            <li> <?= Html::a('Tipo de Visita', ['site/type-visit']) ?></li>
        </ul>
    </nav>

</footer>


	<script>
		$('.ziehharmonika').ziehharmonika({
            collapsible: true,
        });


        $(document).ready(function() {

            $("#slider-home").sliderResponsive({
            // Using default everything
                slidePause: 7500,
                fadeSpeed: 1000,
                // autoPlay: "on",
                // showArrows: "off",
                // hideDots: "off",
                // hoverZoom: "on",
                // titleBarTop: "off"
            });


        });


	</script>

    <script src="js/select.js"></script>
