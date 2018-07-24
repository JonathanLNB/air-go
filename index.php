<?
    $datos2 = file("PHP/Config.php");
    $datos = fopen("PHP/Config.php", "w");
    $visitas = explode(" ", $datos2[1]);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Air Go</title>
		<link rel="icon" type="image/gif" href="images/icono.png" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/font-lombok.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<script>

	</script>
	<h2 id="visitas" style="color: white">Visitantes:
        <?
            echo $visitas[1];
            fwrite($datos,"<?\nvisitas ".($visitas[1]+1)." \n?>");
            fclose($datos);
        ?>
    </h2>
	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<header>
                    <br>
					<h1>AIR GO</h1>
					<p>#LOVETHEOUTSIDE</p>
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly-middle">¿Qué es?</a>
				</footer>
			</section>

		<!-- Banner -->
			<section id="banner">
				<header>
					<h6>Air go</h6>
					<img height="180px" src="images/go.png">
				</header>
				<p>Un chaleco para el uso profesional, con la facilidad del trabajo de día a día. <br/>Con este practico y novedoso chaleco podrán tener la opción de tener 13 extras tales como:<br/> Cargador de teléfono, impermeable, bolsa para guardar tarjetas y dinero, bolígrafo, lentes, audífonos, etc.</p>
				<footer>
					<a href="PHP/Compra.php" class="button style2 scrolly">Comprar 💸</a>
				</footer>
			</section>

			<article class="container box style2">
				<header>
					<h2>Nuestras característica</h2>
				</header>
				<div class="inner gallery">
					<div class="row gtr-0">
						<div class="col-3 col-12-mobile"><a href="images/fulls/botella.jpg" class="image fit"><img style="border-radius: 12%" src="images/thumbs/botella.jpg" alt="" title="Bolsillo para botella de agua y papel higiénico." /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/camara.jpg"  class="image fit"><img style="border-radius: 12%" src="images/thumbs/camara.jpg" alt="" title="Bolsillo para cámara." /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/cargador.jpg"  class="image fit"><img style="border-radius: 12%" height="150" src="images/thumbs/cargador.jpg" alt="" title="Bolsillo para cargador portátil." /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/celular.jpg"  class="image fit"><img style="border-radius: 12%" height="150" src="images/thumbs/celular.jpg" alt="" title="Bolsillo para tú celular y audifonos." /></a></div>
					</div>
					<div class="row gtr-0">
						<div class="col-3 col-12-mobile"><a href="images/fulls/dolar.jpg" class="image fite"><img style="border-radius: 12%" src="images/thumbs/dolar.jpg" alt="" title="Bolsa para documentos y dinero." /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/lentes.jpg" class="image fite"><img style="border-radius: 12%" src="images/thumbs/lentes.jpg" alt="" title="Bolsillo para lentes de sol, además de un limpiador de gafas" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/lluvia.jpg" class="image fite"><img style="border-radius: 12%" src="images/thumbs/lluvia.jpg" alt="" title="Un impermeable." /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/tarjetas.jpg" class="image fite"><img style="border-radius: 12%" src="images/thumbs/tarjetas.jpg" alt="" title="Bolsillo para tarjetero." /></a></div>
					</div>
				</div>
			</article>

		<!-- Feature 1 -->
			<article id="mision" class="container box style1 right">
				<a href="#" class="image fit"><img src="images/mision.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Misión</h2>
					</header>
					<p>Ayudar a transportar lo que desees de manera segura, fácil y con estilo, para que seas libre de vivir tu vida activa. Creemos en el valor de una vida activa, tanto si estás en la ciudad como en plena Naturaleza.</p>
				</div>
			</article>

		<!-- Feature 2 -->
			<article id="vision" class="container box style1 left">
				<a href="#" class="image fit"><img src="images/vision.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Visión</h2>
					</header>
					<p>Ser una empresa de personas unidas por la pasión de ayudar a las familias activas y a los entusiastas del aire libre. Ofreciendo productos que motiven a llevar un estilo de vida activo, que sea seguro y fáciles de usar.</p>
				</div>
			</article>


			<article id="valores" class="container box style2">
				<header>
					<h2>Valores</h2>
				</header>
			</article>

			<article class="container box style1 right">
				<a href="#" class="image fit"><img src="images/responsabilidad.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h5>Compromiso</h5>
						<br>
					</header>
					<p>Con la calidad de nuestro producto. <br> Ofrenciendo productos de la más alta calidad para nuestros clientes.</p>
				</div>
			</article>

			<article class="container box style1 left">
				<a href="#" class="image fit"><img src="images/compromiso.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h5>Responsabilidad</h5>
					</header>
					<p>Tanto en la vertiente social como en la ecológica, si demostramos ser responsables con la sociedad y el medio ambiente, haremos ver que no nos interesan únicamente los beneficios económicos.</p>
				</div>
			</article>

			<article class="container box style1 right">
				<a href="#" class="image fit"><img src="images/puntualidad.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h5>Puntualidad</h5>
					</header>
					<p>Es importante tener en cuenta que nuestros clientes contaran con su tiempo de entrega en la fecha solicitada.</p>
				</div>
			</article>

			<article class="container box style1 left">
				<a href="#" class="image fit"><img src="images/calidad.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h5>Calidad</h5>
						<br>
					</header>
						<p>Día a día mejorar los procesos de producción de (empresa), con el fin de mejorar la eficiencia y eficacia.</p>
					</ul>
				</div>
			</article>

			<article class="container box style1 right">
				<a href="#" class="image fit"><img src="images/equidad.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h5>Equidad</h5>
					</header>
						<p>Ofreciendo productos que estén al alcance de gran parte de la población, debido al accesible precio y a su disponibilidad.</p>
					</ul>
				</div>
			</article>

		<!-- Portfolio -->
			<article class="container box style2">
				<header>
					<h2>Nuestros modelos</h2>
					 <p>Air go un chaleco perfecto para viajes familiares,<br /> para aventureros que les gustan los retos. Un chaleco es un competitivo <br/> en el mercado que cumple con las mejores características <br /> para todos los amantes de la naturaliza.
					</p>
				</header>
				<div class="inner gallery">
					<div class="row gtr-0">
						<div class="col-3 col-12-mobile"><a href="#" class="image fit"><img src=""><img src="images/thumbs/01.jpg" alt="" title="Ad infinitum" /></a></div>
						<div class="col-3 col-12-mobile"><a href="#" class="image fit"><img src="images/thumbs/02.jpg" alt="" title="Dressed in Clarity" /></a></div>
						<div class="col-3 col-12-mobile"><a href="#" class="image fit"><img src="images/thumbs/03.jpg" alt="" title="Raven" /></a></div>
						<div class="col-3 col-12-mobile"><a href="#" class="image fit"><img src="images/thumbs/04.jpg" alt="" title="I'll have a cup of Disneyland, please" /></a></div>
					</div>
					<div class="row gtr-0">
						<div class="col-3 col-12-mobile"><a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" alt="" title="Cherish" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/07.jpg" class="image fit"><img src="" alt="" title="History was made here" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/08.jpg" class="image fit"><img src="" alt="" title="People come and go and walk away" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" alt="" title="Different." /></a></div>
					</div>
				</div>
			</article>

		<!-- Contact -->
			<article class="container box style3">
				<header>
					<h6>¿Te interesa?</h6>
					<p>Contáctate con nosotros</p>
				</header>
				<form method="post" action="PHP/EnviarCorreo.php?tipo=0">
					<div class="row gtr-50">
						<div class="col-6 col-12-mobile"><input type="text" class="text" name="nombre" placeholder="Nombre" /></div>
						<div class="col-6 col-12-mobile"><input type="text" class="text" name="email" placeholder="Email" /></div>
						<div class="col-12">
							<textarea name="message" placeholder="Mensaje"></textarea>
						</div>
						<div class="col-12">
							<ul class="actions">
								<li><input type="submit" value="Enviar" /></li>
							</ul>
						</div>
					</div>
				</form>
			</article>


		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Air Go. Todos los derechos reservados.</li><li>Design: <a href="#">Jona LNB</a></li>
				</ul>
			</div>
		</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>