<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tulsi Guanipa</title>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Raleway&display=swap" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="CSS/index.css">
	<link rel="stylesheet" href="CSS/normalize.css">
	<link rel="stylesheet" href="">
</head>
<body>
	<main>
		<header>
			<div class="holder">
				<div class="logo">
					<img src="logo/logo.png" width="100" alt="transportes x">
				</div>
				<nav>
					<div class="navegacion">
					<ul class="nav">
						<li><a href="#home" class="smooth">HOME</a></li><li><a href="#about" class="smooth">ABOUT</a></li><li><a href="#skills" class="smooth">SKILLS</a></li><li><a href="#projects" class="smooth">PROJECTS</a></li><li><a href="#contact" class="smooth">CONTACT</a></li><li><a href="resumen/TULSI GUANIPA CV.pdf" class="smooth" target="_blank">RESUME</a></li>
					</ul>
					</div>
				</nav>
			</div>
		</header>
		<a name="home"></a>
		<div data-aos="fade-up">
			<section class="home holder">
					<div class="imghome"> 
						<img src="img/fondohome.png" alt="home">
						<div class="homeinfo">
							<h3>IDEAS CREATIVAS</h3>
							<h1>Soluciones Eficaces</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ipsa nam enim obcaecati a eligendi sunt officiis unde, quasi eos omnis ipsam excepturi exercitationem perspiciati.</p>
						</div>
						<div class="iconosredeshome">
						<a href="https://www.linkedin.com/in/tulsiguanipa/" class="icon-linkedin" target="_blank"></a><a href="https://www.facebook.com/Tulsi.Guanipa" class="icon-facebook"  target="_blank"></a><a href="#contact" class="icon-mensaje"></a><a href="" class="icon-mail"></a>
						</div>

					 </div>
			</section>
		</div>

		<!-- comienza about -->
		<a name="about"></a>
		<div  class="about holder" data-aos="fade-up">
			<div class="contenedorabout left">	
				<div class="info">
					<h2>ACERCA DE MI</h2>
					<h4>Hola soy Tulsi Guanipa</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, tempore recusandae reiciendis consequatur nemo ipsum quae consectetur ex blanditiis eveniet asperiores officiis? Pariatur sed ab alias dolores, numquam fugiat voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, tempore recusandae reiciendis consequatur nemo ipsum quae consectetur ex blanditiis eveniet asperiores officiis? Pariatur sed ab alias dolores, numquam fugiat voluptates</p>
					<div class="resumen"><a href="resumen/TULSI GUANIPA CV.pdf">Mira mi Resumen</a></div>
				</div>
			</div>
			<div class="contenedorabout right">
				<div class="imagentul"><img src="img/tulsicara.jpg" alt="tulsi guanipa" width="200"></div>
			</div>

		</div>

			<!-- comienza skills -->
		<a name="skills"></a>
		<div class="skills holder" data-aos="fade-up">
			<h2>¿En que puedo contribuir a tu proyecto?</h2>
			<div class="contenedor2">			
				<div class="icon1 icon-desing"><h3>Web Desing & Developer</h3></div>
				<div class="icon1 icon-code"><h3>HTML, CSS, JavaScript, PHP</h3></div>
				<div class="icon1 icon-edit-3"><h3>Photoshop & Illustrator</h3></div>
				<div class="icon1 icon-pen-tool"><h3>Modelado 3D y Rendering</h3></div>
				<div class="icon1 icon-settings"><h3>Diseño de Productos</h3></div>
				<div class="icon1 icon-mapa"><h3>Bootstrap, Jquery, Angular</h3></div>
			</div>
		</div>
		<br>

			<!-- comienza proyects -->
		<a name="projects"></a>
		<div data-aos="fade-up">
			<section class="projects">
				<div class="projectscuadro holder">
					<ul><li style="display:inline;"><a href="">ALL/</a></li><li style="display:inline;"><a href="">WEB/</a></li><li style="display:inline;"><a href="">INDUSTRIAL</a></li></ul>
				
					<div class="contenedor1">	
						<div class="item"> <img src="img/projects 7.jpg" alt="project" width="200" height="200"></div>
						<div class="item"><img src="img/projects 2.jpg" alt="project" width="200" height="200"></div>
						<div class="item"><img src="img/projects 6.jpg" alt="project" width="200" height="200"></div>
					</div>
					<div class="contenedor1">
						<div class="item"><img src="img/projects 4.jpg" alt="project" width="200" height="200"></div>
						<div class="item"><img src="img/projects 5.jpg" alt="project" width="200" height="200"></div>
						<div class="item"><img src="img/projects 3.jpg" alt="project" width="200" height="200"></div>
					</div>
				</div>
				
			</section>
		</div>
		<br>
		<br>
		<br>
		<a name="contact"></a>
		<div data-aos="fade-up">
			<section class="contact holder">
					<div class="columna right" >
						<h2>Contacto rápido</h2>
						<form action="procesador_formulario.php" method="POST" class="formulario">	
							<p>
								<label for="email">* Nombre</label>
								<input type="text" name="nombre" value="" id="email" required/>
							</p>
							<p>
								<label for="tel">* E-Mail</label>
								<input type="text" name="email" value="" id="tel" required/>
							</p>
							<p>
								<label for="comentario">* Consulta</label>
								<textarea id="comentario" name="comentarios" required></textarea>
							</p>
							<p class="acciones">
								<input type="submit" value="Enviar" />
								<input type="submit" value="Borrar" />
							</p>
							
						</form>


					</div>
					<div class="contectorap">

						<h6>-   C O N T A C T O</h6>
						<h3>Siempre digo un gran SI a nuevas oportunidades</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic praesentium ab laboriosam quos ullam nisi tempore commodi odio corrupti.</p>
						<div class="mail left">
							<a href="" > tulsiguanipa@gmail.com</a>
						</div>
						<div class="numero left">
							<a href="" > +54 9 1122542482 </a>
						</div>
					</div>
					<div class="otrosp left">
						<h6>Otros lugares donde me puedes encontrar</h6>
						<br>
						<div class="iconosredescontacto">
						<a href="https://www.facebook.com/Tulsi.Guanipa" class="icon-facebook" target="_blank"></a><a href="https://www.linkedin.com/in/tulsiguanipa/" class="icon-linkedin" target="_blank"></a>
						</div>
					</div>
				
			</section>
		</div>
		<section class="resume">
			
		</section>
		<br>
	<footer>
		<div class="footer holder">
			<div class="copyright">
				<h5>Copyright © 2019 · Tulsi Guanipa</h5>
			</div>
			<div class="footernav">
				<nav>
					<div class="navegacionfooter">
					<ul class="nav">
						<li><a href="#home">HOME</a></li><li><a href="#about">ABOUT</a></li><li><a href="#skills">SKILLS</a></li><li><a href="#projects">PROJECTS</a></li><li><a href="#contact">CONTACT</a></li><li><a href="pdf">RESUME</a></li>
					</ul>
					</div>
				</nav>
			</div>
		</div>

	</footer>

	</main>

	<script src="js/aos.js"></script>
	<script>
 		 AOS.init();
	</script>
</body>
</html>