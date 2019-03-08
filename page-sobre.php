<?php
// Template Name: Sobre
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<body>
		<header class="menu">
		<a class="logo" href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ico/logo.png"></a>
		<span class="mobile-btn"></span>
		<nav class="menu-nav mobile-menu">
			<ul>
				<li><a href="/home">Home</a></li>
				<li><a  class="active" href="#">Sobre</a></li>
				<li><a href="/jobs">Jobs</a></li>
			</ul>
		</nav>
	</header>

	<div class="caption caption1">
		<div class="container containerPrimary">
			<h1 class="sobre-title"><?php the_field('title_cap1'); ?></h1>
			<h2 class="sobre-sub-title"><?php the_field('subtitle_cap1')?></h2>
			<p class="paragrafo"><?php the_field('p_cap1')?></p>
		</div>		
	</div>

	<div class="caption caption2">
		<div class="container">
			<h3 class="sobre-title"><?php the_field('title_cap2'); ?></h3>
			<h4 class="sobre-sub-title"><?php the_field('subtitle_cap2')?></h4>
			<p class="paragrafo"><?php the_field('p_cap2')?></p>
		</div>		
	</div>

		<div class="caption caption3">
		<div class="container">
			<h3 class="sobre-title"><?php the_field('title_cap3'); ?></h3>
			<h4 class="sobre-sub-title"><?php the_field('subtitle_cap3')?></h4>
			<p class="paragrafo"><?php the_field('p_cap3')?></p>
		</div>		
	</div>

		<div class="caption caption4">
		<div class="container">
			<h3 class="sobre-title"><?php the_field('title_cap4'); ?></h3>
			<h4 class="sobre-sub-title"><?php the_field('subtitle_cap4')?></h4>
			<p class="paragrafo"><?php the_field('p_cap4')?> </p>
		</div>		
	</div>

		<div class="caption caption5">
		<div class="container">
			<h3 class="sobre-title"><?php the_field('title_cap5'); ?></h3>
			<h4 class="sobre-sub-title"><?php the_field('subtitle_cap5')?></h4>
			<p class="paragrafo"><?php the_field('p_cap5')?></p>
		</div>		
	</div>

		<div class="caption caption6">
		<div class="container">
			<h3 class="sobre-title"><?php the_field('title_cap6'); ?></h3>
			<p class="paragrafo"><?php the_field('p_cap6')?></p>
			<a  class="btn" href="">Contato</a>
		</div>		
	</div>
</body>

	<?php endwhile; else: endif; ?>

		<?php get_footer(); ?>