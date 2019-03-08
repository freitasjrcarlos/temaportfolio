<?php
// Template Name: Home
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<body>
	<header class="menu">
		<a class="logo" href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ico/logo.png" alt="Carlos Freitas Front-end developer"></a>
		<span class="mobile-btn"></span>
		<nav class="menu-nav mobile-menu">
			<ul>
				<li><a class="active" href="#">Home</a></li>
				<li><a href="/sobre">Sobre</a></li>
				<li><a href="/jobs">Jobs</a></li>
			</ul>
		</nav>
	</header>

	<div class="topo">
		<div class="text">
			<h2>Carlos Freitas</h2>
			<h1>Portfólio de projetos</h1>
			<a  class="btn" href="/sobre">Sobre</a>
		</div>
	</div>

	<div class="tree-coluns">
		<div class="colum-one">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ico/icoDesign.png" alt="Carlos Freitas Front-end developer">
				<h3>Design</h3>
				<h4>Logos</h4>
		</div>

		<div class="colum-two">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ico/icoCriacao.png" alt="Carlos Freitas Front-end developer">
				<h3>Criação</h3>
				<h4>Sites</h4>
		</div>

		<div class="colum-tree">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ico/icoMarketing.png" alt="Carlos Freitas Front-end developer">
				<h3>Marketing</h3>
				<h4>Campanhas</h4>
		</div>
	</div>

		<div class="two-coluns">
			<div class="left">				
				<div class="sub-left-one">
					<h4>Persistência e</h4>
					<h3>Resultados</h3>
					<a class="btn" href="/jobs">Trabalhos</a>

				</div>

				<div class="sub-left-two">
					<h4>Movido à</h4>
					<h3>Desafios</h3>
					<a class="btn" href="/sobre">Mais</a>
				</div>
			</div>

			<div class="right">
				<h4>Vamos trabalhar</h4>
				<h3>Juntos?</h3>
				<a class="btn" href="mailto:carlos.freitas@turtleagencia.com.br">Vamos!</a>
			</div>
		</div>


	<?php endwhile; else: endif; ?>

		<?php get_footer(); ?>

