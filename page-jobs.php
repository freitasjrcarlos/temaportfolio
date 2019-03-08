<?php
// Template Name: Jobs
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<header class="menu">
		<a class="logo" href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ico/logo.png"></a>
		<span class="mobile-btn"></span>
		<nav class="menu-nav mobile-menu">
			<ul>
				<li><a href="/home">Home</a></li>
				<li><a href="/sobre">Sobre</a></li>
				<li><a class="active" href="#">Jobs</a></li>
			</ul>
		</nav>
	</header>

		<div class="caption2">
		<div class="container">
			<h3 class="job-title">Jobs</h3>
			<h4 class="sobre-sub-title">Alguns de meus trabalhos</h4>
		</div>		
	</div>

	<div class="container-jobs">
		<div class="jobs-site">
			<a href="https://freitas.space" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/portfolio.png"></a>
			<a href="http://turtleagencia.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/turtle.png"></a>
			<a href="http://projetos.freitas.space/fashion/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/index.png"></a>
			<a href="http://projetos.freitas.space/fashion/women.php" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/shop.png"></a>
		<a href="http://projetos.freitas.space/fashion/car.php" target="_blank">	<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/car.png"></a>
		</div>

		
	</div>
</body>


<?php endwhile; else: endif; ?>

		<?php get_footer(); ?>


