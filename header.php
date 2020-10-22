<!DOCTYPE html>
<html lang="hr">

<head>
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
	<link rel="icon" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/logo-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
</head>

<body>
    <header id="nav-bar">
        <div id="nav-bar-container" class="container">
            <a href="#" id="header-logo"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/logo-full.png" /></a>
            <nav id="nav-links">
				<?php wp_nav_menu(array('name' => 'Primarni', 'container' => false, 'menu_class' => 'topnav')); ?>
                <a href="#">O nama</a>
                <a href="#">Vijesti</a>
                <a href="#">Događanja</a>
                <a href="#">Publikacije</a>
                <form role="search" action="https://udrugaekozagreb.hr/" method="get" id="search">
                    <input type="search" autocomplete="off" name="s" value="<?php the_search_query(); ?>" id="search-text" placeholder="Pretraživanje">
                    <button type="submit" id="search-button" value="">
                        <svg id="search-icon" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.2708 11.0833H11.6454L11.4238 10.8696C12.1996 9.96708 12.6667 8.79542 12.6667 7.52083C12.6667 4.67875 10.3629 2.375 7.52083 2.375C4.67875 2.375 2.375 4.67875 2.375 7.52083C2.375 10.3629 4.67875 12.6667 7.52083 12.6667C8.79542 12.6667 9.96708 12.1996 10.8696 11.4238L11.0833 11.6454V12.2708L15.0417 16.2213L16.2213 15.0417L12.2708 11.0833ZM7.52083 11.0833C5.54958 11.0833 3.95833 9.49208 3.95833 7.52083C3.95833 5.54958 5.54958 3.95833 7.52083 3.95833C9.49208 3.95833 11.0833 5.54958 11.0833 7.52083C11.0833 9.49208 9.49208 11.0833 7.52083 11.0833Z" fill="#637076"/>
                        </svg>
                    </button>
                </form>
            </nav>
            <button id="mainnav-toggle" onclick="document.body.classList.toggle('mainnav-active')">
                <span class="hamburger"></span>
            </button>
        </div>
    </header>