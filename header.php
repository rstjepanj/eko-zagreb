<!DOCTYPE html>
<html lang="hr">
<head>
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin-ext" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="icon" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/stari-logo-bez-teksta.jpg">
	<?php if (is_front_page()) : ?><link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/><?php endif; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav class="center-content">
			<button id="ham-icon" onclick="hamburgerFunction()"><span class="fa fa-bars fa-lg" style="vertical-align: initial;" aria-hidden="true"></span></button>
			<?php wp_nav_menu(array('name' => 'Primarni', 'container' => false, 'menu_class' => 'topnav', 'menu_id' => 'myTopnav', 'depth' => 2, 'link_after' => '<span class="fa fa-angle-down" aria-hidden="true"></span>')); ?>
			<div id="search">
				<form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
		            <input type="search" autocomplete="off" name="s" value="<?php the_search_query(); ?>" id="search-text" placeholder="Pretraživanje" onblur="searchFunction()" required>
		            <button type="submit" id="search-button" value=""><span class="fa fa-search fa-lg" style="vertical-align: initial;" aria-hidden="true"></span></button>
		        </form>
			</div>
			<button id="mobile-search-button" onclick="searchFunction()"><span class="fa fa-search fa-lg" style="vertical-align: initial;" aria-hidden="true"></span></button>
		</nav>
	</header>
	<div class="center-content">
	<main class="clearfix">
		<div id="naziv">
			<h1>Udruga eko Zagreb</h1>
		</div>