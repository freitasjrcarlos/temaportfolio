<!DOCTYPE html>
<html lang="pt-br">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112402787-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112402787-2');
</script>



	<meta charset="utf-8">
	<title><?php the_field('titulo_pagina') ?></title>
	<meta name="description" content="<?php the_field('description_pagina') ?>">
	<meta property="og:type" content="website"/>		
	<meta property="og:title" content="Carlos Freitas | Portfólio"/>	
	<meta property="og:description" content="Carlos Freitas, desenvolvedor front end e mobile. Experiência como UX/UI designer e social media."/>
	<meta property="og:url" content="http://freitas.space"/>
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/og-image.jpg"/> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ico/ico.ico">

<?php wp_head(); ?>
</head>